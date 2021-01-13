<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScrapeController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\Admin;
use App\Http\Middleware\Member;



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
    return view('welcome');
});

Route::middleware([Member::class])->group(function () { 
    Route::post('/scrape', [ScrapeController::class, 'scrape']);
    Route::get('/rating', [ScrapeController::class, 'rating'])->name('rating');
    Route::get('/product', [ScrapeController::class, 'product'])->name('product');
    Route::get('/productdetail', [ScrapeController::class, 'productdetail'])->name('productdetail');
    Route::post('/productdetailaction', [ScrapeController::class, 'productdetailaction'])->name('productdetailaction');
    Route::post('/ratingAction', [ScrapeController::class, 'ratingAction'])->name('ratingAction');
    Route::post('/productAction', [ScrapeController::class, 'productAction'])->name('productAction');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::get('/payment', [App\Http\Controllers\HomeController::class, 'payment'])->name('payment');

Route::middleware([Admin::class])->group(function () { 
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/user/active/{id}', [AdminController::class, 'user']);
});
