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

// list
use App\Http\Controllers\VTD_LOAI_SAN_PHAMController;
Route::get('/vtd-admins/vtd-loai-san-pham',[VTD_LOAI_SAN_PHAMController::class,'vtdList'])->name('vtdadims.vtdloaisanpham');
//create
Route::get('/vtd-admins/vtd-loai-san-pham/vtd-create',[VTD_LOAI_SAN_PHAMController::class,'vtdCreate'])->name('vtdadmin.vtdloaisanpham.vtdcreate');
Route::post('/vtd-admins/vtd-loai-san-pham/vtd-create',[VTD_LOAI_SAN_PHAMController::class,'vtdCreateSunmit'])->name('vtdadmin.vtdloaisanpham.vtdCreateSunmit');
// edit
Route::get('/vtd-admins/vtd-loai-san-pham/vtd-edit/{maloai}',[VTD_LOAI_SAN_PHAMController::class,'vtdEdit'])->name('vtdadmin.vtdloaisanpham.vtdEdit');
Route::post('/vtd-admins/vtd-loai-san-pham/vtd-edit/{maloai}',[VTD_LOAI_SAN_PHAMController::class,'vtdEditSubmit'])->name('vtdadmin.vtdloaisanpham.vtdEditSubmit');
// detail
Route::get('/vtd-admins/vtd-loai-san-pham/vtd-detail/{maloai}',[VTD_LOAI_SAN_PHAMController::class,'vtdGetDetail'])->name('vtdadmin.vtdloaisanpham.vtdGetDetail');
// delete
Route::get('/vtd-admins/vtd-loai-san-pham/vtd-delete/{maloai}',[VTD_LOAI_SAN_PHAMController::class,'vtdDelete'])->name('vtdadmin.vtdloaisanpham.vtdDelete');