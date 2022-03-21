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
        if (Session::has('user') &&( Session::get('user')['type']== 'admin' || Session::get('user')['type']== 'superadmin') ){
            return view('Company.company')->with('data', $data);
        }
        return redirect('adminlogin');
    }

    public function companyreg()
    {
        return view('Company.companyRegistration');
    }

    public function companyRegistration(Request $request)
    {
        if (Session::has('user') &&( Session::get('user')['type']== 'admin' || Session::get('user')['type']== 'superadmin') ){

        $com = new Company();
        $com->register_number = $request->register_number;
        $com->name = $request->name;
        if ($request->log != null) {
            $com->logo = $request->logo;
        }
        $com->about = $request->about;
        $com->save();
        return redirect('/company');
    }
    return redirect('/adminlogin');
    }

    public function policyReg($id)
    {
        if (Session::has('user') &&( Session::get('user')['type']== 'admin' || Session::get('user')['type']== 'superadmin') ){

        $companyid = Company::find($id);

        return view('Company.policyRegistration')->with('companyid', $companyid);
        }
        return redirect('adminlogin');
    }

    public function addPolicy(Request $request)
    {
        if (Session::has('user') &&( Session::get('user')['type']== 'admin' || Session::get('user')['type']== 'superadmin') ){

        $policy = new policy();
        $policy->companyid = $request->companyid;
        $policy->policyname = $request->policyname;
        $policy->policytype = $request->policytype;
        $policy->policydesc = $request->policydesc;
        $policy->policyprice = $request->policyprice;
        $policy->claimprice = $request->claimprice;
        $policy->timeperiod = $request->timeperiod;
        $policy->save();
        return redirect('company');
        }
        return redirect('adminlogin');
    }

    public function viewpolicy($id)
    {
        if (Session::has('user') &&( Session::get('user')['type']== 'admin' || Session::get('user')['type']== 'superadmin') ){
        $company =  Company::where("id", $id)->first();
        $policy =   policy::all();
        return view('Company.viewpolicy')->with('company', $company)->with('policies', $policy);
        }
        return redirect('/adminlogin');
    }
}
