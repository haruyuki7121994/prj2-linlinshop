<?php

namespace App\Http\Requests\Frontend\Product;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'description' => 'required',
            'is_featured' => 'required|in:0,1',
            'category_id' => 'required|exists:categories,id',
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
