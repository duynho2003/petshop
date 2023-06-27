<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{
    public function cart()
    {
        $user = Auth::user();
        return view('fe.view_cart', compact('user'));
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        // mảng associate
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

    public function remove(Request $request) //xóa từng món
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

    public function clearCart(Request $request) //làm trống giỏ hàng
    {
        if ($request->session()->has('cart')) {
            $request->session()->forget('cart');
        }
        return view('fe.view_cart');
    }

    public function updateCart(Request $request)
    {
        $pids = $request->pids;
        $qties = $request->qties;
        $cart = $request->session()->get('cart');
        for ($i = 0; $i < count($pids); $i++) {
            $cart[$pids[$i]]['quantity'] = $qties[$i];
        }
        $request->session()->put('cart', $cart);    // lưu thay đổi
    }

    public function checkout()
    {
        $user = auth()->user();
        return view('fe.components.cart.checkout', compact('user'));
    }

    public function processCheckout(Request $request)
    {
        // dd($request->all());
        if (session()->has('cart')) {
            $cart = session()->get('cart');
            $order = Order::create([
                'user_id' => $request->user_id,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'payment' => $request->payment == 'cart' ? 1 : 0,
                //'quantity' => $cart['quantity'],
                'total' =>  $request->total,
            ]);

            // lưu xuống orderProduct
            if (!empty($cart)) {
                foreach ($cart as $key => $value) {
                    $order->products()->attach($key, ['quantity' => $value['quantity']]);
                }
            }


            $name = $request->name;
            session()->forget('cart');
            return redirect()->route('home');
        } else {
            return redirect()->route('home');
        }
    }
}
