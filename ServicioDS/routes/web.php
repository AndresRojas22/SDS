<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Products;


Route::middleware('auth')->group(function(){
    Route::get('/products',function(){
        return view('products.menu');
    })->name('products.menu');


 Route::get('/storage', function () {
    return view('admin.storage');
});
});

Auth::routes();
