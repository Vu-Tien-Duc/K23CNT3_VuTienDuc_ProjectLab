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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
use App\Http\Controllers\vtd_ProductController;
Route::get('/',[vtd_ProductController::class,'index']);

Route::get('view-1',function(){
    return view('view-1',['name'=>'Vux Tien Duc!']);
});

Route::get('view-2',function(){return view('view-2',
                                            ['name'=>'Vux Tien DUC',
                                            'array'=>[2,3,4,6,1],]);});


Route::get('view-3',function(){
    return view('view-3',[
                            'name'=>['Dev','VuDUC','DUC'],
                            'arr'=>[10,20,25,40,22],
                            'users'=>[],
                            ]);
});


#Template Blade Layout
Route::get('/home',function(){
    return view('index');
    });
    Route::get('/about-us',function(){
    return view('about');
    });
    Route::get('/contact',function(){
    return view('contact');
    });

Route::get('/layout-master',function(){
    return view('_layouts.master');
});