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

// Khoa     ////////////////////////////////////////////////////////////////////////////
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



// create
// routes/web.php
// Route GET để hiển thị form tạo mới khoa
Route::get('/khoa/create', [vtdKhoaController::class, 'vtdCreate'])->name('khoa.vtdCreate');
// Route POST để xử lý submit form tạo mới khoa
Route::post('/khoa/create', [vtdKhoaController::class, 'vtdCreateSubmit'])->name('khoa.vtdCreateSubmit');



// monhoc   ////////////////////////////////////////////////////////////////////////////
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


## sửa thông tin môn học
Route::get('/monhoc/edit/{mamonhoc}',[vtdmonhocController::class,'vtdedit'])->name('monhoc.vtdedit');
Route::post('/monhoc/edit',[vtdmonhocController::class,'vtdeditSubmit'])->name('monhoc.vtdeditSubmit');

## Xóa thông tin môn học
Route::get('/monhoc/delete/{mamonhoc}',[vtdmonhocController::class,'vtddelete'])->name('monhoc.vtddelete');

//Sinh viên ////////////////////////////////////////////////////////////////////////////
use App\Http\Controllers\vtdsinhvienController;
Route::get('/sinhvien',[vtdsinhvienController::class,'GetAllSinhVien'])->name('sinhvien.GetAllSinhVien');
# Hiển Thị Thông tin sinh vien
Route::get('/sinhvien/detail/{masinhvien}',[vtdsinhvienController::class,'vtdGetSinhvien'])->name('sinhvien.vtdGetSinhvien');
//create
// Route GET để hiển thị form tạo mới sinhvien
Route::get('/sinhvien/create', [vtdsinhvienController::class, 'vtdCreate'])->name('sinhvien.vtdCreate');
// Route POST để xử lý submit form tạo mới sinhvien
Route::post('/sinhvien/create', [vtdsinhvienController::class, 'vtdCreateSubmit'])->name('sinhvien.vtdCreateSubmit');
## sửa thông tin sinh viên
Route::get('/sinhvien/edit/{masinhvien}',[vtdsinhvienController::class,'vtdEdit'])->name('sinhvien.vtdEdit');
Route::post('/sinhvien/edit',[vtdsinhvienController::class,'vtdEditSubmit'])->name('sinhvien.vtdEditSubmit');
## Xóa thông tin sinh viên
Route::get('/sinhvien/delete/{masinhvien}',[vtdsinhvienController::class,'vtddelete'])->name('sinhvien.vtddelete');