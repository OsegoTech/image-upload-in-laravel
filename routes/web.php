<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [ProductController::class, 'index'])->name('index');
Route::get('/create', [ProductController::class, 'create'])->name('create');
Route::post('store', [ProductController::class, 'store'])->name('store');
Route::get('show/{product}', [ProductController::class, 'show'])->name('show');
Route::get('edit/{product}', [ProductController::class, 'edit'])->name('edit');
Route::put('edit/{product}', [ProductController::class, 'update'])->name('update');
Route::delete('/', [ProductController::class, 'destroy'])->name('destroy');
