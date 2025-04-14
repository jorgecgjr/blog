<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return "Aquí se mostrarán todos los controladores";
    }

    public function create()
    {
        return "Aquí se creará un nuevo formulario para los posts";
    }

    public function show($post)
    {
        return "Aquí se mostrará el formulario $post";
    }
}
