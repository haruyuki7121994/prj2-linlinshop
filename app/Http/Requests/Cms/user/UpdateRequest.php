<?php

namespace App\Http\Requests\Cms\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'mobile' => 'required',
            'address' => 'required',
            'is_active' => 'required|in:0,1'
        ];
    }

    public function authorize()
    {
        return true;
    }


}
