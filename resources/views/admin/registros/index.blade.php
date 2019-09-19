@extends('layouts.admin')
@section('content')
@can('registro_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.registros.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.registro.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.registro.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Registro">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.registro.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.registro.fields.fecha') }}
                        </th>
                        <th>
                            {{ trans('cruds.registro.fields.hora') }}
                        </th>
                        <th>
                            {{ trans('cruds.registro.fields.origen') }}
                        </th>
                        <th>
                            {{ trans('cruds.registro.fields.destino') }}
                        </th>
                        <th>
                            {{ trans('cruds.registro.fields.duracion') }}
                        </th>
                        <th>
                            {{ trans('cruds.registro.fields.codigo') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($registros as $key => $registro)
                        <tr data-entry-id="{{ $registro->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $registro->id ?? '' }}
                            </td>
                            <td>
                                {{ $registro->fecha ?? '' }}
                            </td>
                            <td>
                                {{ $registro->hora ?? '' }}
                            </td>
                            <td>
                                {{ $registro->origen ?? '' }}
                            </td>
                            <td>
                                {{ $registro->destino ?? '' }}
                            </td>
                            <td>
                                {{ $registro->duracion ?? '' }}
                            </td>
                            <td>
                                {{ $registro->codigo ?? '' }}
                            </td>
                            <td>
                                @can('registro_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.registros.show', $registro->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('registro_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.registros.edit', $registro->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('registro_delete')
                                    <form action="{{ route('admin.registros.destroy', $registro->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('registro_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.registros.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 6, 'desc' ]],
    pageLength: 10,
  });
  $('.datatable-Registro:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection