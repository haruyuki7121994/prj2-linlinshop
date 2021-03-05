<?php

namespace App\Http\Requests\Cms\Profile;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'mobile' => 'required',
            'address' => 'required',
            'province_id' => 'required|exists:provinces,id'
        ];
    }

    public function authorize()
    {
        return true;
    }


}
