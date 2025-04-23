<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/', function () {
    return view ('welcome');
});


Route::get('youngstar',[PostController::class,'create1']);


Route::get('login', [PostController::class, 'create2'])->name('login');

