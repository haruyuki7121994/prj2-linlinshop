<?php


namespace App\Services;

use Darryldecode\Cart\Exceptions\InvalidItemException;

class CartService
{
    public function add($productAttr, $qty, $user_id = null)
    {
        try {
            $session = $user_id ?? 123456;
            \Cart::session($session);
            \Cart::add([
                'id' => $productAttr->id,
                'name' => $productAttr->product->name,
                'price' => $productAttr->price,
                'quantity' => $qty,
                'attributes' => [
                    'size' => $productAttr->size->name,
                    'color' => $productAttr->color->name,
                ]
            ]);
            return \Cart::session(123456)->getTotalQuantity();
        } catch (InvalidItemException $e) {
            return $e;
        }
    }
}
