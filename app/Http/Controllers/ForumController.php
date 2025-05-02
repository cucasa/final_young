<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forum;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    public function create()
    {
        // Obtener todas las categorías
        $categories = Category::all();

        // Retornar la vista con las categorías
        return view('foros', compact('categories'));
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'category_id' => 'required|exists:categories,id', // Validar que la categoría exista
        ]);

        // Crear un nuevo foro
        Forum::create([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'user_id' => Auth::id(), // Asignar el foro al usuario autenticado
        ]);

        // Redirigir con un mensaje de éxito
        return redirect()->route('foros')->with('success', 'Foro creado exitosamente.');
    }
}
