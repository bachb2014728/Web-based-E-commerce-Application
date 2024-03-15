<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function getListMember(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $users = User::all();
        $new_users = User::orderBy('created_at', 'desc')->take(5)->get();
        $new_actions = Activity::orderBy('created_at','desc')->take(5)->get();
        return view('admin.members.index', compact('users','new_users','new_actions'));
    }

    public function getOneMember(string $id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $users = User::find($id);


        $prices = Order::where('user_id', $id)->where('status','=',1)->sum('totalPrice');

        return view('admin.members.show', compact('users','prices'));
    }
    public function deleteOneMember(string $id): \Illuminate\Http\RedirectResponse
    {
        try {
            $user = User::where('id',$id)->first();
            $user->delete();
            return back()->with('success','Xóa tài khoản người dùng thành công');

        } catch (\Throwable $th) {
            return back()->with('fail','Xóa tài khoản người dùng thất bại');
        }
    }
    public function blockOneMember($id){
        try {
            $deleted = User::where('id',$id)->get('deleted')->first();
            $user = User::where('id',$id)->first();
            $user->deleted = !($deleted->deleted);
            $user->save();
            $a = 'khóa';
            if ($user->deleted == false) {
                $a = 'mở';
            }
            return redirect()->back()->with('success','Đã '.$a.' thành công');
        } catch (\Throwable $th) {
            return back()->with('fail','Truy cập thất bại');
        }
    }

}
