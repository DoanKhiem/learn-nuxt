<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;

class AuthController extends Controller
{

    public function login(){
        return view('backend.auth.login');
    }

    public function loginPost(Request $request){
//        dd($request->all());
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
//        dd(Auth);
//        dd($credentials);

//        dd(Auth::attempt($request->only('email','password')));
        if (Auth::attempt($request->only('email','password'))){
            return redirect()->route('dashboard')->with('success','Đăng nhập thành công');
        }
        else{
            return redirect()->back()->with('error','Đăng nhập không thành công');
        }
    }

    public function logout(){
//        dd('abc');
        Auth::logout();
        return redirect()->route('login');
    }
    public function register(){
        return view('backend.auth.register');
    }

    public function registerPost(Request $request){
//        dd($request->all());
        $request->merge(['password'=>Hash::make($request->password)]);
//        dd($request->all());
        User::create($request->all());
        return redirect()->route('login')->with('success','Đăng ký thành công');

    }
}
