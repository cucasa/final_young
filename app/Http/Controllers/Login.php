<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Login extends Controller
{
    public function create1()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        // Crear un nuevo usuario con un rol predeterminado o permitir que sea NULL si no se proporciona
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'roles_id' => $request->roles_id ?? null, // Permitir que sea NULL si no se proporciona
        ]);

        // Redirigir con un mensaje de éxito
        return redirect()->route('login')->with('success', 'Usuario registrado exitosamente.');
    }
}
