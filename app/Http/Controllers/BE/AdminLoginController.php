<?php
namespace App\Http\Controllers\BE;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function admins(Request $request) {
        \Sentinel::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return view('be.components.home.home');
    }

    public function login() 
    {
        /*
        // tạo tk test
        $credentials = [
            'email'    => 'admin@gmail.com',
            'password' => '123',
        ];
        
        $user = \Sentinel::register($credentials);
        
        ///////////
        $role = \Sentinel::getRoleRepository()->createModel()->create([
            'name' => 'admin',
            'slug' => 'admin',
        ]);

        $role = \Sentinel::getRoleRepository()->createModel()->create([
            'name' => 'user',
            'slug' => 'user',
        ]);
        

        // gắn role admin to user: admin@gmail.com
        $user = \Sentinel::findById(1);
        
        $role = \Sentinel::findRoleByName('admin');

        $role->users()->attach($user);
        

        // activation user
        $user = \Sentinel::findById(1);
        $activation = \Activation::create($user);
        */

        return view('be.auth.login');
    }

    public function processLogin(Request $request)
    {
        $email = $request->email;
        $pass = $request->password;

        $credentials = [
            'email'    => $email,
            'password' => $pass,
        ];
        
        $user = \Sentinel::authenticate($credentials);

        //dd($user->roles);
        return redirect('/admin');
        // return redirect()->route('home');
    }

    public function logout()
    {
        \Sentinel::logout();
        return redirect('/admin/login');
    }
}