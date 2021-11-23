<?php

namespace App\Http\Requests;

use App\Models\Budget;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreBudgetRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('budget_create');
    }

    public function rules()
    {
        return [
            'start_date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'end_date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'amount' => [
                'required',
            ],
            'description' => [
                'string',
                'nullable',
            ],
        ];
    }
}
