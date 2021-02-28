<?php

namespace App\Http\ViewComposers;

use App\Services\CartService;
use Illuminate\View\View;

class CartComposer
{
    public function compose(View $view)
    {
        $service = new CartService();
        $view->with('totalCart', $service->totalQuantity());
    }
}
