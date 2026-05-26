<!---   index.blade.php --->
@extends('layouts.app')

@section('content')
    <h1 class="mb-4 text-center">Lista de post de Rata Audaz</h1>

    <!-- CAMBIO: estructura en 3 columnas (card izquierda, animación al centro, card derecha) -->
    <div class="row mt-4 align-items-center">
        <!-- Card izquierda -->
        <div class="col-md-4">
            <div class="post-card">
                <h5>{{ $posts[0]->title }}</h5>
                <p>{{ Str::limit($posts[0]->content, 100) }}</p>
                <a href="/posts/{{ $posts[0]->id }}" class="btn-neumo mt-2">Ver más</a>
            </div>
        </div>

        <!-- Animación centrada -->
        <div class="col-md-4 d-flex justify-content-center">
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
        </div>

        <!-- Card derecha -->
        <div class="col-md-4">
            <div class="post-card">
                <h5>{{ $posts[1]->title }}</h5>
                <p>{{ Str::limit($posts[1]->content, 100) }}</p>
                <a href="/posts/{{ $posts[1]->id }}" class="btn-neumo mt-2">Ver más</a>
            </div>
        </div>
    </div>

    <!-- CAMBIO: si quieres mostrar más posts, puedes seguir con otro row debajo -->
    <div class="row mt-4">
        @foreach ($posts->skip(2) as $post)
            <div class="col-md-4">
                <div class="post-card">
                    <h5>{{ $post->title }}</h5>
                    <p>{{ Str::limit($post->content, 100) }}</p>
                    <a href="/posts/{{ $post->id }}" class="btn-neumo mt-2">Ver más</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
