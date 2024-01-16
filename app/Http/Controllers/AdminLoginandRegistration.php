<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminLoginandRegistration extends Controller
{
    public function register(Request $request)
    {
        $password = $request->input('password');
        $makehash = Hash::make($password);
        $request->validate([
            'name'=>'required|string|max:50',
            'email'=>'required|email|max:70',
            'password'=>'required|string|max:8'
        ]);

        if($request->input('password')!==$request->input('confirm-password'))
        {
            return redirect()->back()->with('error','Password dose not match.');
        }
        else{
            Admin::insert([
                'name'=>$request->input('name'),
                'email'=>$request->input('email'),
                'password'=>$makehash
            ]);

            return redirect()->route('admin-login')->with('success','Registration Successful!!');
        }

    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            $user = Auth::guard('admin')->id();
            return redirect()->route('admin.dashboard', ['id' => $user]);
        } else {
            return redirect()->back()->with('error', 'Invalid credentials');
        }

//        $email = 'rubayetislam16@gmail.com';
//        $password = '123456';
//
////        $user = Admin::where('email',$email)->first();
//
//        if ($email && $password)
//        {
//            return redirect()->route('admin.dashboard');
//        }
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        Session::flush();

        return redirect()->route('home');
    }
}
