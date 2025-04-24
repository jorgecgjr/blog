@extends('layouts.app')

@section('title')
    Laravel 12
@endsection

@push('css')
    <style>
        body {
            background-color: blanchedalmond;
        }
    </style>
@endpush
    
@section('content')
    <x-alert type="danger" class="mb-4">
        <x-slot name="title" >
            Título de la alerta
        </x-slot>
        Contenido de la alerta
    </x-alert>
    <h1>Bienvenido a la página principal</h1>
@endsection
    
