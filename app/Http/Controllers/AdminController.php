<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View as ViewContract;
use Illuminate\Contracts\Foundation\Application as AppContract;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse as Response;

class AdminController extends Controller
{
    public function loginAdmin(): ViewContract|AppContract
    {
        return view('admin.login');
    }
    public function postLoginAdmin(Request $request): Response
    {
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password,'role' => 1])){
            return redirect()->route('category.index');
        }
        return redirect()->back();
    }
    public function logoutAdmin(): ViewContract|AppContract{
        Auth::logout();
        return view('admin.login');
    }
}
