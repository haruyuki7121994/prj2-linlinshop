<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Order\CreateRequest;
use App\Order;
use App\OrderDetail;
use App\ProductAttribute;
use App\Services\CartService;
use App\Transport;
use DB;

class OrderController extends Controller
{
    /**
     * @var CartService
     */
    private $cartService;

    /**
     * OrderController constructor.
     * @param CartService $cartService
     */
    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function handle(CreateRequest $request)
    {
        try {
            DB::beginTransaction();
            $subTotal = $this->cartService->getSubTotal();
            $shipping = Transport::whereProvinceId($request->province_id)->first()->price;
            $vat = $subTotal * 10 / 100;
            $request->merge([
                'code' => now()->timestamp,
                'sub_total' => $subTotal,
                'shipping_fee' => $shipping,
                'vat' => $vat,
                'total' => (float)$subTotal + (float)$shipping + (float)$vat
            ]);
            $order = Order::create($request->all());
            $this->convertCartToOrderDetail($order);
            $this->cartService->clear();
            DB::commit();
            return redirect()->route('frontend.order.success', $order->code);
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('frontend.home');
        }
    }

    private function convertCartToOrderDetail($order)
    {
        try {
            DB::beginTransaction();
            $cart = $this->cartService->get();
            foreach ($cart as $item) {
                $productAttr = ProductAttribute::whereId($item->id)->first();
                OrderDetail::create([
                    'product_attr_id' => $item->id,
                    'order_id' => $order->id,
                    'qty' => $item->quantity,
                    'unit_price' => $productAttr->price,
                    'real_price' => $item->price,
                    'total_price' => (int)$item->quantity * (float)$item->price,
                ]);
                $productAttr->update(['qty' => (int)$productAttr->qty - (int)$item->quantity]);
            }
            DB::commit();
            return true;
        } catch (\Exception $e) {
            DB::rollback();
            return $e;
        }
    }

    public function success(Order $order)
    {
        return view('frontend.success', compact('order'));
    }
}
