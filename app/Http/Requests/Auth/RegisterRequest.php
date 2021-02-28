<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function rules()
    {
        return [
            'email' => 'email|required|unique:users,email',
            'password' => 'required|min:6',
            'name' => 'required',
            'mobile' => 'required',
            'province_id' => 'required|exists:provinces,id',
            'address' => 'required'
        ];
    }

    public function authorize()
    {
        return true;
    }
}
