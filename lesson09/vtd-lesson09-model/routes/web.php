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

#SinhVien - Model
use App\Http\Controllers\vtdSinhVienController;
Route::get('/sinhvien',[vtdSinhVienController::class,'vtdGetAllSinhvien'])->name('sinhvien.vtdGetAllSinhvien');
// chi tiết 
Route::get('/sinhvien/detail/{masv}',[vtdSinhVienController::class,'vtdGetSinhvien'])->name('sinhvien.vtdGetSinhvien');


Route::get('/sinhvien/edit/{masv}', [vtdSinhVienController::class, 'vtdEdit'])->name('sinhvien.vtdEdit');
Route::put('/sinhvien/edit/{masv}', [vtdSinhVienController::class, 'vtdEditSubmit'])->name('sinhvien.vtdEditSubmit');




// Route để hiển thị form thêm sinh viên mới
Route::get('/sinhvien/create', [vtdSinhVienController::class, 'vtdCreate'])->name('sinhvien.vtdCreate');
// Route để xử lý form thêm sinh viên mới
Route::post('/sinhvien/create', [vtdSinhVienController::class, 'vtdCreateSubmit'])->name('sinhvien.vtdCreateSubmit');

// xóa
Route::get('/sinhvien/delete/{masinhvieen}',[vtdSinhVienController::class,'vtddelete'])->name('sinhvien.vtddelete');
