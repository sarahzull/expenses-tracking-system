<?php

namespace App\Http\Requests;

use App\Models\BudgetCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateBudgetCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('budget_category_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
        ];
    }
}
