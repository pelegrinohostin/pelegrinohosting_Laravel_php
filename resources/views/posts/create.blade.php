<!--- create.blade.php ---->
@extends('layouts.app')

@section('content')
<h1 class="mb-4">Crear Post de Rata Audaz</h1>

<!---- Mostrar errores de validación --->
@if ($errors->any())
<div class="alert alert-danger">
    <ul class="mb-0">
        @foreach ($errors->all() as $error)
        <li>
            {{ $error}}
        </li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('posts.store')  }}"
    method="POST"
    class="card p-4 shadow-sm">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Título:</label>
        <input type="text" name="title" id="title"
            class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Contenido:</label>
        <textarea name="content" id="content" class="form-control" rows="5" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Volver a la Lista</a>
</form>
@endsection