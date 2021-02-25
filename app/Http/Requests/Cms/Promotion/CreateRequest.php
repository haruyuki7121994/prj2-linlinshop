<?php

namespace App\Http\Requests\Cms\Promotion;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'from_date' => 'required|date_format:Y-m-d',
            'to_date' => 'required|date_format:Y-m-d',
            'is_active' => 'required|in:0,1',
            'note' => 'required',
            'percentage' => 'required|numeric|min:0'
        ];
    }

    public function authorize()
    {
        return true;
    }
}
