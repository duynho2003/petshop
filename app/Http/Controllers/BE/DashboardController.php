<?php

namespace App\Http\Controllers\BE;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DashboardController extends Controller
{
    public function dashboard()
    {
        // $products = Product::count();
        // $users = User::count();
        $totalPrice = DB::table('orders')->sum('total');
        $totalOrder = DB::table('orders')->count();
        $totalUser = DB::table('users')->count();
        $totalTask = DB::table('orders')->whereIn('status', ['process', 'shipping'])->count();
        return view('be.components.home.home', compact('totalPrice','totalOrder','totalUser', 'totalTask'));
    }
}
