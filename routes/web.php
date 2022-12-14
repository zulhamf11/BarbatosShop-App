<?php

use App\Http\Livewire\Cart;
use App\Http\Livewire\Products;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SummaryController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeUserController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DetailGuestController;

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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/searchGuest', [SearchController::class, 'searchGuest'])->name('searchGuest');

Route::get('/product_category_guest/{categories}', [CategoryController::class, 'CategoryGuest'])->name('product_category_guest');

Route::get('/detailProducts/{id}', [DetailGuestController::class, 'index2'])->name('detailProducts');
Route::get('/masuk', [LoginController::class, 'masuk'])->name('masuk');
Route::get('/daftar', [LoginController::class, 'daftar'])->name('daftar');
// });
Auth::routes();

Route::group(['middleware'=>['auth', 'hakakses:user,admin']], function() {
    Route::get('/profile', [ProfilController::class, 'index'])->name('profile');
    Route::get('/profileadmin', [ProfilController::class, 'index2'])->name('profileadmin');
});

Route::group(['middleware'=>['auth', 'hakakses:user']], function() {
    Route::get('/UserHome', [HomeUserController::class, 'homeuser'])->name('UserHome');
    Route::get('/searchUserHome', [SearchController::class, 'searchUserHome'])->name('searchUserHome');
    Route::get('/detail/{id}', [DetailController::class, 'index'])->name('detail');
    Route::post('/order/{id}', [DetailController::class, 'order'])->name('order');
    Route::get('/cart', [CartController::class, 'cart'])->name('cart');
    Route::get('/product_category_user/{categories}', [CategoryController::class, 'CategoryUser'])->name('product_category_user');
    Route::get('/deletecart/{id}', [CartController::class, 'deletecart'])->name('deletecart');
    Route::get('/summary', [SummaryController::class, 'summary'])->name('summary');
});

Route::group(['middleware'=>['auth', 'hakakses:admin']], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/search', [SearchController::class, 'searchHome'])->name('search');
    Route::get('/manageproduct', [ProductsController::class, 'index'])->name('manageproduct');
    Route::get('/addproduct', [ProductsController::class, 'addproduct'])->name('addproduct');
    Route::post('/insertproduct', [ProductsController::class, 'insertproduct'])->name('insertproduct');
    Route::get('/showproduct/{id}', [ProductsController::class, 'showproduct'])->name('showproduct');
    
    Route::get('/detailProduct/{id}', [DetailGuestController::class, 'index'])->name('detailProduct');
    
    Route::get('/product_category/{categories}', [CategoryController::class, 'Category'])->name('product_category');
    Route::post('/updateproduct/{id}', [ProductsController::class, 'updateproduct'])->name('updateproduct');
    Route::get('/deleteproduct/{id}', [ProductsController::class, 'deleteproduct'])->name('deleteproduct');
    
});

