<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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



