<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{
    public function cart()
    {
        return view('fe.view_cart');
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "normal_price" => $product->normal_price,
                "image"=> $product->image,
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Add to cart successfully')->with('product', $product);
    }

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product successfully removed!');
        }
    }

    public function clearCart(Request $request)
    {
        if ($request->session()->has('cart')) {
            $request->session()->forget('cart');
        }
        session()->flash('success', 'Cart has cleared!');
        return view('fe.index');
    }

    public function updateCart(Request $request)
    {
        $oldCart = session()->get('cart');
        $newCart = new Cart($oldCart);
        $newCart->updateCartDetail($request->id, $request->quantity);
        session()->put('cart', $newCart);
        return view('frontend.components.cart.listCart');
    }

    public function checkout()
    {
        $user = auth()->user();
        return view('frontend.components.cart.checkout', compact('user'));
    }

    public function processCheckout(Request $request)
    {
        // dd($request->email);
        if (session()->has('cart')) {
            $cart = session()->get('cart');
            $order = Order::create([
                'user_id' => $request->id,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'payment' => $request->payment,
                'quantity' => $cart->totalQuantity,
                'total' => $cart->totalPrice,
            ]);

            // lưu xuống orderProduct
            if (!empty($cart)) {
                foreach ($cart->products as $key => $value) {
                    $order->products()->attach($key, ['quantity' => $value['quantity']]);
                }
            }

            $name = $request->name;
            session()->forget('cart');
            return view('frontend.components.cart.confirmCheckout', compact('name'));
        } else {
            return redirect()->route('customer.product');
        }
    }
}
