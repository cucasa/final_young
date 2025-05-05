{{-- filepath: c:\xampp\htdocs\yostar\resources\views\forums\index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="text-center mb-4">Foros</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('forums.create') }}" class="btn btn-primary mb-3">Crear Foro</a>

    <div class="list-group">
        @foreach($forums as $forum)
            <a href="#" class="list-group-item list-group-item-action">
                <h5 class="mb-1">{{ $forum->name }}</h5>
                <p class="mb-1">{{ $forum->description }}</p>
                <small>Creado por: {{ $forum->user->name }}</small>
            </a>
        @endforeach
    </div>
</div>
@endsection
 