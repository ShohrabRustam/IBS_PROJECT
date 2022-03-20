<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\PolicyRegistration;

class CompanyController extends Controller
{
    //
    public function company()
    {
        // $users = DB::table('registerationcompany')->get();
        $data = Company::all();
        // echo "<pre>";
        // var_dump($data);
        // die;
        // echo "<pre>";
        // var_dump($data);
        if (Session::has('user') && strpos(Session::get('user')['email'], '@ibs.com') !== false && strpos(Session::get('user')['password'], 'admin') !== false) {
            return view('Company.company')->with('data', $data);
        }
        return redirect('adminlogin');
    }

    public function companyRegistration(Request $request){
        $com = new Company();
        $com->register_number=$request->register_number;
        $com->name=$request->name;
        if($request->log !=null){
        $com->logo=$request->logo;
        }
        $com->about=$request->about;
        $com->save();
        return redirect('/company');
    }




}
