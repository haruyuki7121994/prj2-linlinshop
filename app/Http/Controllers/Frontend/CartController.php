<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Cart\AddRequest;
use App\Http\Requests\Frontend\Cart\UpdateRequest;
use App\ProductAttribute;
use App\Province;
use App\Services\CartService;
use Darryldecode\Cart\Cart;
use Darryldecode\Cart\Exceptions\InvalidItemException;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * @var CartService
     */
    private $cartService;

    /**
     * CartController constructor.
     * @param CartService $cartService
     */
    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function index()
    {
//        session()->forget('session-cart');
        $cartItems = $this->cartService->get();
        if (count($cartItems) == 0) return redirect()->route('frontend.home');
        $provinces = Province::IsActive()->get();
        return view('frontend.cart', compact('provinces', 'cartItems'));
    }

    public function add(AddRequest $request)
    {
        $productAttr = ProductAttribute::with(['color', 'size', 'images', 'product'])->where(['product_id' => $request['product-id'], 'size_id' => $request['size-id'], 'color_id' => $request['color-id']])->first();
        if (!$productAttr) return response()->json(['stt' => 'error', 'msg' => 'invalid product attribute']);
        if ($productAttr->qty < $request->qty) return response()->json(['stt' => 'error', 'msg' => 'invalid qty']);

        $res = $this->cartService->add($productAttr, $request->qty);
        return $res instanceof InvalidItemException
            ? response()->json(['stt' => 'error', 'msg' => $res->getMessage()])
            : response()->json(['stt' => 'success', 'msg' => $res]);
    }

    public function update(UpdateRequest $request)
    {
        $productAttr = ProductAttribute::with(['color', 'size', 'images', 'product'])->whereId($request->id)->first();
        if ($request->qty > 0 && $productAttr->qty < $request->qty) return response()->json(['stt' => 'error', 'msg' => 'invalid qty']);

        $res = $request->action == 'update' ? $this->cartService->update($productAttr, $request->qty) : $this->cartService->remove($productAttr);

        return $res instanceof InvalidItemException
            ? response()->json(['stt' => 'error', 'msg' => $res->getMessage()])
            : response()->json(['stt' => 'success', 'msg' => ['cart' => $res, 'total' => $this->cartService->totalQuantity()]]);
    }
}
