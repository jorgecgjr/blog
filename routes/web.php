<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', HomeController::class);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{post}', [PostController::class, 'show']);



/*Route::get('/{variable}/{categoria?}', function ($variable, $categoria = null){

    if ($categoria)
    {
        return "Estamos en la ruta $variable de categoria: $categoria";
    }
    return "Estamos en la ruta $variable sin categoria";
});

Route::get('/{variable}', function ($variable){
    return "Estamos en la ruta $variable";
});*/


