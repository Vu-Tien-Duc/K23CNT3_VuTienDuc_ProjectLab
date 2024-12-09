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

use App\Http\Controllers\vtdSecssionController;
Route::get('/session/get', [vtdSecssionController::class,'vtdGetsessionData'])->name('session.get');
Route::get('/session/set', [vtdSecssionController::class,'vtdStoreSessionData'])->name('session.set');
Route::get('/session/delete', [vtdSecssionController::class,'vtdDeleteSessionData'])->name('session.delete');

#Account
use  App\Http\Controllers\vtdAcountController;
Route::get('vtd-login',[vtdAcountController::class,'vtdLogin'])->name('vtdaccount.vtdlogin');
Route::get('vtd-logout',[vtdAcountController::class,'vtdDeleteSessionData'])->name('vtdaccount.vtdloout');
Route::post('vtd-login',[vtdAcountController::class,'vtdSubmitLogin'])->name('vtdaccount.vtdSubmitLogin');

