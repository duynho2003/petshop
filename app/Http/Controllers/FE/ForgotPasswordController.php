<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Support\Facades\Hash;




class ForgotPasswordController extends Controller
{
    public function forgot() {
        return view('fe.auth.forgot');
    }

    public function processForgotPassword(Request $request){
        $message = [
            'email.exists' => 'Email không tồn tại',
        ];

        $request->validate([
            'email'=>'exists:users',
        ], $message);

        $email = $request->email;
        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);

        Mail::send('fe.mailReset', ['token' => $token,'email' => $email], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Email Reset Password Mail');
        });

        return back()->with('success','Chúng tôi đã gửi mã reset mật khẩu, vui lòng kiểm tra email');
    }
    
    public function resetPassword($token, $email) {
        return view('fe.auth.resetPassword', compact('token', 'email'));
    }
    

    public function processResetPassword(Request $request) {
        $checkData = DB::table('password_resets')->where([
            'email' => $request->email,
            'token' => $request->token,
        ])->first();

        if(!$checkData) {
            return back()->with('message','Mã xác thực không tồn tại, vui lòng liên hệ bộ phần CSKH để được hỗ trợ');
        }

            if($request->password == $request->confirm_password) {
                $updatePassword = User::where('email', $request->email)->update(['password' => Hash::make($request->password)]);
            } else {
                return back()->withErrors(['errors' => 'Mật khẩu xác thực không đúng, vui lòng nhập lại mật khẩu']);
            }

        DB::table('password_resets')->where(['email'=> $request->email])->delete();
        
        return redirect()->route('login')->withSuccess('Mật khẩu đã đổi thành công, bạn có thể đăng nhập tài khoản bình thường');
    }

    public function reset(){
        return view('fe.auth.resetPassword');
    }
}
