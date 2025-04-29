{{-- filepath: c:\xampp\htdocs\yostar\resources\views\articulos.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container py-4">
    {{-- Encabezado --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Artículos</h2>
        <a href="{{ route('articulos.create') }}" class="btn btn-primary">Crear nuevo artículo</a>
    </div>

    {{-- Filtro por categoría --}}
    <form method="GET" action="{{ route('articulos') }}" class="mb-4">
        <div class="row g-2 align-items-center">
            <div class="col-auto">
                <select name="categoria" class="form-select">
                    <option value="">Todas las categorías</option>
                    <option value="tecnologia">Tecnología</option>
                    <option value="ciencia">Ciencia</option>
                    <option value="arte">Arte</option>
                </select>
            </div>
            <div class="col-auto">
                <button class="btn btn-outline-secondary" type="submit">Filtrar</button>
            </div>
        </div>
    </form>

    {{-- Lista de artículos --}}
    <div class="row row-cols-1 row-cols-md-2 g-4">
        @if(isset($articulos) && count($articulos) > 0)
            @foreach($articulos as $articulo)
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $articulo->titulo }}</h5>
                            <p class="card-text text-truncate">{{ $articulo->contenido }}</p>
                            <span class="badge bg-info text-dark">{{ ucfirst($articulo->categoria) }}</span>
                        </div>
                        <div class="card-footer text-end">
                            <a href="{{ route('articulos.show', $articulo->id) }}" class="btn btn-sm btn-outline-primary">Ver más</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p class="text-muted">No hay artículos disponibles.</p>
        @endif
    </div>
</div>
@endsection
