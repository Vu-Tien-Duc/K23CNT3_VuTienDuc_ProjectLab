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
use App\Http\Controllers\vtdKhoaController;
Route::get('/khoa',[vtdKhoaController::class,'vtdGetAllKhoa'])->name('khoas.vtdGetAllKhoa');
// khoa detail
Route::get('/khoa/detail/{makh}',
[vtdKhoaController::class,'tvcGetKhoa'])->name('khoa.tvcGetKhoa');


// khoa edit
Route::get('/khoa/edit/{makh}',
[vtdKhoaController::class,'vtdEdit'])->name('khoa.vtdEdit');
Route::post('/khoa/edit',
[vtdKhoaController::class,'vtdEditSubmit'])->name('khoa.vtdEditSubmit');

//delete
Route::get('/khoa/delete/{makh}',
[vtdKhoaController::class,'vtdDelete'])->name('khoa.vtdDelete');
Route::post('/khoa/delete',
[vtdKhoaController::class,'vtdDeleteSubmit'])->name('khoa.vtdDeleteSubmit');


// create
// routes/web.php
// Route GET để hiển thị form tạo mới khoa
Route::get('/khoa/create', [vtdKhoaController::class, 'vtdCreate'])->name('khoa.vtdCreate');
// Route POST để xử lý submit form tạo mới khoa
Route::post('/khoa/create', [vtdKhoaController::class, 'vtdCreateSubmit'])->name('khoa.vtdCreateSubmit');



// monhoc
use App\Http\Controllers\vtdmonhocController;
Route::get('/monhoc',[vtdmonhocController::class,'vtdGetAllMonhoc'])->name('khoa.vtdGetAllMonhoc');
// khoa detail
Route::get('/monhoc/detail/{makh}',
[vtdmonhocController::class,'tvcGetMonhoc'])->name('monhoc.tvcGetMonhoc');
//create
// Route GET để hiển thị form tạo mới monhoc
Route::get('/monhoc/create', [vtdmonhocController::class, 'vtdCreate'])->name('monhoc.vtdCreate');
// Route POST để xử lý submit form tạo mới monhoc
Route::post('/monhoc/create', [vtdmonhocController::class, 'vtdCreateSubmit'])->name('monhoc.vtdCreateSubmit');