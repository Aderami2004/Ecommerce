<?php

use Illuminate\Support\Facades\Route;
use App\Https\Controllers\TambahController;
use App\Https\Controllers\CartController;

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
    return view('register');
})->name('login');

Route::get('cart', function () {
    return view('cart');
});

Route::get('tambah', function () {
    return view('tambah');
});


Route::get('FormCart', function () {
    return view('FormCart');
});

Route::get('layout', function () {
    return view('layout');
});

Route::middleware('auth')->group(function () {
    Route::get('tambah',[TambahController::class,'show']);
    Route::get('tambah/add',[TambahController::class,'add']);
    Route::post('admin/create',[TambahController::class,'create']);
    Route::get('admin/hapus{id}',[TambahController::class,'hapus']);
    Route::post('admin/update{id}',[TambahController::class,'update']);
    Route::get('admin/edit{id}',[TambahController::class,'edit']);
    Route::get('admin/cari',[TambahController::class,'cari']);

});






