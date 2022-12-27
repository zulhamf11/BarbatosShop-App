<?php

use App\Http\Livewire\Cart;
use App\Http\Livewire\Products;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;

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
    return view('home');
});

Route::get('/manageproduct', [ProductsController::class, 'index'])->name('manageproduct');
Route::get('/addproduct', [ProductsController::class, 'addproduct'])->name('addproduct');
Route::post('/insertproduct', [ProductsController::class, 'insertproduct'])->name('insertproduct');
Auth::routes();

Route::group(['middleware'=>['auth']], function() {
    Route::get('/products', Products::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
});

