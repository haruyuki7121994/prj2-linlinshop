<?php

namespace App\Http\Requests\Cms\Color;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'is_active' => 'required|in:0,1',
            'name' => 'required|unique:colors,name',
            'code' => 'required|unique:colors,code',

        ];
    }

    public function authorize()
    {
        return true;
    }

  
}
