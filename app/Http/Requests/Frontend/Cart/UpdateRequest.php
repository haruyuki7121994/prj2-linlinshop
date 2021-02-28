<?php

namespace App\Http\Requests\Frontend\Cart;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'id' => 'required|exists:product_attributes,id',
            'qty' => 'required|min:0',
            'action' => 'required',
        ];
    }

    public function authorize()
    {
        return true;
    }
}
