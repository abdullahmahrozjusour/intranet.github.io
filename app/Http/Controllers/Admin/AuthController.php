<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }

    public function store(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        $credentials = [
            'email'=>$request->email,
            'password'=>$request->password
        ];

        if(Auth::attempt($credentials)){
            return redirect()->route('admin.dashboard')->with('success','Login successfully');
        }else{
            return back()->with('error','Email or password in incorrect');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('admin.login')->with('success','Logout successfully');
    }
}
