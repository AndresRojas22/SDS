<?php

use Illuminate\Support\Facades\Route;

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



Auth::routes();

//Route::middleware('auth')->group(function(){
    Route::get('/storage', function () {
        return view('admin.storage');
    });
// });

Route::get('/products',function(){
    return view('products.menu');
})->name('products.menu');
