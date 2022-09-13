<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('excel',function(){
    return view('excel');
});  
Route::get('export-product',[ProductController::class,'exportProduct'])->name('export-product');

 Route::post('import-product',[ProductController::class,'importProduct'])->name('import-product');
