<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;

class AdminController extends Controller
{
    public function adminhome()
    {
        if (Session::has('user') && strpos(Session::get('user')['email'], '@ibs.com') !== false && strpos(Session::get('user')['password'], 'admin') !== false) {
            return view('Admin.adminHome');
        }
        return redirect('adminlogin');
        // return view('Admin.adminHome');
    }


    public function insurancerequest()
    {
        if (Session::has('user') && strpos(Session::get('user')['email'], '@ibs.com') !== false && strpos(Session::get('user')['password'], 'admin') !== false) {
                return view('Admin.insurancerequest');
        }
        return redirect('adminlogin');
    }

    public function claimrequest()
    {
        if (Session::has('user') && strpos(Session::get('user')['email'], '@ibs.com') !== false && strpos(Session::get('user')['password'], 'admin') !== false) {
            return view('Admin.claimrequest');
        }
        return redirect('adminlogin');
    }

    public function company()
    {
        // $users = DB::table('registerationcompany')->get();
        // $data = registrationcompany::all();
        // echo "<pre>";
        // var_dump($data);


        // if (Session::has('user') && strpos(Session::get('user')['name'], 'admin')!==false )
        // {
        //     return view('company.company')->with('data',$data);
        // }
        // return redirect('adminlogin');
    }

    public function companyregistration(Request $request)
    {
        // $com = new registrationcompany();
        // $com->register_number=$request->register_number;
        // $com->name=$request->name;
        // $com->logo=$request->logo;
        // $com->about=$request->about;
        // $com->save();
        // return redirect('company');

    }

    public function policyregistration(Request $request)
    {
        //     $policy = new policyregistration();

        //     $policy->companyid=$request->companyid;
        //     $policy->policyname=$request->policyname;
        //     $policy->policytype=$request->policytype;
        //     $policy->policydesc=$request->policydesc;
        //     $policy->policyprice=$request->policyprice;
        //     $policy->claimprice=$request->claimprice;
        //     $policy->timeperiod=$request->timeperiod;
        //     $policy->save();
        //     return redirect('company');
        //     return $request;


        //   return view('Admin.policyregistration');

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
        Session::forget('user');
        return redirect('adminhome');
    }
}