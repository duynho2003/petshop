<?php

namespace App\Http\Controllers\BE;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Trait\UpLoadImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AdminInforController extends Controller
{
    use UpLoadImage;

    


    public function getSetting() {
        return view('be.auth.setting_info');
    }

    public function postSetting(Request $request) {
        // dd($request->all());
        try {
            DB::beginTransaction();
            $admin_id = auth()->guard('admin')->id();
            $dataSettingUpdate = [
                'name' => $request->name,
                'phone' => $request->phone,
            ];

            //  Upload Avatar
            $dataUploadAvatar = $this->TraitUpLoadFile($request, 'avatar', 'images/settingInforLogin');
            if(!empty($dataUploadAvatar)) {
                $dataSettingUpdate['avatar'] = $dataUploadAvatar['image_path'];
            }

            if(!empty($request->current_password)) {
                $dataPassword = Admin::find($admin_id)->password;
    
                if (Hash::check($request->current_password, $dataPassword)) {
                    if(!empty($request->new_password)) {
                        if(!empty($request->confirm_password) && $request->new_password === $request->confirm_password) {
                            $dataSettingUpdate['password'] = Hash::make($request->new_password);
                        } else {
                            return back()->with('errors_confirm_password', 'Mật khẩu xác thực không đúng, vui lòng nhập lại mật khẩu');
                        }
                    } else {
                        return back()->with('errors_new_password', 'Vui lòng nhập mật khẩu mới');
                    }
                } else {
                    return back()->with('errors', 'Mật khẩu không đúng, vui lòng kiểm tra lại');
                }
            }
            // dd($dataSettingUpdate);
            Admin::find($admin_id)->update($dataSettingUpdate);
            DB::commit();
            return redirect()->back()->with('alert','Cập nhật dữ liệu thành công');
        } catch (\Exception $ex) {
            DB::rollBack();
            Log::error("Message: {$ex->getMessage()} --- Line: {$ex->getLine()} --- File: {$ex->getFile()}");
        }

        
        
    }
}
