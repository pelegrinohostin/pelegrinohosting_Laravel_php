<?php
// routes/web.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; // importar el controlador PostController para usarlo en las rutas


// Ruta de bienvenida (página principal)
Route::get('/', function () {
    return view('welcome');
});

// Rutas RESTful para posts (CRUD completo)
Route::resource('posts', PostController::class);

