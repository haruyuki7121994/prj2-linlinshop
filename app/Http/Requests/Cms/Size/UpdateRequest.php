<?php

namespace App\Http\Requests\Cms\Size;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'is_active' => 'required|in:0,1',
            'name' => 'required',
            
        ];
    }

    public function authorize()
    {
        return true;
    }
}
