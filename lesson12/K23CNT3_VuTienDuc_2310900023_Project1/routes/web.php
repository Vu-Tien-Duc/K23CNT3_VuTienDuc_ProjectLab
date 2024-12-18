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

