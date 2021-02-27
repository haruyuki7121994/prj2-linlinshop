<?php

namespace App\Http\Requests\Cms\Province;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|unique:provinces,name',
            'slug' => 'required_if:name,string',
            'type' => 'required',
            'is_active' => 'required|in:0,1'
        ];
    }

    public function authorize()
    {
        return true;
    }

    public function prepareForValidation()
    {
        $this->merge([
            'slug' => \Str::slug($this->name),
        ]);
    }
}
