@extends('layouts.admin')
@section('content')
@can('budget_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.budgets.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.budget.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.budget.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Budget">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.budget.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.budget.fields.budget_category') }}
                        </th>
                        <th>
                            {{ trans('cruds.budget.fields.start_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.budget.fields.end_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.budget.fields.amount') }}
                        </th>
                        <th>
                            {{ trans('cruds.budget.fields.description') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($budgets as $key => $budget)
                        <tr data-entry-id="{{ $budget->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $budget->id ?? '' }}
                            </td>
                            <td>
                                {{ $budget->budget_category->name ?? '' }}
                            </td>
                            <td>
                                {{ $budget->start_date ?? '' }}
                            </td>
                            <td>
                                {{ $budget->end_date ?? '' }}
                            </td>
                            <td>
                                {{ $budget->amount ?? '' }}
                            </td>
                            <td>
                                {{ $budget->description ?? '' }}
                            </td>
                            <td>
                                @can('budget_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.budgets.show', $budget->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('budget_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.budgets.edit', $budget->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('budget_delete')
                                    <form action="{{ route('admin.budgets.destroy', $budget->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('budget_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.budgets.massDestroy') }}",
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
    orderCellsTop: true,
    order: [[ 1, 'asc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Budget:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection