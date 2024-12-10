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
