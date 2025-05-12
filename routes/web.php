<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Body;
use App\Http\Controllers\Entrada;
use App\Http\Controllers\ForumController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('youngstar', [Body::class, 'create1'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('forums', [ForumController::class, 'index'])->name('forums.index'); 
    Route::get('forums/create', [ForumController::class, 'create'])->name('forums.create'); 
    Route::post('forums', [ForumController::class, 'store'])->name('forums.store'); 
    Route::get('perfil', [Entrada::class, 'perfil'])->name('perfil'); 
});

Route::get('registro', [Entrada::class, 'create1'])->name('registro'); 
Route::post('register', [Entrada::class, 'store'])->name('register.store'); 

Route::get('entrada', [Entrada::class, 'create2'])->name('entrada'); 
Route::post('login', [Entrada::class, 'store2'])->name('login.store'); 

Route::post('logout', [Entrada::class, 'logout'])->name('logout');
