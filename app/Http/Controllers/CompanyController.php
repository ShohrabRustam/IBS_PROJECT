<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

use App\Models\Company;
use Illuminate\Http\Request;

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
}
