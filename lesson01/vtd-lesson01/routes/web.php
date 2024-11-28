<?php

use Illuminate\Support\Facades\Route;

/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function () {
    return "<h1>Hello , Vũ Tiến Đức</h1>";
});

Route::get('/devmaster', function () {
    return "<h1>Welcome To, DevMaster Academy!</h1>";
});

Route::redirect('/here', '/there');
Route::get('/there', function () {
    return "<h1>redirect here to there</h1>";
});

Route::get('/vuduc', function () {
    return view('vuduc');
});
// http://127.0.0.1:8000/vuduc  -- đưa tới phần views/vuduc.blade.php

Route::get('/devmaster/{id}',function ($id){
    return "<h1>Devmaste ".$id;
});
//  http://127.0.0.1:8000/devmaster/2005
route::get('/posts/{post}/comments/{comment}',function($postID,$commentID){
    return "<h1>posts: $postID ;comments: $commentID";
});
//  http://127.0.0.1:8000/posts/113/comments/1990

use Illuminate\Http\Request;

Route::get('/user/{id}',function (request $request,$id){
    return '<h1>User -> '.$id;
});
// http://127.0.0.1:8000/user/222

Route::get('/dev/{name?}',function ($name = null){
    return "<h1> Welcome to, $name";
});
// http://127.0.0.1:8000/dev        show: welcome to,
// http://127.0.0.1:8000/dev/VuDuc  show: welcome to, VuDuc

Route::get('/dec/{name?}', function ($name = 'Friend') {
    return "<h1> Welcome to, $name";
});
// http://127.0.0.1:8000/dec        show: welcome to,Friend -- khi không điền gì $name mặc định là $name = 'Friend')
// http://127.0.0.1:8000/dec/VuDuc  show: welcome to, VuDuc

Route::get('/user-constraint/{name}', function ($name){
    return "<h1>route constrain [A-Za-z]+   :".$name;
})->where('name','[A-Za-z]+');
// http://127.0.0.1:8000/user-constraint/Vuduc  show: route constrain [A-Za-z]+

Route::get('/user-constraint/{id}', function ($id){
    return "<h1>route constrain [0-9]+ :".$id;
})->where('id','[0-9]+');
// http://127.0.0.1:8000/user-constraint/6543  show: route constrain [0-9]+

Route::get('/user-constraint/{name}/{id}', function ($name,$id){
    return "<h1>route constrain ['id'=>'[0-9]+','name'=>'[A-Za-z]+']";
})->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);
// http://127.0.0.1:8000/user-constraint/ducyb/123  show:   route constrain ['id'=>'[0-9]+','name'=>'[A-Za-z]+']

Route::get('/user-check/{id}/{name}',function($id,$name){
        return "<h1> user-chek WhereNumber ('id') WhereAlpha ('name') [$id,$name]";

})->WhereNumber('id')->WhereAlpha('name');
// http://127.0.0.1:8000/user-check/2005/vuduc  show:   user-chek WhereNumber ('id') WhereAlpha ('name') [2005,vuduc]

Route::get('/user-check/{name}',function($name){
    return "<h1>user-check WhereAlphaNumeric ('name') => [$name]";
})->WhereAlphaNumeric('name');
//  http://127.0.0.1:8000/user-check/VuDuc  show:   user-check WhereAlphaNumeric ('name') [VuDuc]

Route::get('/user-check/{id}',function($id){
    return "<h1>user-check WhereUuID ('id') => [$id]";
})->WhereUuID('id');
// không thấy chạy

#Encoded Forward Slashes
Route::get('search/{search?}',function ($search){
    return "<h1>Tham Số Trên URL là unicode: $search";

})->where('search','.*');
//  http://127.0.0.1:8000/search/S%E1%BA%A3n%20Ph%E1%BA%A9m%20C%C3%B4ng%20Ngheej show:  Tham Số Trên URL là unicode: Sản Phẩm Công Ngheej

#Named Routes
Route::get('/named/profile',function(){
    return "<h1>Đặt Tên Route";
})->name('name.profile');

use App\Http\Controllers\NamedProfileController;
Route::get('/named/display',
            [NamedProfileController::class,'display']
            )->name('display.profile');
//  http://127.0.0.1:8000/named/display show:   Named Profile Controller -- lấy từ App\Http\Controllers\NamedProfileController
Route::get('/named/show',[NamedProfileController::class,'show']);
//  http://127.0.0.1:8000/named/show    show:   Named Profile Controller 

#route group frefix
Route::group(['prefix'=>'admin'],function(){
    Route::get('/',function(){ return "<h1> Admin Home </h1>";});
    Route::get('/account',function(){ return "<h1> Admin Account</h1>";});
    Route::get('/product',function(){ return "<h1> Admin Product</h1>";});
});

use App\Http\Controllers\AccountController;
Route::get('/account',[AccountController::class,'index'])->name('account.index');
//  http://127.0.0.1:8000/account   show:   Account Controller; action index; return string -- lay du lieu tu:App\Http\Controllers\AccountController;

Route::get('/account-create',[AccountController::class,'create'])->name('account.create');
// lấy dữu liệu từ K23CNT3_VuTienDuc_ProjectLab/vtd-lesson01/resources/views/account-create.blade.php
// AccountController::class,'create' chạy chương trình của App\Http\Controllers\AccountController

Route::get('/account-show',[AccountController::class,'showDaTa'])->name('account.show');
// http://127.0.0.1:8000/account-show   show: Account ID: 10112005 Account Name: Vu-Tien-Duc    
// lấy dữ liệu từ action showDaTa ; showData Lấy Dữ Liệu Từ views account-show;


Route::get('/account-list',[AccountController::class,'list'])->name('account.list');

Route::get('/account-getallaccount',[AccountController::class,'getallaccount'])->name('account.getallaccount');

route::get('/vtd-list',[AccountController::class,'vtdlist'])->name('vtd.list');