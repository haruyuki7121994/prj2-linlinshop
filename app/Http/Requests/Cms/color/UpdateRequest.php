<?php

namespace App\Http\Requests\Cms\color;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'is_active' => 'required|in:0,1',
            'name' => 'required',
            'slug' => 'required_if:name,string',
        ];
    }

    public function authorize()
    {
        return true;
    }

  
}
