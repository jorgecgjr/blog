<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="max-w-4xl mx-auto px-4">
        <x-alert1 type="danger" class="mb-4">
            <x-slot name="title" >
                Título de la alerta
            </x-slot>
            Contenido de la alerta
        </x-alert1>
        <h1>Bienvenido a la página principal</h1>
    </div>
</body>
</html>