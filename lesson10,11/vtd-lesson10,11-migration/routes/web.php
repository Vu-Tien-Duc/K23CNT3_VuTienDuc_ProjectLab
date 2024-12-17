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
// nhacc
use App\Http\Controllers\VtdNhaCCController;
Route::get('/vtdnhacc',[VtdNhaCCController::class,'vtdlist'])->name('vtdnhacc.vtdlist');
//chi tiet
Route::get('/vtdnhacc/detail/{manhacc}',[VtdNhaCCController::class,'vtddetail'])->name('vtdnhacc.vtddetail');
// edit
Route::get('/vtdnhacc/edit/{manhacc}',[VtdNhaCCController::class,'vtdedit'])->name('vtdnhacc.vtdedit');
Route::post('/vtdnhacc/edit/{manhacc}',[VtdNhaCCController::class,'vtdeditsubmit'])->name('vtdnhacc.vtdeditsubmit');
// create
Route::get('/vtdnhacc/create', [VtdNhaCCController::class, 'vtdcreate'])->name('vtdnhacc.vtdcreate');
Route::post('/vtdnhacc/create', [VtdNhaCCController::class, 'vtdcreatesubmit'])->name('vtdnhacc.vtdcreatesubmit');
// delete
Route::get('vtdnhacc/delete/{manhacc}',[VtdNhaCCController::class,'vtddelete'])->name('vtdnhacc.vtddelete');



// vattu
use App\Http\Controllers\vtdVatTuControler;
Route::get('/vtdvattu',[vtdVatTuControler::class,'vtdlist'])->name('vtdvattu.vtdlist');
//chi tiet
Route::get('/vtdvattu/detail/{mavattu}',[vtdVatTuControler::class,'vtddetail'])->name('vtdvattu.vtddetail');

// edit
Route::get('/vtdvattu/edit/{mavattu}',[vtdVatTuControler::class,'vtdedit'])->name('vtdvattu.vtdedit');
Route::post('/vtdvattu/edit/{mavattu}',[vtdVatTuControler::class,'vtdeditsubmit'])->name('vtdvattu.vtdeditsubmit');
// create
Route::get('/vtdvattu/create',[vtdVatTuControler::class,'vtdcreate'])->name('vtdvattu.vtdcreate');
Route::post('/vtdvattu/create',[vtdVatTuControler::class,'vtdcreatesubmit'])->name('vtdvattu.vtdcreatesubmit');

// delete
Route::get('vtdvattu/delete/{mavattu}',[vtdVatTuControler::class,'vtddelete'])->name('vtdvattu.vtddelete');


