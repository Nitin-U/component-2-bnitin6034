<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CdController;
use App\Http\Controllers\GameController;

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
})->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route for our Product Controller functions
Route::resource('products', ProductController::class);

//Route for our Book Controller functions
Route::resource('books', BookController::class);
//Route for our Cd Controller functions
Route::resource('cds', CdController::class);
//Route for our Book Controller functions
Route::resource('games', GameController::class);

//Route for our Search Controller functions
Route::get('/search', [App\Http\Controllers\SearchController::class, 'index'])->name('search');

//Route for our Cart Controller functions
Route::get('cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
Route::post('cart', [App\Http\Controllers\CartController::class, 'store'])->name('cart.store');
Route::post('cart-update', [App\Http\Controllers\CartController::class, 'update'])->name('cart.update');
Route::post('clear', [App\Http\Controllers\CartController::class, 'clearAllCart'])->name('cart.clear');
Route::delete('item-remove', [App\Http\Controllers\CartController::class, 'destroy'])->name('cart.destroy');
