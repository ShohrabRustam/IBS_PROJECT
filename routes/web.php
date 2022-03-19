<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/about',function(){
    return view('about');
});
Route::get('/contact',function(){
    return view ('contact');
});

Route::get('/signUp',function(){
return view('signup');
});

Route::post('/signUp',[UserController::class,'sigup'])->name('signUp');

Route::get('/login',function(){
return view ('login');
});

Route::get('HealthInsurance',function(){
    return view('InsuranceType.health');
});

Route::get('LifeInsurance',function(){
    return view('InsuranceType.life');
});

Route::get('BikeInsurance',function(){
    return view('InsuranceType.bike');
});
Route::get('CarInsurance',function(){
    return view('InsuranceType.car');
});

Route::post('/login',[UserController::class,'userlogin'])->name('login');

// Route::get('HealthInsurance', [UserController::class, 'HealthInsurance']);

// //Life Insurance Page
// Route::get('LifeInsurance', [UserController::class, 'LifeInsurance']);

// //Bike Insurance Page
// Route::get('BikeInsurance', [UserController::class, 'BikeInsurance']);

// //Car Insurance
// Route::get('CarInsurance', [UserController::class, 'CarInsurance']);
