<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Entrada extends Controller
{
    public function create1()
    {
        return view('registro');
    }

    public function create2()
    {
        return view('entrada');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return to_route('entrada')->with('success', 'Usuario registrado exitosamente.');
    }

    public function store2(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            return to_route('perfil'); // Redirigir al perfil del usuario
        }

        return back()->withErrors(['email' => 'Las credenciales no son correctas.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('pelfil');
    }
 
    public function perfil()
    {
        $user = Auth::user(); // Obtener el usuario autenticado
        $categories = Category::all(); // Obtener las categorías para los foros
        return view('perfil', compact('user', 'categories')); // Pasar datos a la vista
    }
}

