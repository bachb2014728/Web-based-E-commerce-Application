<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateInfoRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function edit(Request $request): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.profiles.index', ['user' => $request->user(),]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInfoRequest $request): \Illuminate\Http\RedirectResponse
    {
        $user = User::findOrFail($request->id);
        $user->name = $request->name;


        $name = substr($request->email,strpos($request->email,'@')+1);
        if($name == 'gmail.com' || $name == 'example.com'){
            $user->email = $request->email;
        }else{
            return redirect()->route('profile.edit')->with('fail','Cập nhật email không thành công');
        }
        if($request->phone[0] == 0 && preg_match('/^\d+$/', $request->phone )){
            $user->phone = $request->phone;
        }else{
            return redirect()->route('profile.index')->with('fail','Cập nhật số điện thoại không thành công');
        }
        $user->address = $request->address;
        $user->save();
        return redirect()->route('profile.index')->with('edit','Cập nhật tài khoản thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request): \Illuminate\Http\RedirectResponse
    {
        $user = Auth::user();
        if (Hash::check($request->password, Auth::user()->password)) {
            Auth::logout();
            $user->deleteT();
            return redirect()->route('auth.login')->with('success','Xóa thành công');
        }
        return redirect()->back()->with('fail','Xóa tài khoản thất bại');
    }
    public function updatePassword(Request $request): \Illuminate\Http\RedirectResponse
    {
        $pass = Auth::user();
        if(Hash::check($request->password, $pass->password)){
            if($request->password_new === $request->password_confirm){
                $pass->password = $request->password_new;
                $pass->save();
                return redirect()->route('profile.index')->with('success','Cập nhật mật khẩu thành công');
            }else{
                return redirect()->back()->with('fail','Nhập lại mật khẩu mới không đúng');
            }

        }
        return redirect()->back()->with('fail','Nhập mật khẩu bị sai');
    }
}
