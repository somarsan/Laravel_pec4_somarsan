@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto mt-4">
  <div>
    <h1 class="text-lg font-semibold py-2">{{ $noticia->titulo }}</h1>

    <img src="{{ $noticia->imagen }}" alt="Imagen de la noticia" width="400">
    <br>
    Fecha de publicación: {{ $noticia->fecha_publicacion }}
    <br>
    Autor: {{ $noticia->autor }}
    <br>
    Contenido:
    <p>{{ $noticia->contenido }}</p>
  </div>
</div>

@endsection
