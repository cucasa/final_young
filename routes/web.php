<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Body;
use App\Http\Controllers\Entrada;
use App\Http\Controllers\ForumController;

// Página de inicio
Route::get('/', function () {
    return view('welcome');
});

// Página principal
Route::get('youngstar', [Body::class, 'create1'])->name('home');

// Foros
Route::middleware('auth')->group(function () {
    Route::get('forums', [ForumController::class, 'index'])->name('forums.index'); // Listar foros
    Route::get('forums/create', [ForumController::class, 'create'])->name('forums.create'); // Formulario para crear foro
    Route::post('forums', [ForumController::class, 'store'])->name('forums.store'); // Guardar foro
    Route::get('perfil', [Entrada::class, 'perfil'])->name('perfil'); // Perfil del usuario
});

// Registro de usuario
Route::get('registro', [Entrada::class, 'create1'])->name('registro'); // Mostrar el formulario de registro
Route::post('register', [Entrada::class, 'store'])->name('register.store'); // Manejar el registro

// Inicio de sesión
Route::get('entrada', [Entrada::class, 'create2'])->name('entrada'); // Mostrar el formulario de login
Route::post('login', [Entrada::class, 'store2'])->name('login.store'); // Manejar el inicio de sesión

// Cerrar sesión 
Route::post('logout', [Entrada::class, 'logout'])->name('logout');
