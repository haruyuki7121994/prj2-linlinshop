<?php

namespace App\Http\Requests\Frontend\Order;

use App\Order;
use App\Transport;
use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'shipping_full_name' => 'required',
            'shipping_mobile' => 'required',
            'email' => 'required|email',
            'province_id' => 'required|exists:transports,province_id',
            'house_number_street' => 'required',
            'payment_method' => ['required', 'in:' . Order::COD . ',' . Order::TRANSFER]
        ];
    }

    public function authorize()
    {
        return true;
    }

    public function prepareForValidation()
    {
        $this->merge([
            'payment_method' => $this->cod == 'on' ? Order::COD : Order::TRANSFER,
        ]);
    }
}
