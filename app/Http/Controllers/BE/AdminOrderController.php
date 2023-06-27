<?php

namespace App\Http\Controllers\BE;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class AdminOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::where("active", 1)->paginate(5);
        return view("be.components.order.index", compact('orders'));
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $listProduct = DB::table('order_products')
                                    ->join('products', 'order_products.product_id', '=', 'products.id')
                                    ->select('order_products.quantity','order_products.order_id', 'products.name', 'products.promotion_price')
                                    ->get();
        $productItem = $listProduct->where('order_id', $order->id);
        return view("be.components.order.detail", compact('order','productItem'));
        
    }

    public function search(Request $request) {
        // dd($date);
        if ($request->has('search')) {
            $orders = Order::search($request->search)->get();
        } elseif ($request->has('create_date')) {
            $date = Carbon::parse($request->create_date)->format("Y-m-d");
            $orders = DB::table('orders')->whereDate('created_at', $date)->get();
        } else {
            $orders = Order::get();
        }
        return view('be.components.order.search', compact('orders'));
    }

    public function status(Order $order) {
        if ($order->status === "process") {
            $status = $order->update([
                'status' => "shipping",
            ]);
        }
        return redirect()->back();
    }

    // public function checkStatusMail($order_id) {
    //     $order = Order::find($order_id);
    //     $order->update([
    //         'status' => "success",
    //     ]);
    //     return view("frontend.components.status.statusSuccess");
    // }

    public function statusAll() {
        $orders = Order::where("status","shipping")->get();
        foreach ($orders as $order) {
            $order->update([
                'status' => "success",
            ]);    
        }
        return redirect()->route('order.index');
    }

    public function statusShipping() {
        $orders = Order::where("status","process")->get();
        foreach ($orders as $order) {
            $order->update([
                'status' => "shipping",
            ]);     
        }
        return redirect()->route('order.index');
    }

    public function statusProcess() {
        $orders = Order::where("status")->get();
        foreach ($orders as $order) {
            $order->update([
                'status' => "process",
            ]);     
        }
        return redirect()->route('order.index');
    }
}1
