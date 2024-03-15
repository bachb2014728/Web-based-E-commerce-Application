<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
class UserController extends Controller
{
    public function login(): View|Application|Factory
    {
        return view('user.login');
    }
    public function register(): View|Application|Factory
    {
        return view('user.register');
    }
    public function postRegister(Request $request): RedirectResponse
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $request->merge(['password'=> Hash::make($request->password)]);
        User::create($request->all());

        return redirect()->route('login');
    }
    public function postLogin(Request $request): RedirectResponse
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $is = User::where('email', $request->email)->where('deleted',true)->first();
        if($is){
            return redirect()->back()->with('fail','Tài khoản đã bị xóa');
        }else{
            if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
                $user = Auth::user();
                $user->updated_at = date('Y-m-d H:i:s');
                $user->save();
                $acc_user = Activity::where('user_id',$user->id)->orderBy('created_at', 'DESC')->first();
                if ($acc_user == null) {
                    Activity::create([
                        'user_id'=> $user->id,
                        'key_active'=>0,
                        'value_active'=>'log_in',
                        'name_active'=> 'Đăng nhập',
                    ]);
                    return redirect()->route('index')->with('success','Đăng nhập thành công');
                }
                if($acc_user->value_active !== 'log_in'){
                    Activity::create([
                        'user_id'=> $user->id,
                        'key_active'=>0,
                        'value_active'=>'log_in',
                        'name_active'=> 'Đăng nhập',
                    ]);
                }else{
                    $acc_user->updated_at = now();
                    $acc_user->save();
                }
                return redirect()->route('index')->with('success','Đăng nhập thành công');
            }
            return redirect()->back()->with('fail','Đăng nhập thất bại');
        }
    }
    public function logout(): RedirectResponse
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $user = Auth::user();
        $acc_user = Activity::where('user_id',$user->id)->orderBy('created_at', 'DESC')->first();
        if ($acc_user == null) {
            Activity::create([
                'user_id'=> $user->id,
                'key_active'=>0,
                'value_active'=>'log_in',
                'name_active'=> 'Đăng nhập',
            ]);
            return redirect()->route('index')->with('success','Đăng xuất thành công');
        }
        if($acc_user->value_active !== 'log_out'){
            Activity::create([
                'user_id'=> $user->id,
                'key_active'=>0,
                'value_active'=>'log_out',
                'name_active'=> 'Đăng xuất',
            ]);
        }else{
            $acc_user->updated_at = now();
            $acc_user->save();
        }
        Auth::logout();
        return redirect()->back()->with('success','Đăng xuất thành công');
    }
}
