<?php

namespace App\Http\Controllers\Admin;

use App\Contacto;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyContactoRequest;
use App\Http\Requests\StoreContactoRequest;
use App\Http\Requests\UpdateContactoRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ContactosController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('contacto_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contactos = Contacto::all();

        return view('admin.contactos.index', compact('contactos'));
    }

    public function create()
    {
        abort_if(Gate::denies('contacto_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contactos.create');
    }

    public function store(StoreContactoRequest $request)
    {
        $contacto = Contacto::create($request->all());

        return redirect()->route('admin.contactos.index');
    }

    public function edit(Contacto $contacto)
    {
        abort_if(Gate::denies('contacto_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contactos.edit', compact('contacto'));
    }

    public function update(UpdateContactoRequest $request, Contacto $contacto)
    {
        $contacto->update($request->all());

        return redirect()->route('admin.contactos.index');
    }

    public function show(Contacto $contacto)
    {
        abort_if(Gate::denies('contacto_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contactos.show', compact('contacto'));
    }

    public function destroy(Contacto $contacto)
    {
        abort_if(Gate::denies('contacto_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contacto->delete();

        return back();
    }

    public function massDestroy(MassDestroyContactoRequest $request)
    {
        Contacto::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
