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
Route::get('/login',[vtd_logincontroller::class,'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'loginSubmit'])->name('login.submit');

use App\Http\Controllers\vtd_signupcontroller;
Route::get('/signup',[vtd_signupcontroller::class,'index'])->name('signup.index');
Route::post('/signup',[vtd_signupcontroller::class,'index'])->name('signup.submit');