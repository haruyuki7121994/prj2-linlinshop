<?php

namespace App\Http\Requests\Cms\Transport;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'province_id' => 'required|exists:provinces,id',
          
            'price' => 'required|numeric|min:1',
        ];
    }

    public function authorize()
    {
        return true;
    }
 
}
