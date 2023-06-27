<?php

namespace App\Http\Controllers\BE;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Trait\DeleteModel;
use App\Trait\UpLoadImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AdminUserController extends Controller
{
    use DeleteModel, UpLoadImage;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('active', 1)->paginate(5);
        return view('be.components.user.index', compact('users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('be.components.user.detail', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('be.components.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        try {
            DB::beginTransaction();
            $dataUserEdit = [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'gender' => $request->gender,
                'address' => $request->address,
                'birthday' => $request->birthday,
            ];

            // $dataUpLoadAvatar = $this->TraitUpLoadFile($request, 'avatar', 'images/users');
            // if(!empty($dataUpLoadAvatar)) {
            //     $dataUserEdit['image_name'] = $dataUpLoadAvatar['image_name'];
            //     $dataUserEdit['avatar'] = $dataUpLoadAvatar['image_path'];
            // }

            $user->update($dataUserEdit);

            DB::commit();
            return redirect()->route('user.show', $user->id);
        } catch (\Exception $ex) {
            DB::rollBack();
            Log::error("Message: {$ex->getMessage()} --- Line: {$ex->getLine()} --- File: {$ex->getFile()}");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $this->TraitHideRecord($user);
    }

    // public function status(User $user)
    // {
    //     $status ='';
    //     if ($user->active == 0) {
    //         $status = $user->update([
    //             'active' => 1,
    //         ]);
    //     } else {
    //         $status = $user->update([
    //             'active' => 0,
    //         ]);
    //     }
    //     if(!empty($status)) {
    //         return redirect()->route('user.index')->withSuccess('Cập nhật trạng thái thành công');
    //     }
    //     return redirect()->route('user.index')->withErrors('Cập nhật trạng thái thất bại');
    // }

    public function status(User $user)
    {
        $active = $user->active == 0 ? 1 : 0;
        $user->update(['active' => $active]);

        return redirect()->route('user.index')->withSuccess('Cập nhật trạng thái thành công');
    }

    public function search(Request $request)
    {
        // dd($request->search);
        if ($request->has('search')) {
            $users = User::search($request->search)->get();
        } else {
            $users = User::get();
        }
        return view('be.components.user.search', compact('users'));
    }
}
