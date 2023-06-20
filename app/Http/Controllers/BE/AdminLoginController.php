<?php
namespace App\Http\Controllers\BE;
use App\Http\Controllers\Controller;
class AdminLoginController extends Controller
{
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

        return view('be.components.home.home');
    }
}