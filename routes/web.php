<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\ForoController;



Route::get('/', function () {
    return view ('welcome');
});


Route::get('youngstar',[PostController::class,'create1']);


Route::get('login', [PostController::class, 'create2'])->name('login');


//articulos
Route::get('articulos', [ArticuloController::class, 'index'])->name('articulos');

Route::get('articulos/create', [ArticuloController::class, 'create'])->name('articulos.create');

Route::get('articulos/{id}', [ArticuloController::class, 'show'])->name('articulos.show');


//foros
Route::get('foros', [ForoController::class, 'index'])->name('foros');

Route::get('foros/create', [ForoController::class, 'create'])->name('foros.create');

Route::get('foros/{id}', [ForoController::class, 'show'])->name('foros.show');
