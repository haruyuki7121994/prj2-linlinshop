<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use App\OrderDetail;
use App\Product;
use App\Promotion;
use App\User;

class HomeController extends Controller
{
    public function index()
    {
        $query = Order::query();

        //summary card
        $totalOrder = $query->count('*');
        $totalAmount = $query->whereStatus(Order::PAID)->sum('total');
        $totalUser = User::whereIsAdmin(0)->count('*');
        $totalSoldProduct = $query
            ->leftJoin('order_details', 'order_id', '=', 'orders.id')
            ->whereStatus(Order::PAID)
            ->sum('qty');

        //recent orders
        $recentOrders = Order::with('user')->orderBy('id', 'desc')->limit(5)->get();

        //sales activity
        $totalProduct = Product::count('*');
        $totalPromotion = Promotion::count('*');

        return view('cms.dashboard', compact('totalAmount', 'totalOrder', 'totalUser', 'totalSoldProduct', 'recentOrders', 'totalProduct', 'totalPromotion'));
    }
}
