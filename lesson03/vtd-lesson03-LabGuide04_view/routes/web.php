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

Route::get('/view-1',function(){ return view('view-1');});
// http://127.0.0.1:8000/view-1     show:Tạo Một View Đơn Giản -- lấy dữ liệu của controller - controller lấy dữu liệu từ view-1.blade.php

Route::get('/view-2',function(){return view('view-2',['name'=>'Vũ Tiến Đức']);});
// http://127.0.0.1:8000/view-2     show:View Render Data   Vũ Tiến Đức -- lấy thẳng dữ liệu từ view-2 name lấy dữ liêu từ view('view-2',['name'=>'Vũ Tiến Đức'])
 

use App\Http\Controllers\VtdAccountController;
route::get('/vtd-account',[vtdAccountController::class,'vtdIndex'])->name('vtd.account');
// tạo 1 controller mới
// lấy dữ liệu từ controller 

Route::get('/view-3',function(){return view('admin.view-3');});
// lấy thẳng dữ liệu từ views\admin\view-3

use App\Http\Controllers\vtd_viewdemoController; // kết nối với controller vừa tạo bằng lệnh php artisan make:controller "Tên controller bạn muốn"
Route::get('/view-4',[vtd_viewdemoController::class,'view4'])->name('viewdemo.view4');
// http://127.0.0.1:8000/view-4     show:Passing data to view4 Name: Vũ Đức Company: Devmaster D 
// lấy dữ liệu từ controller và chuyển qua view-4   vd:    <h2>Name: {{$name}}</h2>



Route::get('/view-5',[vtd_viewdemoController::class,'view5'])->name('viewdemo.view5');
// giống view-4


Route::get('/view-6',function(){return view('view-6');});

use App\Http\Controllers\LoginController;
Route::get('login',[LoginController::class,'index','loginsubmit'])->name('login.submit');