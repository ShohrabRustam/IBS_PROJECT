<?php

namespace App\Http\Controllers;

use App\Models\policy;
use Illuminate\Http\Request;
use App\Models\UserRegistration;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }


    public function  contact()
    {
        return view('contact');
    }

    public function  health()
    {
        $data = policy::all();
        if (Session::has('user')) {

            return view('InsuranceType.health')->with('data', $data);
        }
        return redirect('/login');
    }

    public function  life()
    {
        $data = policy::all();

        if (Session::has('user')) {
            return view('InsuranceType.life')->with('data', $data);
        }
        return redirect('/login');
    }
    public function  bike()
    {
        $data = policy::all();

        if (Session::has('user')) {
            return view('InsuranceType.bike')->with('data', $data);
        }
        return redirect('login');
    }
    public function  car()
    {
        $data = policy::all();
        if (Session::has('user')) {
            return view('InsuranceType.car')->with('data', $data);
        }
        return redirect('/login');
    }
    public function  signup()
    {
        return view('signup');
    }
    public function  login()
    {
        return view('login');
    }

    //
    public function sigup(Request $request)
    {
        $request->validate([
            "name" => "required|min:3",
            "email" => "required|email|unique:UserRegistration",
            "password" => "required|min:6|max:16",
            "confirm_password" => "required_with:password|same:password|min:6"
        ]);
        $table = new UserRegistration();
        $table->name = $request->name;
        $table->email = $request->email;
        $table->password = $request->password;
        $table->save();
        // return url()->previous()->with('success', 'Thank you for your registration ! Go to login for login.');
        return redirect('/login');
    }

    public function userlogin(Request $request)
    {
        $user = UserRegistration::where(['email' => $request->email])->first();
        $request->validate([
            // "email"=>"required|email|unique:UserRegistration",
            "email" => "required|email",
            "password" => "required|min:6|max:16",
        ]);
        // if(!$user ($user->password!=$request->password)){
        //     return back()->with('error','Email or Password is Incorrect');
        // }
        // $table = new UserRegistration();
        // $table->name=$request->name;
        // $table->email= $request->email;
        // $table->password=$request->password;
        // $table->save();
        // return url()->previous()->with('success', 'Thank you for your registration ! Go to login for login.');
        // else{
        //     return "Login Success";
        // // return redirect('/');
        // }
        if (!$user) {
            return back()->with('email', "The Email is not register");
        } else if ($user->password != $request->password) {
            return back()->with('password', 'Password is incorrect');
        } else {
            $request->session()->put('user', $user);
            return redirect('/');
        }
    }
    public function logout()
    {
        if (Session::has('user') && Session::get('user')['type'] == 'user') {

            Session::forget('user');
            return redirect('login');
        } else if (Session::has('user') && Session::get('user')['type'] == 'admin') {

            Session::forget('user');
            return redirect('adminlogin');
        } else if (Session::has('user') && Session::get('user')['type'] == 'superadmin') {

            Session::forget('user');
            return redirect('/superadminlogin');
        } else {
            return redirect('/');
        }
    }
}
