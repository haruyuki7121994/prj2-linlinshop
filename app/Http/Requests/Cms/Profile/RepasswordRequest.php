<?php

namespace App\Http\Requests\Cms\Profile;

use Illuminate\Foundation\Http\FormRequest;

class RepasswordRequest extends FormRequest
{
    public function rules()
    {
        return [
            'new_password' => 'required',
            're_password' => 'required|same:new_password'
        ];
    }

    public function authorize()
    {
        return true;
    }
}
