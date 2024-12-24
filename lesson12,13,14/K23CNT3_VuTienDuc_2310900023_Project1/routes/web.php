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
use App\Http\Controllers\VTD_QUAN_TRIController;
Route::get('/admins/vtd-login', [VTD_QUAN_TRIController::class, 'vtdLogin'])->name('admins.vtdLogin');
Route::post('/admins/vtd-login', [VTD_QUAN_TRIController::class, 'vtdLoginSubmit'])->name('admins.vtdLoginSubmit');

#admins - route
route::get('/vtd-admins',function(){
    return view('vtdAdmins.index');
});
#admins - danh muc
Route::get('/vtd-admins/danhmuc',function()
{
    return view('vtdAdmins.vtddanhmuc');
});
// loai san pham
// list
use App\Http\Controllers\VTD_LOAI_SAN_PHAMController;
Route::get('/vtd-admins/vtd-loai-san-pham',[VTD_LOAI_SAN_PHAMController::class,'vtdList'])->name('vtdadims.vtdloaisanpham');
//create
Route::get('/vtd-admins/vtd-loai-san-pham/vtd-create',[VTD_LOAI_SAN_PHAMController::class,'vtdCreate'])->name('vtdadmin.vtdloaisanpham.vtdcreate');
Route::post('/vtd-admins/vtd-loai-san-pham/vtd-create',[VTD_LOAI_SAN_PHAMController::class,'vtdCreateSunmit'])->name('vtdadmin.vtdloaisanpham.vtdCreateSunmit');
// edit
Route::get('/vtd-admins/vtd-loai-san-pham/vtd-edit/{id}',[VTD_LOAI_SAN_PHAMController::class,'vtdEdit'])->name('vtdadmin.vtdloaisanpham.vtdEdit');
Route::post('/vtd-admins/vtd-loai-san-pham/vtd-edit',[VTD_LOAI_SAN_PHAMController::class,'vtdEditSubmit'])->name('vtdadmin.vtdloaisanpham.vtdEditSubmit');
// detail
Route::get('/vtd-admins/vtd-loai-san-pham/vtd-detail/{id}',[VTD_LOAI_SAN_PHAMController::class,'vtdGetDetail'])->name('vtdadmin.vtdloaisanpham.vtdGetDetail');
// delete
Route::get('/vtd-admins/vtd-loai-san-pham/vtd-delete/{id}',[VTD_LOAI_SAN_PHAMController::class,'vtdDelete'])->name('vtdadmin.vtdloaisanpham.vtdDelete');

// san pham

// list
use App\Http\Controllers\VTD_SAN_PHAMController;
Route::get('/vtd-admins/vtd-san-pham',[VTD_SAN_PHAMController::class,'vtdList'])->name('vtdadims.vtdsanpham');
//create
Route::get('/vtd-admins/vtd-san-pham/vtd-create',[VTD_SAN_PHAMController::class,'vtdCreate'])->name('vtdadmin.vtdsanpham.vtdcreate');
Route::post('/vtd-admins/vtd-san-pham/vtd-create',[VTD_SAN_PHAMController::class,'vtdCreateSubmit'])->name('vtdadmin.vtdsanpham.vtdCreateSubmit');
//detail
Route::get('/vtd-admins/vtd-san-pham/vtd-detail/{id}', [VTD_SAN_PHAMController::class, 'vtdDetail'])->name('vtdadmin.vtdsanpham.vtdDetail');
// Hiển thị form chỉnh sửa sản phẩm
Route::get('/vtd-admins/vtd-san-pham/vtd-edit/{id}', [VTD_SAN_PHAMController::class, 'vtdEdit'])->name('vtdadmin.vtdsanpham.vtdedit');

// Xử lý cập nhật sản phẩm
Route::post('/vtd-admins/vtd-san-pham/vtd-edit/{id}', [VTD_SAN_PHAMController::class, 'vtdEditSubmit'])->name('vtdadmin.vtdsanpham.vtdEditSubmit');
//delete
// Đảm bảo sử dụng phương thức POST để gọi route xóa sản phẩm
Route::get('/vtd-admins/vtd-san-pham/vtd-delete/{id}', [VTD_SAN_PHAMController::class, 'vtddelete'])->name('vtdadmin.vtdsanpham.vtddelete');
