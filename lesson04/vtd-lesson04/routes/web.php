<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/view1',function(){return view('vtd-view1',['name'=>'devmaster']);});
use App\Http\Controllers\vtd_logincontroller;
Route::get('/vtd-login',[vtd_logincontroller::class,'index'])->name('login.index');
Route::post('/vtd-login', [LoginController::class, 'loginSubmit'])->name('login.submit');

use App\Http\Controllers\vtd_signupcontroller;
Route::get('/vtd-signup',[vtd_signupcontroller::class,'index'])->name('signup.index');
Route::post('/vtd-signup',[vtd_signupcontroller::class,'signupSubmit'])->name('signup.submit');

use App\Http\Controllers\vtd_assignment3_controller;
Route::get('/vtd-assignment3',[vtd_assignment3_controller::class,'index'])->name('vtd-assignment3.index');
Route::post('/vtd-assignment3',[vtd_assignment3_controller::class,'store'])->name('vtd-assignment3.store');


