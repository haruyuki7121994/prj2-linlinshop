<?php

namespace App\Http\Requests\Cms\Size;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'is_active' => 'required|in:0,1',
            'name' => 'required|unique:sizes,name',
            
        ];
    }

    public function authorize()
    {
        return true;
    }
}
