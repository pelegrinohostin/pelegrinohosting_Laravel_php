<?php

namespace App\Http\Controllers;
// Este namespace asegura que la clase esté dentro de App\Http\Controllers
// y pueda extender de la clase base Controller definida en Controller.php.

use Illuminate\Http\Request; 
// Para manejar datos enviados por formularios (inputs, POST, etc.).

use App\Models\Post; 
// Para interactuar con la tabla 'posts' en la base de datos.

class PostController extends Controller
// Extiende de la clase base Controller (app/Http/Controllers/Controller.php).
{
    // Mostrar todos los posts
    public function index()
    {
        // Obtiene todos los registros de la tabla 'posts'
        $posts = Post::all();

        // Retorna la vista 'resources/views/posts/index.blade.php' con los datos
        return view('posts.index', compact('posts'));
    }

    // Mostrar un post específico por su ID
    public function show($id)
    {
        // Busca el post por ID o lanza error 404 si no existe
        $post = Post::findOrFail($id);

        // Retorna la vista 'resources/views/posts/show.blade.php' con el post
        return view('posts.show', compact('post'));
    }

    // Mostrar el formulario para crear un nuevo post
    public function create()
    {
        // Retorna la vista 'resources/views/posts/create.blade.php'
        return view('posts.create');
    }

    // Guardar un nuevo post en la base de datos
    public function store(Request $request)
    {
        // Valida los campos enviados desde el formulario
        $request->validate([
            'title'   => 'required|max:255', // El título es obligatorio y máximo 255 caracteres
            'content' => 'required',         // El contenido es obligatorio
        ]);

        // Crea un nuevo registro en la tabla 'posts'
        Post::create($request->only(['title', 'content']));

        // Redirige a la lista de posts con un mensaje flash de éxito
        return redirect('/posts')->with('success', 'Post creado exitosamente');
    }
}
