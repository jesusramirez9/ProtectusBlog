<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\PostController;
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
    
    return view('web.index');
})->name('inicio');

Route::post('contacto', [ContactoController::class, 'store'])->name('contacto.store');

Route::get('/recibos', function(){
    return view('web.recibo');
})->middleware('can:web.recibo')->name('web.recibo');

Route::get('/recibos/torre-A', function () {
    return view('web.torrea');
})->name('web.torrea');
Route::get('/recibos/torre-B', function () {
    return view('web.torreb');
})->name('web.torreb');
Route::get('/recibos/torre-C', function () {
    return view('web.torrec');
})->name('web.torrec');
Route::get('/recibos/torre-D', function () {
    return view('web.torred');
})->name('web.torred');

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::get('/posts/{post}',[PostController::class,'show'])->name('posts.show');

Route::get('/category/{category}',[PostController::class,'category'])->name('posts.category');

Route::get('/tag/{tag}',[PostController::class,'tag'])->name('posts.tag');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
