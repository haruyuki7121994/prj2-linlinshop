<?php

namespace App\Http\Requests\Cms\Product;

use Illuminate\Foundation\Http\FormRequest;

class EditAttributesRequest extends FormRequest
{
    public function rules()
    {
        return [
            'color_id' => 'required|exists:colors,id',
            'size_id' => 'required|exists:sizes,id',
            'image_url' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function authorize()
    {
        return true;
    }
}
