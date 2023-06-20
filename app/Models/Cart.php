<?php

namespace App\Models;

class Cart 
{
    public $products = null;
    public $totalPrice = 0;
    public $totalQuantity = 0;

    public function __construct($cart)
    {
        if($cart) {
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQuantity = $cart->totalQuantity;
        }
    }

    public function addCartDetail($id, $quantity, $product) {
        $newProduct = ['quantity' => 0, 'price' => $product->promotion_price, 'productInfo' => $product];
        if($this->products) {
            if(isset($this->products[$id])) {
                $newProduct = $this->products[$id];
            }
        }
        $newProduct['quantity'] += $quantity;
        $newProduct['price'] = $newProduct['quantity'] * $product->promotion_price;
        $this->products[$id] = $newProduct;
        $this->totalPrice += $quantity * $product->promotion_price;   
        $this->totalQuantity += $quantity;
        ;
    }

    public function deleteCartDetail($id) {
        $this->totalQuantity -= $this->products[$id]['quantity'];
        $this->totalPrice -= $this->products[$id]['price'];
        unset($this->products[$id]);
    }

    public function updateCartDetail($id, $quantity) {
        $this->totalQuantity -= $this->products[$id]['quantity'];
        $this->totalPrice -= $this->products[$id]['price'];

        $this->products[$id]['quantity'] = $quantity;
        $this->products[$id]['price'] = $quantity * $this->products[$id]['productInfo']->promotion_price;

        $this->totalQuantity += $this->products[$id]['quantity'];
        $this->totalPrice += $this->products[$id]['price'];

    }
}
