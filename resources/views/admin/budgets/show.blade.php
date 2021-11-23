@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.budget.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.budgets.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.budget.fields.id') }}
                        </th>
                        <td>
                            {{ $budget->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.budget.fields.budget_category') }}
                        </th>
                        <td>
                            {{ $budget->budget_category->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.budget.fields.start_date') }}
                        </th>
                        <td>
                            {{ $budget->start_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.budget.fields.end_date') }}
                        </th>
                        <td>
                            {{ $budget->end_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.budget.fields.amount') }}
                        </th>
                        <td>
                            {{ $budget->amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.budget.fields.description') }}
                        </th>
                        <td>
                            {{ $budget->description }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.budgets.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection