<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

use App\Models\Company;
use App\Models\policy;
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

    public function addPolicy(Request $request){
        $policy = new policy();
        $policy->companyid=$request->companyid;
        $policy->policyname=$request->policyname;
        $policy->policytype=$request->policytype;
        $policy->policydesc=$request->policydesc;
        $policy->policyprice=$request->policyprice;
        $policy->claimprice=$request->claimprice;
        $policy->timeperiod=$request->timeperiod;
        $policy->save();
        return redirect('company');

    }

}
