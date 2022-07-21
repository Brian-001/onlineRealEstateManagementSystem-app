<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/welcome', [HomeController::class, 'welcome'])->name('home.welcome');
Route::get('/residential', [HomeController::class, 'residential'])->name('home.residential');

Route::get('/resort', [HomeController::class, 'resort'])->name('home.resort');
Route::get('/stall', [HomeController::class, 'stall'])->name('home.stall');
Route::get('/warehouse', [HomeController::class, 'warehouse'])->name('home.warehouse');
Route::get('/office', [HomeController::class, 'office'])->name('home.office');
Route::get('/land', [HomeController::class, 'land'])->name('home.land');
Route::get('/shouse', [HomeController::class, 'shouse'])->name('home.shouse');
Route::get('/restate', [HomeController::class, 'restate'])->name('home.restate');
Route::get('/apartment', [HomeController::class, 'apartment'])->name('home.apartment');
Route::get('/sellerpanel', [HomeController::class, 'sellerpanel'])->name('home.sellerpanel');
Route::get('/seller', [HomeController::class, 'seller'])->name('home.seller'); /* Needs to be put under AdminController*/
Route::get('/staffpanel', [HomeController::class, 'staffpanel'])->name('home.staffpanel'); /* Needs to be put under AdminController*/

/*All Routes are going to be based on products folder*/
Route::resource('products', ProductsController::class);



Route::get('home', function () {
    return view('home');
});
Route::get('index', function () {
    return view('index');
});

Route::get('adminDashboard', function () {
    return view('adminDashboard');
});

Route::get('product', function () {
    return view('product');
});
Route::get('faqs', function () {
    return view('faqs');
});
