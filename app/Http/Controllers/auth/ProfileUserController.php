<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\ListAddressUser;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view('user.profiles.index');
    }
    public function update(Request $request){
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $user = Auth::user();
        $user->name = $request->name;
        if($request->birthday == ''){
            $user->birthday = Auth::user()->birthday;
        }else{
            $user->birthday = $request->birthday;
        }
        $user->gender = $request->gender;
        $user->facebook = $request->facebook;
        $user->instagram = $request->instagram;
        $user->twitter = $request->twitter;
        $user->job = $request->job;
        $user->address = $request->address;
        $name = substr($request->email,strpos($request->email,'@')+1);
        if($name == 'gmail.com' || $name == 'example.com'){
            $user->email = $request->email;
        }else{
            return redirect()->back()->with('fail','Cập nhật email không thành công');
        }
        if($request->phone[0] == 0 && preg_match('/^\d+$/', $request->phone )){
            $user->phone = $request->phone;
        }else{
            return redirect()->back()->with('fail','Cập nhật số điện thoại không thành công');
        }
        Activity::create([
            'user_id'=> $user->id,
            'key_active'=>1,
            'value_active'=>'update_profile',
            'name_active'=> 'Cập nhật thông tin cá nhân',
        ]);
        $user->save();
        return redirect()->back()->with('success','Cập nhật thông tin thành công');
    }

    public function change_password(Request $request): \Illuminate\Http\RedirectResponse
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        try {
            $user = Auth::user();
            if (!Hash::check($request->password, $user->password)) {
                return redirect()->back()->with(['fail' => 'Mật khẩu hiện tại không chính xác']);
            }
            if($request->newpassword == $request->renewpassword){
                $user->password = Hash::make($request->newpassword);
                Activity::create([
                    'user_id'=> $user->id,
                    'key_active'=>1,
                    'value_active'=>'change_pass',
                    'name_active'=> 'Thay đổi mật khẩu',
                ]);
                $user->save();
            }else{
                return redirect()->back()->with('fail','Mật khẩu nhập lại bị sai');
            }

        } catch (\Throwable $th) {
            return redirect()->back()->with(['fail' => 'Có lỗi xảy ra khi thay đổi mật khẩu']);
        }

        return redirect()->back()->with('success','Thay đổi mật khẩu thành công');
    }

    public function add_address(Request $request): \Illuminate\Http\RedirectResponse
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        try {
            if($request->phone[0] == 0 && preg_match('/^\d+$/', $request->phone )){
                ListAddressUser::create($request->all());
                Activity::create([
                    'user_id'=> Auth::user()->id,
                    'key_active'=>1,
                    'value_active'=>'add_addr',
                    'name_active'=> 'Thêm địa chỉ người nhận',
                ]);
            }else{
                return redirect()->back()->with('fail','Cập nhật số điện thoại không thành công');
            }

        } catch (\Throwable $th) {
            return redirect()->back()->with(['fail' => 'Có lỗi xảy ra khi thêm địa chỉ nhận']);
        }
        return redirect()->back()->with('success','Thêm địa chỉ thành công');
    }
    public function delete_address(Request $request): \Illuminate\Http\RedirectResponse
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        try {
            $addr = ListAddressUser::find($request->id);
            Activity::create([
                'user_id'=> Auth::user()->id,
                'key_active'=> 1,
                'value_active'=>'delete_addr',
                'name_active'=> 'Xóa địa chỉ người nhận',
            ]);
            $addr->delete();
        } catch (\Throwable $th) {
            return redirect()->back()->with('fail','Có lỗi khi xóa địa chỉ');
        }
        return redirect()->back()->with('success','Xóa địa chỉ người nhận thành công');
    }

    public function update_address(Request $request,string $id): \Illuminate\Http\RedirectResponse
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        try {
            $addr = ListAddressUser::find($id);
            if($request->phone[0] == 0 && preg_match('/^\d+$/', $request->phone )){
                Activity::create([
                    'user_id'=> Auth::user()->id,
                    'key_active'=> 1,
                    'value_active'=>'update_addr',
                    'name_active'=> 'Cập nhật địa chỉ người nhận',
                ]);
                $addr->update($request->all());
            }else{
                return redirect()->back()->with('fail','Cập nhật số điện thoại không thành công');
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('fail','Có lỗi khi chỉnh sửa địa chỉ');
        }
        return redirect()->back()->with('success','Cập nhật địa chỉ người nhận thành công');
    }

    public function remove_order(Request $request,string $id): \Illuminate\Http\RedirectResponse
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        try {
            $bils = Order::find($id);
            Activity::create([
                'user_id'=> Auth::user()->id,
                'key_active'=>2,
                'value_active'=>'remove_order',
                'name_active'=> 'Xóa đơn hàng đã đặt',
            ]);
            $bils->status = -1;
            $bils->save();
            return redirect()->back()->with('success','Hủy đơn hàng thành công');
        } catch (\Throwable $th) {
            return redirect()->back()->with('fail','Có lỗi khi hủy đơn hàng');
        }
    }
    public function delete_user(Request $request): \Illuminate\Http\RedirectResponse
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        try {
            $user = Auth::user();
            if (!Hash::check($request->password, $user->password)) {
                return redirect()->back()->with(['fail' => 'Mật khẩu hiện tại không chính xác']);
            }
            Activity::create([
                'user_id'=> Auth::user()->id,
                'key_active'=>0,
                'value_active'=>'remove_acc',
                'name_active'=> 'Xóa tài khoản',
            ]);
            Auth::logout();
            $user->deleteT();
            return redirect()->route('index')->with('success','Xóa thành công');
        } catch (\Throwable $th) {
            return redirect()->back()->with('fail','Có lỗi khi xóa tài khoản');
        }
    }
}
