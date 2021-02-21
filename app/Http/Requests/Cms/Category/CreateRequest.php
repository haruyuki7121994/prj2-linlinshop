<?php

namespace App\Http\Requests\Cms\Category;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'is_active' => 'required|in:0,1',
            'name' => 'required|unique:categories,name',
            'slug' => 'required_if:name,string',
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
