<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\Type;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

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

    public function shop(Request $request)
    {
        if (isset($request->t)) {
            $prods = Product::where('category_id', 1)
                ->where('type_id', $request->t)
                ->where('active', 1)
                ->get();
        } else {
            $prods = Product::where('category_id', 1)
                ->where('active', 1)
                ->get();
        }

        $types = Type::all();

        return view('fe.shop', compact('prods', 'types'));
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

    public function changePass($id, Request $request)
    {
        // Lấy thông tin người dùng dựa trên $id
        $user = User::find($id);

        // Kiểm tra xác thực người dùng
        if (!auth()->check() || $user->id !== auth()->user()->id) {
            return redirect()->back()->with('error', 'Unauthorized access');
        }

        // Lấy các trường dữ liệu từ request
        $currentPassword = $request->input('current_pass');
        $newPassword = $request->input('new_pass');
        $confirmPassword = $request->input('confirm_pass');

        // Kiểm tra tính hợp lệ của mật khẩu hiện tại
        if (!Hash::check($currentPassword, $user->password)) {
            return redirect()->back()->with('error', 'Current password is incorrect');
        }

        // Kiểm tra mật khẩu mới và mật khẩu xác nhận
        if ($newPassword !== $confirmPassword) {
            return redirect()->back()->with('error', 'New password and confirm password do not match');
        }

        // Cập nhật mật khẩu mới cho người dùng
        $user->password = Hash::make($newPassword);
        $user->save();

        return redirect()->back()->with('success', 'Password has been changed successfully');
    }



    public function search(Request $request)
    {

        if ($request->has('search')) {
            $products = null;
            switch ($request->type) {
                case 0:
                    $products = Product::search($request->search)->get();
                    break;
                case 1:
                    $products = Product::search($request->search)->where("category_id", 1)->get();
                    break;
                case 2:
                    $products = Product::search($request->search)->where("category_id", 2)->get();
                    break;
                case 3:
                    $products = Product::search($request->search)->where("category_id", 3)->get();
                    break;
                case 4:
                    $products = Product::search($request->search)->where("category_id", 4)->get();
                    break;
                case 5:
                    $products = Product::search($request->search)->where("category_id", 5)->get();
                    break;
                default:
                    break;
            }
        } elseif ($request->has('max_price') && $request->has('min_price')) {
            $products = Product::whereBetween('promotion_price', [$request->max_price, $request->min_price])->get();
        } else {
            $products = Product::get();
        }
        return view('fe.search', compact('products'));
    }

    public function adoption()
    {
        $prods = Product::where('category_id', 2)->where('active', 1)
            ->get();
        return view('fe.adoption', compact('prods'));
    }

    public function out_adoption($email)
    {
        // Validate the email address
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Invalid email address format
            return redirect()->back()->with('error', 'Invalid email address');
        }

        // Send email to the user
        Mail::send('fe.mail-adoption', [], function ($message) use ($email) {
            $message->to($email);
            $message->subject('Email Verification Mail');
        });

        return view('fe.out-adoption');
    }

    public function myOrders($id)
    {
        $orders = Order::where('user_id', $id)
                        ->orderBy('created_at', 'desc')
                        ->get();
        return view('fe.order.orders', compact('orders'));
    }
    
    public function showOrder($id)
    {
        $order = Order::find($id);
        if (!$order) {
            // Xử lý khi không tìm thấy đơn hàng
        }
        // Lấy thông tin sản phẩm đã mua trong đơn hàng
        $orderItems = DB::table('order_products')
            ->join('products', 'order_products.product_id', '=', 'products.id')
            ->select('order_products.quantity', 'order_products.order_id', 'products.name', 'products.promotion_price')
            ->where('order_id', $id)
            ->get();
        return view('fe.order.order_detail', compact('order', 'orderItems'));
    }
}
