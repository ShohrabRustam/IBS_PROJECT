<?php

namespace App\Http\Controllers;

use App\Models\UserRegistration;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\SuperAdmin;
use Illuminate\Support\Facades\Session;


class SuperAdminController extends Controller
{

    //
    public function superadminhome()
    {
        if (Session::has('user') && Session::get('user')['type'] == 'superadmin') {
            return view('SuperAdmin.home');
        }
        return redirect('superadminlogin');
    }

    public function userlist()
    {
        $users = UserRegistration::all();
        if (Session::has('user') && Session::get('user')['gmail'] == 'superadmin@ibs.com') {
            return view('SuperAdmin.userlist')->with('users', $users);
        } else {
            return redirect('superadminlogin');
        }
    }

    public function adminlist()
    {
        $admins = Admin::all();
        if (Session::has('user') && Session::get('user')['type'] == 'superadmin') {

            return view('SuperAdmin.adminlist')->with('admins', $admins);
        } else {
            return redirect('superadminlogin');
        }
    }
    public function superadminlogin(Request $req)
    {
        $req->validate([
            'gmail' => 'required|email',
            'password' => 'required|min:4|max:16'
        ]);
        // return $req;
        $user = SuperAdmin::where(['gmail' => $req->gmail])->first();
        if (!$user || ($req->password != $user->password)) {
            // return 'hello';
            return back()->with("fail", "Email or Password is not Match");
        } else {
            $req->session()->put('user', $user);
            return redirect('superadminhome');
        }
    }


    public function adminregistration()
    {
        if (Session::has('user') && Session::get('user')['type'] == 'superadmin') {
            return  view('SuperAdmin.adminregistration');
        }
        return redirect('superadminlogin');
    }

    public function adminregistrations(Request $req)
    {

        $req->validate([
            "name" => "required|min:3",
            "email" => "required|email|unique:admin",
            "password" => "required|min:4|max:16",
            "mobile" =>  "required",
            "confirm_password" => "required_with:password|same:password|min:6"
        ]);
        if (Session::has('user') && Session::get('user')['type'] == 'superadmin') {
            $adm = new Admin();
            $adm->name = $req->name;
            $adm->email = $req->email;
            $adm->mobile = $req->mobile;
            $adm->password = $req->password;
            $adm->save();
            return redirect('adminlogin');
        } else {
            return redirect('superadminlogin');
        }
    }

    public function superadminlogout()
    {

        Session::forget('user');
        return redirect('superadminlogin');
    }
}
