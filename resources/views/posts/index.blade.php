@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Lista de post de Rata Audaz</h1>

    <!-- Animación -->
    <div class="main">
        <div class="up">
            <div class="loaders">
                @for ($i = 0; $i < 10; $i++)
                    <div class="loader"></div>
                @endfor
            </div>
            <div class="loadersB">
                @for ($i = 0; $i < 9; $i++)
                    <div class="loaderA">
                        <div class="ball{{ $i }}"></div>
                    </div>
                @endfor
            </div>
        </div>
    </div>

    <!-- Lista de posts -->
    <ul class="mt-4">
        @foreach ($posts as $post)
            <li>
                <a href="/posts/{{ $post->id }}">
                    {{ $post->title }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
