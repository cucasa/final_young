<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\body;
use App\Http\Controllers\Login;
use App\Http\Controllers\ForumController;



Route::get('/', function () {
    return view ('welcome');
});


//body el cuerpo de la pagina
Route::get('youngstar',[Body::class,'create1']);


//foros
Route::get('foros', [ForumController::class, 'create'])->name('foros'); // Mostrar el formulario
Route::post('foros', [ForumController::class, 'store'])->name('foros.store'); // Guardar el foro



//registro de usuario
Route::get('login', [Login::class, 'create1'])->name('login'); // Ruta para mostrar el formulario
Route::post('register', [Login::class, 'store'])->name('register.store'); // Ruta para manejar el registro
