<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{

public function index(Request $request)
{
    $categoria = $request->input('categoria');
    $articulos = Article::when($categoria, function ($query, $categoria) {
        return $query->where('categoria', $categoria);
    })->get();

    return view('articulos', compact('articulos'));
}
}
