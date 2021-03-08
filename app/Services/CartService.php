<?php


namespace App\Services;

use Darryldecode\Cart\Exceptions\InvalidItemException;

class CartService
{
    /**
     * @var int|mixed|string|null
     */
    private $session;

    public function add($productAttr, $qty)
    {
        try {
            $session = $this->checkSession('guest' . now()->timestamp);
            session()->put('session-cart', $session);

            $promotionPrice = $productAttr->getPromotionPrice();

            \Cart::session($session);
            \Cart::add([
                'id' => $productAttr->id,
                'name' => $productAttr->product->name,
                'price' => $promotionPrice ?? $productAttr->price,
                'quantity' => $qty,
                'attributes' => [
                    'size' => $productAttr->size->name,
                    'color' => $productAttr->color->name,
                    'image' => $productAttr->images ? $productAttr->images->url : '',
                    'slug' => $productAttr->product->slug,
                ]
            ]);
            return \Cart::session($session)->getTotalQuantity();
        } catch (InvalidItemException $e) {
            return $e;
        }
    }

    public function update($productAttr, $qty)
    {
        try {
            $session = $this->checkSession(null);
            \Cart::session($session);
            \Cart::update($productAttr->id, array(
                'quantity' => $qty
            ));
            return \Cart::session($session)->getContent();
        } catch (InvalidItemException $e) {
            return $e;
        }
    }

    public function remove($productAttr)
    {
        try {
            $session = $this->checkSession(null);
            \Cart::session($session);
            \Cart::remove($productAttr->id);
            return \Cart::session($session)->getContent();
        } catch (InvalidItemException $e) {
            return $e;
        }
    }

    public function get()
    {
        $session = $this->checkSession(null);
        return $session ? \Cart::session($session)->getContent() : [];
    }

    public function totalQuantity()
    {
        $session = $this->checkSession(null);
        return $session ? \Cart::session($session)->getTotalQuantity() : 0;
    }

    public function getSubTotal()
    {
        $session = $this->checkSession(null);
        return $session ? \Cart::session($session)->getTotal() : 0;
    }

    public function clear()
    {
        $session = $this->checkSession(null);
        return $session ? \Cart::session($session)->clear() : false;
    }

    public function checkSession($sessionDefault)
    {
        if (session()->get('session-cart')) $session = session()->get('session-cart');
        elseif(\Auth::check()) $session = \Auth::id();
        else $session = $sessionDefault;
        return $session;
    }


}
