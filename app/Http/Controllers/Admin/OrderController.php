<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with(['user'])->orderBy('id', 'desc')->paginate(5);
        return view('cms.order.index', compact('orders'));
    }

    public function edit(Order $order)
    {
        return view('cms.order.invoice', compact('order'));
    }

    public function update(Order $order, Request $request)
    {
        $order->update(['status' => $request->action]) ;
        return redirect()->route('cms.order.edit', $order->id);
    }
}
