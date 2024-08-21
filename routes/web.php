<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    return view('pages.home');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'postLogin'])->name('login')->middleware('guest');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'postRegister'])->name('register')->middleware('guest');


Route::post('/logout', [AuthController::class, 'logoutUser'])->name('logout')->middleware('auth');


//admin panel routes

Route::group(['prefix' => 'adminpanel', 'middleware' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('adminpanel');

    //products group
    Route::group(['prefix' => 'products'], function () {
        Route::get('/index', [ProductsController::class, 'index'])->name('products');
        Route::get('/create', [ProductsController::class, 'create'])->name('adminpanel.create');
        Route::post('/create', [ProductsController::class, 'create'])->name('adminpanel.store');
    });

    //categories group
    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('categories');
        Route::post('/store', [CategoryController::class, 'storeCat'])->name('adminpanel.category.store');
        Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('adminpanel.category.destroy');
    });

    //categories group
    Route::group(['prefix' => 'colors'], function () {
        Route::get('/', [ColorController::class, 'index'])->name('colors');
        Route::post('/store', [ColorController::class, 'storecolors'])->name('adminpanel.colors.store');
        Route::delete('/{id}', [ColorController::class, 'destroy'])->name('adminpanel.colors.destroy');
    });

});
