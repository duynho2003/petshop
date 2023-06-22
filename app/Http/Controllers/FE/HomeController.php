<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
// use App\Models\CartItem;

class HomeController extends Controller
{
    // suong 2
    public function index()
    {
        return view('fe.index');
    }
    
    public function doglist() 
    {
        return view("fe.dog");
    }

    public function shop() 
    {
        $prods = Product::all();
        return view('fe.shop', compact('prods'));
    }

    public function adoption() 
    {
        return view("fe.adoption");
    }

    public function contact() 
    {
        return view("fe.contact");
    }

    public function blogdetails1() 
    {
        return view("fe.blogdetails1");
    }

    public function blogdetails2() 
    {
        return view("fe.blogdetails2");
    }

    public function blogdetails3() 
    {
        return view("fe.blogdetails3");
    }

    public function productDetails($slug) 
    {
        $prods = Product::all();
        // hàm first() được dùng để lấy về record đầu tiến
        $prod = Product::where('slug', '=', $slug)->first();
        return view('fe.product_details', compact('prod','prods'));
    }

    // public function addCart(Request $request)
    // {
    //     try {
    //     $pid = $request->pid;
    //     $quantity = $request->quantity; 
        
    //     $cart = []; 
    //     if ($request->session()->has('cart')) {
    //         $cart = $request->session()->get('cart');    
    //     }

    //     // tìm product theo id
    //     $prod = Product::find($pid);
    //     // tạo đối tượng CartItem
    //     $cartItem = new CartItem($prod, $quantity);
    //     $cart[] = $cartItem; // add to array
    //     $request->session()->put('cart', $cart);
    //     return 1;
    // } catch (\Exception $e) {
    //     return 0;
    //     } 
    // }

    public function clearCart(Request $request)
    {
        if($request->session()->has('cart')) {
            $request->session()->forget('cart');
        }
    }

    public function viewCart(Request $request)
    {
        return view('fe.view_cart');
        // if ($request->session()->has('cart')) {
        //     return $request->session()->get('cart');
        // }
    }
}