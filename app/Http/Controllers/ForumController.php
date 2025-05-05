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
        $categories = Category::all();
        return view('foros', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'category_id' => 'required|exists:categories,id',
        ]);

        Forum::create([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'user_id' => Auth::id(), // Asignar el ID del usuario autenticado
        ]);
 
        return redirect()->route('perfil')->with('success', 'Foro creado exitosamente.');
    }
}
