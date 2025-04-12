<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/prueba', function () {
    return "Esta es una ruta de pruebas";
});

Route::get('/{variable}/{categoria?}', function ($variable, $categoria = null){

    if ($categoria)
    {
        return "Estamos en la ruta $variable de categoria: $categoria";
    }
    return "Estamos en la ruta $variable sin categoria";
});

Route::get('/{variable}', function ($variable){
    return "Estamos en la ruta $variable";
});


