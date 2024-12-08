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

use App\Http\Controllers\vtd_loginController;
Route::get('/vtd-login',[vtd_loginController::class,'vtdindex'])->name('vtd-login.vtdindex');
Route::post('/vtd-login',[vtd_loginController::class,'loginsubmit'])->name('vtd-login.loginsubmit');


//
use Illuminate\Http\Request;

Route::get('/user',function(Request $request){
    return $request->path();
    });
 //   =>Test: http://localhost:8000/user
 //   Kết quả: user
  //  - Lấy full đường dẫn

Route::get('/user1',function(Request $request){
    return $request->fullUrl();

    });
    //  http://127.0.0.1:8000/user?name=%22vuduc%22133 show: http://127.0.0.1:8000/user?name=%22vuduc%22133

    Route::get('/user2',function(Request $request){
  
        $res=$request->fullUrlWithoutQuery(['email']);
        return $res;
        });

Route::get('/host-test',function(Request $request){
    $host=$request->host();                             //Host:127.0.0.1
    $httpHost=$request->httpHost();                     //httpHost: 127.0.0.1:8000
    $schemeAndHttpHost=$request->schemeAndHttpHost();   //schemeAndHttpHost: http://127.0.0.1:8000
    return "<h2> Host:".$host
    . "<h2> httpHost: ".$httpHost
    ."<h2> schemeAndHttpHost: ".$schemeAndHttpHost;
});

Route::get('/method-test',function(Request $request){
    $res=$request->method();        //show: GET

    return $res;
    });


use App\Http\Controllers\vtdLoginController;
Route::get('/login1',[vtdLoginController::class,'index'])->name('login.index');
Route::post('/login1',[vtdLoginController::class,'loginSubmit'])->name('login.submit');

use App\http\Controllers\vtdsignupController;
Route::get('/signup',[vtdsignupController::class,'vtdindex'])->name('signup.vtdindex');
Route::post('/signup',[vtdsignupController::class,'vtdSignupSubmit'])->name('signup.vtdSignupSubmit');