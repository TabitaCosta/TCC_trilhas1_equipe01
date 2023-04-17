<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ProductController;
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

Route::get('/dicas', function () {
     return view('dicas');
 });
 Route::get('/help', function () {
    return view('help');
});


Route::get('/dashboard', [ProductController::class, 'dashboard']);
Route::post('/search', [ProductController::class, 'busca']);
Route::get('/filter', [ProductController::class, 'Verao']);
Route::get('/filter', [ProductController::class, 'Inverno']);
Route::get('/filter', [ProductController::class, 'Outono']);
Route::get('/filter', [ProductController::class, 'Primavera']);

Route::get('/', [ProductController::class, 'loja']);
Route::get('/preview', [ProductController::class, 'preview']);
Route::get('test{description}',[ProductController::class, 'filterCategorie']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});


Route::post('/contact', [EmailController::class, 'contact']);
Route::post('/procura', [ProductController::class, 'procura']);



Route::resource('/dashboard/type', TypeController::class);
Route::resource('/dashboard/collection', CollectionController::class);
Route::resource('/dashboard/products', ProductController::class);
require __DIR__.'/auth.php';
