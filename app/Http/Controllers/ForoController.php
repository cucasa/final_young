<?php

namespace App\Http\Controllers;
use App\Models\Forum;

use Illuminate\Http\Request;

class ForoController extends Controller
{

public function index(Request $request)
{
    $categoria = $request->input('categoria');
    $foros = Forum::when($categoria, function ($query, $categoria) {
        return $query->where('categoria', $categoria);
    })->get();

    return view('foros', compact('foros'));
}
}
