{{-- filepath: c:\xampp\htdocs\yostar\resources\views\foros\create.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="text-center mb-4">Foros</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h2 class="mb-3">Categorías Disponibles</h2>
    <ul class="list-group mb-4">
        @forelse($categories as $category)
            <li class="list-group-item">{{ $category->name }}</li>
        @empty
            <li class="list-group-item">No hay categorías disponibles.</li>
        @endforelse
    </ul>

    <h2 class="mb-3">Crear un nuevo foro</h2>
    <form action="{{ route('foros.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nombre del Foro</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Escribe el nombre del foro" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descripción</label>
            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Escribe una descripción para el foro" required></textarea>
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Categoría</label>
            <select class="form-control" id="category_id" name="category_id" required>
                <option value="">Selecciona una categoría</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Crear Foro</button>
    </form>
</div>
@endsection
