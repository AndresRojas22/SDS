<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\ProductController;

Route::middleware('auth')->group(function(){
    Route::get('/products',function(){
        return view('Products.menu');
    })->name('products.menu');

    Route::get('/products/micarrito',function(){
        return view('Products.Carrito');
    })->name('products.Carrito');

    Route::get('/almacen', function () {
    $products = Product::orderBy('created_at','desc')->get();
    return view('Admin.Almacen',compact('products'));
    })->name('admin.Almacen');

    Route::get('/almacen/create',function(){
        return view('Admin.create');
    })->name('admin.Create');

    Route::resource('createP', ProductController::class);

    Route::delete('/almacen/{id}',[ProductController::class,'destroy'])->name('products.destroy');    

    Route::get('/almacen/{product}/edit',[ProductController::class,'edit'])->name('products.edit');

    Route::put('/almacen/{product}',[ProductController::class,'update'])->name('products.update');

});

Auth::routes();
Auth::routes();

