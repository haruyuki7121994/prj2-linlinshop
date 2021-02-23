<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Cart\AddRequest;
use App\ProductAttribute;
use App\Services\CartService;
use Darryldecode\Cart\Cart;
use Darryldecode\Cart\Exceptions\InvalidItemException;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(AddRequest $request)
    {
        $productAttr = ProductAttribute::where(['product_id' => $request['product-id'], 'size_id' => $request['size-id'], 'color_id' => $request['color-id']])->first();
        if (!$productAttr) return response()->json(['stt' => 'error', 'msg' => 'invalid product attribute']);
        if ($productAttr->qty < $request->qty) return response()->json(['stt' => 'error', 'msg' => 'invalid qty']);

        $cart = new CartService();
        $res = $cart->add($productAttr, $request->qty);
        return $res instanceof InvalidItemException
            ? response()->json(['stt' => 'error', 'msg' => $res->getMessage()])
            : response()->json(['stt' => 'success', 'msg' => $res]);
    }
}
