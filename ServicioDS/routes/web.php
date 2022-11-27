<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Http\Controllers\ProductController;

Route::middleware('auth')->group(function(){
    Route::get('/products',function(){
        return view('Products.menu');
    })->name('products.menu');

    Route::get('/products/micarrito',function(){
        return view('Products.Carrito');
    })->name('products.Carrito');

    Route::get('/almacen', function () {
    return view('Admin.Almacen');
    })->name('admin.Almacen');

    Route::get('/almacen/create',function(){
        return view('Admin.create');
    })->name('admin.Create');

});

Auth::routes();

Auth::routes();
Route::resource('createP', ProductController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
