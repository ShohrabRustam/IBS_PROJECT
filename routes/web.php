<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Models\Company;
use Illuminate\Support\Facades\Session;
use App\Models\policy;



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
Route::get('/', [UserController::class,'home']);
// about page
Route::get('/about',[UserController::class,'about']);

// contact page
Route::get('/contact',[UserController::class,'contact']);


Route::get('/HealthInsurance',[UserController::class,'health']);

Route::get('/LifeInsurance',[UserController::class,'life']);

Route::get('/BikeInsurance',[UserController::class,'bike']);

Route::get('/CarInsurance',[UserController::class,'car']);

Route::get('/signUp',[UserController::class,'signup']);
// Signup Page
Route::post('/signUp',[UserController::class,'sigup'])->name('signUp');

Route::get('/login',[UserController::class,'login']);

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

Route::get('/adminlogin', [AdminController::class, 'adminlog']);


// login by admin
Route::post('/adminlogin', [AdminController::class, 'adminlogin']);

//admin logout
Route::get('/adminlogout', [AdminController::class,'adminlogout']);

#################################################################################################################################################################
//@auther Rustam
#################################################################################################################################################################
#@Company Pages Route
##################################################################################################################################################################
// company page
Route::get('/company',[CompanyController::class,'company']);

// company registratyion page
Route::get('/companyregistration',[CompanyController::class,'companyreg']);

// company registration
Route::post('/companyregistration',[CompanyController::class,'companyRegistration']);


// Route::get('/policyregistration/{id}',function($id){
//     $companyid =Company::find($id);

//     return view('Company.policyRegistration')->with('companyid',$companyid);
// });

Route::get('/policyregistration/{id}',[CompanyController::class,'policyReg']);

Route::post('/policyregistration',[CompanyController::class,'addPolicy']);

Route::get('//viewpolicy/{id}',[CompanyController::class,'viewpolicy']);

