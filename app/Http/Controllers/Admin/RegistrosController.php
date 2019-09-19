<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyRegistroRequest;
use App\Http\Requests\StoreRegistroRequest;
use App\Http\Requests\UpdateRegistroRequest;
use App\Registro;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RegistrosController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('registro_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $registros = Registro::all();

        return view('admin.registros.index', compact('registros'));
    }

    public function create()
    {
        abort_if(Gate::denies('registro_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.registros.create');
    }

    public function store(StoreRegistroRequest $request)
    {
        $registro = Registro::create($request->all());

        return redirect()->route('admin.registros.index');
    }

    public function edit(Registro $registro)
    {
        abort_if(Gate::denies('registro_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.registros.edit', compact('registro'));
    }

    public function update(UpdateRegistroRequest $request, Registro $registro)
    {
        $registro->update($request->all());

        return redirect()->route('admin.registros.index');
    }

    public function show(Registro $registro)
    {
        abort_if(Gate::denies('registro_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.registros.show', compact('registro'));
    }

    public function destroy(Registro $registro)
    {
        abort_if(Gate::denies('registro_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $registro->delete();

        return back();
    }

    public function massDestroy(MassDestroyRegistroRequest $request)
    {
        Registro::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
