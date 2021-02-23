<?php

namespace App\Http\Requests\Frontend\Cart;

use Illuminate\Foundation\Http\FormRequest;

class AddRequest extends FormRequest
{
    public function rules()
    {
        return [
            'color-id' => 'required|exists:colors,id',
            'size-id' => 'required|exists:sizes,id',
            'product-id' => 'required|exists:products,id',
        ];
    }

    public function authorize()
    {
        return true;
    }
}
