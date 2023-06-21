<?php

use App\Models\Admin;
use App\Models\User;
use Carbon\Carbon;

if (!function_exists('getAvatarHeaderFromAdminTable')) {
    function getValueHeaderFromAdminTable($admin_id)
    {
        $admin = Admin::where('id', $admin_id)->first();
        if(!empty($admin->avatar)) {
            return $admin->avatar;
        } else {
            return "images/settingInforLogin/basic-avatar.jpg";
        }
    }
}

if (!function_exists('getAvatarCustomerFromUserTable')) {
    function getAvatarCustomerFromUserTable($user_id)
    {
        $user = User::where('id', $user_id)->first();
        if(!empty($user->avatar)) {
            return $user->avatar;
        } else {
            return "images/settingInforLogin/basic-avatar.jpg";
        }
    }
}

if (!function_exists('formatDateFromUserTable')) {
    function formatDateFromUserTable($date)
    {
        $data = Carbon::parse($date)->format('d-m-Y');
        return $data;
    }

}