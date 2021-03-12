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
        ];
    }

    public function authorize()
    {
        return true;
    }


}
