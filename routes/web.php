<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Models\Company;
use Illuminate\Support\Facades\Session;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| @author Rustam
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
##############################################################################################################################################################


// home page
Route::get('/', function () {
    return view('home');
});

// about page
Route::get('/about',function(){
    return view('about');
});

// contact page
Route::get('/contact',function(){
    return view ('contact');
});

// Health Insurance Page
Route::get('HealthInsurance',function(){
    return view('InsuranceType.health');
});

// Life Insurance Page
Route::get('LifeInsurance',function(){
    return view('InsuranceType.life');
});

// Bike Insurance Page
Route::get('BikeInsurance',function(){
    return view('InsuranceType.bike');
});

// Car Insurance Page
Route::get('CarInsurance',function(){
    return view('InsuranceType.car');
});

// SignUp Page
Route::get('/signUp',function(){
return view('signup');
});

// login Page
Route::post('/signUp',[UserController::class,'sigup'])->name('signUp');

Route::get('/login',function(){
return view ('login');
});

Route::post('/login',[UserController::class,'userlogin'])->name('login');

// Logout Page
Route::get('logout', [UserController::class, 'logout']);




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|@auther Rustam
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
#################################################################################################################################################################
//@auther Rustam
#################################################################################################################################################################
#@Admin Pages Route
##################################################################################################################################################################

//admin home page
Route::get('/adminhome', [AdminController::class, 'adminhome']);

// admin insurancerequest
Route::get('/insurancerequest', [AdminController::class,'insurancerequest']);

// admin claimrequest page
Route::get('/claimrequest', [AdminController::class, 'claimrequest']);



Route::get('/adminlogin', function () {
    if (Session::has('user') && strpos(Session::get('user')['email'], '@ibs.com')==true ){
        return redirect('/adminhome');
    }
    return view('Admin.adminlogin');
});

// login by admin
Route::post('/adminlogin', [AdminController::class, 'adminlogin']);

//admin logout
Route::get('/adminlogout', [AdminController::class,'adminlogout']);

#################################################################################################################################################################
//@auther Rustam
#################################################################################################################################################################
#@Company Pages Route
##################################################################################################################################################################
Route::get('/company',[CompanyController::class,'company']);

Route::get('/companyregistration',function(){
    return view('Company.companyRegistration');
});

Route::post('/companyregistration',[CompanyController::class,'companyRegistration']);


Route::get('policyRegistration/{id?}',function($id){
    $companyid =Company::find($id);

    return view('Company.policyRegistration')->with('companyid',$companyid);
});

Route::post('/policyRegistration',[CompanyController::class,'addPolicy']);
