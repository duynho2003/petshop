<?php

namespace App\Http\Controllers\FE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Cartalyst\Sentinel\Sentinel;
use Illuminate\Support\Str;
use App\Models\UserVerify;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;



class AuthenticateController extends Controller
{

    public function register()
    {




        return view('fe.auth.register');
    }

    // public function processRegister(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'unique:users,email',
    //     ]);
    //     if (User::where('email', $request->email)->exists()) {
    //         return redirect()->route('register')->withErrors(['email' => 'Email đã tồn tại']);
    //     }

    //     if (($request->password == $request->confirm_password)) {
    //         $dataRegister['password'] = Hash::make($request->password);
    //     } else {
    //         return redirect()->back()->withErrors(['errors_confirm_password' => 'Mật khẩu xác thực không đúng, vui lòng nhập lại mật khẩu']);
    //     }

    //     $credentials = [
    //         'first_name' => $request->first_name,
    //         'last_name' => $request->last_name,
    //         'email' => $request->email,
    //         'phone' => $request->phone,
    //         'gender' => $request->gender,
    //         'address' => $request->address,
    //         'password' => $request->password,
    //         'birthday' => $request->birthday,
    //     ];

    //     // $user = \Sentinel::register($credentials);

    //     $user = User::create($credentials);

    //     // Use the $user_id as needed
    //     $role = \Sentinel::findRoleByName('user');
    //     $role->users()->attach($user);

    //     $token = Str::random(64);
    //     UserVerify::create([
    //         'user_id' => $user->id,
    //         'token' => $token,
    //     ]);

    //     Mail::send('fe.verify', ['token' => $token], function ($message) use ($request) {
    //         $message->to($request->email);
    //         $message->subject('Email Verification Mail');
    //     });

    //     return redirect()->route('register')->with('success', 'Chúc mừng bạn đăng ký, vui lòng xác minh email để đăng nhập ứng dụng');
    // }

    // public function verifyAccount($token)
    // {
    //     $userVerify = UserVerify::where('token', $token)->first();
    //     // $message = "Email này chưa được xác thực, vui lòng đăng kí 1 tài khoản với email khác hoặc liên hệ bộ phận cskh để được hỗ trợ";
    //     if (!is_null($userVerify)) {
    //         $user = $userVerify->user;
    //         if (!$user->is_email_verified) {
    //             $userVerify->user->is_email_verified = 1;
    //             $userVerify->user->save();
    //             $message = "Xác thực email thành công, bạn có thể bắt đầu đăng nhập";
    //         } else {
    //             $message = "Email này đã được xác thực, mời bạn đăng nhập ứng dụng";
    //         }
    //     }
    //     return redirect()->route('login')->with('message', $message);
    // }

    public function processRegister(Request $request)
{
    $request->validate([
        'email' => 'unique:users,email',
    ]);

    if (User::where('email', $request->email)->exists()) {
        return redirect()->route('register')->withErrors(['email' => 'Email đã tồn tại']);
    }

    if (($request->password == $request->confirm_password)) {
        $dataRegister['password'] = Hash::make($request->password);
    } else {
        return redirect()->back()->withErrors(['errors_confirm_password' => 'Mật khẩu xác thực không đúng, vui lòng nhập lại mật khẩu']);
    }

    $credentials = [
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'email' => $request->email,
        'phone' => $request->phone,
        'gender' => $request->gender,
        'address' => $request->address,
        'password' => $request->password,
        'birthday' => $request->birthday,
    ];

    $user = User::create($credentials);

    $role = \Sentinel::findRoleByName('user');
    $role->users()->attach($user);

    $token = Str::random(64);
    $userVerify = UserVerify::create([
        'user_id' => $user->id,
        'token' => $token,
    ]);

    Mail::send('fe.verify', ['token' => $token], function ($message) use ($request) {
        $message->to($request->email);
        $message->subject('Email Verification Mail');
    });

    return redirect()->route('register')->with('success', 'Chúc mừng bạn đăng ký, vui lòng xác minh email để đăng nhập ứng dụng');
}

// public function verifyAccount($token)
// {
//     $userVerify = UserVerify::where('token', $token)->first();

//     if (!is_null($userVerify)) {
//         $user = $userVerify->user;
//         if (!$user->is_email_verified) {
//             $timeElapsed = $userVerify->created_at->diffInMinutes(now());

//             if ($timeElapsed <= 1) {
//                 $user->is_email_verified = 1;
//                 $user->save();
//                 $message = "Xác thực email thành công, bạn có thể bắt đầu đăng nhập";
//             } else {
//                 // Xóa thông tin đăng ký và user_verifies nếu quá thời gian
//                 $userVerify->delete();
//                 $user->delete();

//                 $message = "Thời gian xác thực email đã hết hạn. Vui lòng đăng ký lại.";
//             }
//         } else {
//             $message = "Email này đã được xác thực, mời bạn đăng nhập ứng dụng";
//         }
//     } else {
//         $message = "Mã xác thực không hợp lệ";
//     }

//     return redirect()->route('login')->with('message', $message);
// }

public function verifyAccount($token)
{
    $userVerify = UserVerify::where('token', $token)->first();

    if (!is_null($userVerify)) {
        $user = $userVerify->user;
        if (!$user->is_email_verified) {
            $timeElapsed = $userVerify->created_at->diffInMinutes(now());

            if ($timeElapsed <= 1) {
                $user->is_email_verified = 1;
                $user->save();
                $message = "Xác thực email thành công, bạn có thể bắt đầu đăng nhập";
            } else {
                // Xóa thông tin đăng ký và user_verifies nếu quá thời gian
                UserVerify::whereHas('user', function ($query) use ($user) {
                    $query->where('id', $user->id);
                })->delete();

                $user->delete();

                $message = "Thời gian xác thực email đã hết hạn. Vui lòng đăng ký lại.";
            }
        } else {
            $message = "Email này đã được xác thực, mời bạn đăng nhập ứng dụng";
        }
    } else {
        $message = "Mã xác thực không hợp lệ";
    }

    return redirect()->route('login')->with('message', $message);
}


    // protected function sendEmailVerificationNotification($user, $verificationUrl)
    // {
    //     Mail::send('fe.verify', ['user' => $user, 'verificationUrl' => $verificationUrl], function ($message) use ($user) {
    //         $message->to($user->email)->subject('Xác thực đăng ký');
    //     });
    // }

    //     public function verifyAccount($token)
    // {
    //     $userVerify = UserVerify::where('token', $token)
    //         ->where('expire_at', '>=', now()) // Check if the verification token is valid
    //         ->first();

    //     if (!is_null($userVerify)) {
    //         $user = $userVerify->user;
    //         if (!$user->is_email_verified) {
    //             $user->is_email_verified = 1;
    //             $user->save();
    //             $message = "Xác thực email thành công, bạn có thể bắt đầu đăng nhập";
    //         } else {
    //             $message = "Email này đã được xác thực, mời bạn đăng nhập ứng dụng";
    //         }
    //     } else {
    //         $message = "Mã xác thực không hợp lệ hoặc đã hết hạn";
    //     }

    //     return redirect()->route('login')->with('message', $message);
    // }



    // protected function verificationUrl($user)
    // {
    //     return URL::temporarySignedRoute(
    //         'verification.verify',
    //         now()->addMinutes(60),
    //         ['id' => $user->id, 'hash' => sha1($user->email)]
    //     );
    // }

    public function login()
    {
        return view('fe.auth.login');
    }

    public function processLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $remember = $request->remember_me;
        $credentials = $request->only('email', 'password');

        $user = User::where('email', $credentials['email'])->first();

        if ($user && $user->is_email_verified) {
            if (Auth::attempt($credentials, $remember)) {
                return redirect()->route('home');
            } else {
                return redirect()->back()->withErrors(['errors' => 'Email hoặc mật khẩu không đúng']);
            }
        } else {
            return redirect()->back()->withErrors(['errors' => 'Email chưa được xác thực']);
        }
    }




    public function forgot()
    {
        return view("fe.auth.forgot");
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/login');
    }
}
