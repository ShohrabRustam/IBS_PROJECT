<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;

class AdminController extends Controller
{
    public function adminhome()
    {
        if (Session::has('user') &&( Session::get('user')['type']== 'admin' || Session::get('user')['type']== 'superadmin') ){
            return view('Admin.adminHome');
        }
        return redirect('adminlogin');
        // return view('Admin.adminHome');
    }


    public function insurancerequest()
    {
        if (Session::has('user') &&( Session::get('user')['type']== 'admin' || Session::get('user')['type']== 'superadmin') ){
            return view('Admin.insurancerequest');
        }
        return redirect('adminlogin');
    }

    public function claimrequest()
    {
        if (Session::has('user') &&( Session::get('user')['type']== 'admin' || Session::get('user')['type']== 'superadmin') ){
            return view('Admin.claimrequest');
        }
        return redirect('adminlogin');
    }



    public function adminlog(){
        if (Session::has('user') &&( Session::get('user')['type']== 'admin' || Session::get('user')['type']== 'superadmin') ){
            return redirect('/adminhome');
        }
        return view('Admin.adminlogin');
    }

    public function adminlogin(Request $request)
    {

        $admin=Admin::where(['email'=>$request->email])->first();
        $request->validate([
            // "email"=>"required|email|unique:UserRegistration",
            "email"=>"required|email",
            "password" => "required|min:6|max:16",
        ]);

        if(!$admin){
            return back()->with('email',"The Email is not register");
        }
        else if($admin->password !=$request->password){
            return back()->with('password','Password is incorrect');
        }
        else{
            $request->session()->put('user',$admin);
            return redirect('/adminhome' );
        }
    }

    public function adminlogout()
    {

        if (Session::has('user') && Session::get('user')['type']=='superadmin') {

        Session::forget('user');
        return redirect('/superadminlogin');
        }
        else
        {
        Session::forget('user');
        return redirect('/adminlogin');
        }
    }
}
