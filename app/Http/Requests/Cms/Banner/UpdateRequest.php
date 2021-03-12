<?php

namespace App\Http\Requests\Cms\Banner;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'position' => 'required',
            'image_url' => 'required',
            'is_active' => 'required|in:0,1'
        ];
    }

    public function authorize()
    {
        return true;
    }
}
