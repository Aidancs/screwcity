<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HardwareController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', action: [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/cart', CartController::class);
Route::resource('/order', OrderController::class);
Route::get('/hardware', [HardwareController::class, 'index'])->name('hardware.index');
Route::get('/hardware/{hardware}', [HardwareController::class, 'show'])->name('hardware.show');
