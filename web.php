<?php

use App\Http\Controllers\ProductController;
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

Route::get('/faltu', function () {
    return view('faltu');
});
Route::get('/',[ProductController::class,'index'])->name('products.index');
Route::get('/product/create',[ProductController::class,'create'])->name('products.create');
Route::post('/product/store',[ProductController::class,'store'])->name('products.store');
Route::get('/products/{id}/edit',[ProductController::class,'edit'])->name('products.edit');
Route::put('/products/{id}/update',[ProductController::class,'update'])->name('products.update');
Route::get('/products/{id}/delete',[ProductController::class,'destroy'])->name('products.destroy');


