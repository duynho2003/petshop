<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\CartItem;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
        $max_price = Product::max('normal_price');
        $max_price_range = $max_price + 10000000;
        $min_price = Product::min('normal_price');
        $min_price_range = $min_price - $min_price;
        $categories = Category::where("active", 1)->get();
        $prods = Product::all();
        return view('fe.shop', compact('categories','prods','max_price','min_price','max_price_range','min_price_range'));
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
        // hàm first() được dùng để lấy về record đầu tiến
        $product = Product::where('slug', '=', $slug)->first();
        return view('fe.product_details', compact('product'));
    }

    public function editUser($id)
    {
        // Lấy thông tin người dùng đã đăng nhập
        $loggedInUser = Auth::user();
        
        // Kiểm tra xem ID của người dùng đã đăng nhập có khớp với ID trong route hay không
        if ($loggedInUser->id == $id) {
            // Nếu khớp, thực hiện logic xử lý
            $user = User::find($id);
            return view('fe.editUser', compact('user'));
            // ...
        } 
    }

    public function processEditUser($id, Request $request)
    {
        // Lấy thông tin người dùng đã đăng nhập
        $loggedInUser = Auth::user();
    
        // Kiểm tra xem ID của người dùng đã đăng nhập có khớp với ID trong route hay không
        if ($loggedInUser->id == $id) {
            // Lấy dữ liệu từ request
            $first_name = $request->input('first_name');
            $last_name = $request->input('last_name');
            $phone = $request->input('phone');
            $address = $request->input('address');
            
            // Cập nhật thông tin người dùng trong bảng "users"
            $user = User::find($id);
            $user->first_name = $first_name;
            $user->last_name = $last_name;
            $user->phone = $phone;
            $user->address = $address;
            $user->save();
            // Thông báo màn hình
            session()->flash('success', 'Your information has been updated!');
            return view('fe.editUser', compact('user'));
            
            // Thực hiện các logic khác nếu cần
    
            // Redirect hoặc trả về response thành công
        }
    }


    public function search(Request $request) {
        
        if ($request->has('search')) {
            $products = null;
            switch ($request->type) {
                case 0:
                    $products = Product::search($request->search)->get();
                    break;
                case 1:
                    $products = Product::search($request->search)->where("category_id",1)->get();
                    break;
                case 2:
                    $products = Product::search($request->search)->where("category_id",2)->get();
                    break;
                case 3:
                    $products = Product::search($request->search)->where("category_id",3)->get();
                    break;
                case 4:
                    $products = Product::search($request->search)->where("category_id",4)->get();
                    break;
                case 5:
                    $products = Product::search($request->search)->where("category_id",5)->get();
                    break;
                default: break;
            }
        } elseif ($request->has('max_price') && $request->has('min_price')) {
            $products = Product::whereBetween('promotion_price', [$request->max_price, $request->min_price])->get();
        } else {
            $products = Product::get();
        }
        return view('fe.search', compact('products'));
    }
}