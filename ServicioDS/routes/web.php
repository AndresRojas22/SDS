<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Products;


Route::middleware('auth')->group(function(){
    Route::get('/products',function(){
        return view('Products.menu');
    })->name('products.menu');

    Route::get('/almacen', function () {
    return view('Admin.Almacen');
    })->name('admin.Almacen');

    Route::get('/almacen/create',function(){
        return view('Admin.create');
    })->name('admin.Create');

});

Auth::routes();
