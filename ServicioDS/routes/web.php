<?php

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::middleware('auth')->group(function(){
    Route::get('/products',function(){
    $products = Product::all();
    return view('Products.Menu',compact('products'));
    })->name('products.menu');

    Route::get('/products/micarrito',function(){
        return view('Products.Carrito');
    })->name('products.Carrito');

    Route::get('/products/checkout',function(){
        $products = Product::all();
        return view('Products.Buy',compact('products'));
    })->name('products.Buy');

    Route::get('/almacen', function () {
    $products = Product::orderBy('created_at','desc')->get();
    return view('Admin.Almacen',compact('products'));
    })->name('admin.Almacen');

    Route::get('/almacen/create',function(){
        return view('Admin.create');
    })->name('admin.Create');

    Route::get('/products/checkout/method', function(){
        return view('products.Method');
    })->name('products.method');

    Route::get('/products/checkout/method/payment', function(){
        return view('products.PaymentC');
    })->name('products.PaymentC');

    Route::resource('createP', ProductController::class);

    

    Route::delete('/almacen/{id}',[ProductController::class,'destroy'])->name('products.destroy');    

    Route::get('/almacen/{product}/edit',[ProductController::class,'edit'])->name('products.edit');

    Route::put('/almacen/{product}',[ProductController::class,'update'])->name('products.update');

});

Auth::routes();
Auth::routes();

