<!DOCTYPE html>
<html>
<head>
    
    <title>Blog con Larabel Rata Audaz</title>
</head>
<body>
    <h1>Lista de Posts</h1>
    <ul>
        @foreach ($posts as $post)
        <li>
            <a href="/posts/{{ $post->id }}">
                {{ $post->title }}
            </a>
        </li>
        @endforeach
    </ul>
    
</body>
</html>