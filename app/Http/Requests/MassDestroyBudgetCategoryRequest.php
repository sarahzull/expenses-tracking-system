<?php

namespace App\Http\Requests;

use App\Models\BudgetCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyBudgetCategoryRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('budget_category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:budget_categories,id',
        ];
    }
}
