<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VTD_LOAI_SAN_PHAMController;
use App\Http\Controllers\VTD_SAN_PHAMController;
use App\Http\Controllers\VTD_KHACH_HANGcontroller;
use App\Http\Controllers\VTD_DANH_SACH_QUAN_TRIController;
use App\Http\Controllers\VTD_HOA_DONController;

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


// admins login --------------------------------------------------------------------------------------------------------------------------------------
use App\Http\Controllers\VTD_QUAN_TRIController;
Route::get('/', [VTD_QUAN_TRIController::class, 'vtdLogin'])->name('admins.vtdLogin');
Route::post('/', [VTD_QUAN_TRIController::class, 'vtdLoginSubmit'])->name('admins.vtdLoginSubmit');


#admins - route--------------------------------------------------------------------------------------------------------------------------------------
route::get('/vtd-admins',function(){
    return view('vtdAdmins.index');
});
#admins - danh muc--------------------------------------------------------------------------------------------------------------------------------------
Route::get('/vtd-admins/vtddanhsachquantri/vtddanhmuc', [VTD_DANH_SACH_QUAN_TRIController::class, 'danhmuc'])->name('vtdAdmins.vtddanhsachquantri.danhmuc');
#admins - tin tức --------------------------------------------------------------------------------------------------------------------------------------
Route::get('/vtd-admins/vtddanhsachquantri/vtdtintuc', [VTD_DANH_SACH_QUAN_TRIController::class, 'tintuc'])->name('vtdAdmins.vtddanhsachquantri..danhmuc.tintuc');
// Sản phẩm--------------------------------------------------------------------------------------------------------------------------------------
Route::get('/vtd-admins/vtddanhsachquantri/vtdsanpham', [VTD_DANH_SACH_QUAN_TRIController::class, 'sanpham'])->name('vtdAdmins.vtddanhsachquantri.danhmuc.sanpham');
// Mô tả sản phẩm--------------------------------------------------------------------------------------------------------------------------------------
Route::get('/vtd-admins/vtddanhsachquantri/vtdmota/{id}', [VTD_DANH_SACH_QUAN_TRIController::class, 'mota'])->name('vtdAdmins.vtddanhsachquantri.danhmuc.mota');
#admins - nguoidung--------------------------------------------------------------------------------------------------------------------------------------
Route::get('/vtd-admins/vtddanhsachquantri/vtdnguoidung', [VTD_DANH_SACH_QUAN_TRIController::class, 'nguoidung'])->name('vtdAdmins.vtddanhsachquantri.nguoidung');

// loai san pham--------------------------------------------------------------------------------------------------------------------------------------
// list
Route::get('/vtd-admins/vtd-loai-san-pham',[VTD_LOAI_SAN_PHAMController::class,'vtdList'])->name('vtdadmins.vtdloaisanpham');
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

// san pham--------------------------------------------------------------------------------------------------------------------------------------

// list

Route::get('/vtd-admins/vtd-san-pham',[VTD_SAN_PHAMController::class,'vtdList'])->name('vtdadims.vtdsanpham');
//create
Route::get('/vtd-admins/vtd-san-pham/vtd-create',[VTD_SAN_PHAMController::class,'vtdCreate'])->name('vtdadmin.vtdsanpham.vtdcreate');
Route::post('/vtd-admins/vtd-san-pham/vtd-create',[VTD_SAN_PHAMController::class,'vtdCreateSubmit'])->name('vtdadmin.vtdsanpham.vtdCreateSubmit');
//detail
Route::get('/vtd-admins/vtd-san-pham/vtd-detail/{id}', [VTD_SAN_PHAMController::class, 'vtdDetail'])->name('vtdadmin.vtdsanpham.vtdDetail');
// edit
Route::get('/vtd-admins/vtd-san-pham/vtd-edit/{id}', [VTD_SAN_PHAMController::class, 'vtdEdit'])->name('vtdadmin.vtdsanpham.vtdedit');

// Xử lý cập nhật sản phẩm
Route::post('/vtd-admins/vtd-san-pham/vtd-edit/{id}', [VTD_SAN_PHAMController::class, 'vtdEditSubmit'])->name('vtdadmin.vtdsanpham.vtdEditSubmit');
//delete
// Đảm bảo sử dụng phương thức POST để gọi route xóa sản phẩm
Route::get('/vtd-admins/vtd-san-pham/vtd-delete/{id}', [VTD_SAN_PHAMController::class, 'vtddelete'])->name('vtdadmin.vtdsanpham.vtddelete');


// khach hang--------------------------------------------------------------------------------------------------------------------------------------
// list
Route::get('/vtd-admins/vtd-khach-hang',[VTD_KHACH_HANGcontroller::class,'vtdList'])->name('vtdadmins.vtdkhachhang');
//detail
Route::get('/vtd-admins/vtd-khach-hang/vtd-detail/{id}', [VTD_KHACH_HANGcontroller::class, 'vtdDetail'])->name('vtdadmin.vtdkhachhang.vtdDetail');
//create
Route::get('/vtd-admins/vtd-khach-hang/vtd-create',[VTD_KHACH_HANGcontroller::class,'vtdCreate'])->name('vtdadmin.vtdkhachhang.vtdcreate');
Route::post('/vtd-admins/vtd-khach-hang/vtd-create',[VTD_KHACH_HANGcontroller::class,'vtdCreateSubmit'])->name('vtdadmin.vtdkhachhang.vtdCreateSubmit');
//edit
Route::get('/vtd-admins/vtd-khach-hang/vtd-edit/{id}', [VTD_KHACH_HANGcontroller::class, 'vtdEdit'])->name('vtdadmin.vtdkhachhang.vtdedit');
Route::post('/vtd-admins/vtd-khach-hang/vtd-edit/{id}', [VTD_KHACH_HANGcontroller::class, 'vtdEditSubmit'])->name('vtdadmin.vtdkhachhang.vtdEditSubmit');
//delete
// Đảm bảo sử dụng phương thức POST để gọi route xóa sản phẩm
Route::get('/vtd-admins/vtd-khach-hang/vtd-delete/{id}', [VTD_KHACH_HANGcontroller::class, 'vtdDelete'])->name('vtdadmin.vtdsanpham.vtddelete');

// Hóa Đơn--------------------------------------------------------------------------------------------------------------------------------------
// list
Route::get('/vtd-admins/vtd-hoa-don',[VTD_HOA_DONController::class,'vtdList'])->name('vtdadmins.vtdhoadon');
//detail
Route::get('/vtd-admins/vtd-hoa-don/vtd-detail/{id}', [VTD_HOA_DONController::class, 'vtdDetail'])->name('vtdadmin.vtdhoadon.vtdDetail');
