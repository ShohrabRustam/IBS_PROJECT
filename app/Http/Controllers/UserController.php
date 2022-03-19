<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserRegistration;

class UserController extends Controller
{

    //
    public function sigup(Request $request)
    {
        $request->validate([
            "name" => "required|min:3",
            "email"=>"required|email|unique:UserRegistration",
            "password" => "required|alphaNum|min:6|max:16",
            "confirm_password" => "required_with:password|same:password|min:6"
        ]);
        $table = new UserRegistration();
        $table->name=$request->name;
        $table->email= $request->email;
        $table->password=$request->password;
        $table->save();
        // return url()->previous()->with('success', 'Thank you for your registration ! Go to login for login.');
        return redirect('/login');
    }

    public function userlogin(Request $request)
    {
        $user=UserRegistration::where(['email'=>$request->email])->first();
        $request->validate([
            // "email"=>"required|email|unique:UserRegistration",
            "email"=>"required|email",
            "password" => "required|alphaNum|min:6|max:16",
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
        if(!$user){
            return back()->with('email',"The Email is not register");
        }
        else if($user->password !=$request->password){
            return back()->with('password','Password is incorrect');
        }
        else{
            return redirect('/' );
        }
    }
}
