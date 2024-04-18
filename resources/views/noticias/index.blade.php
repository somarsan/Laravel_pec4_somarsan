@extends('layouts.app')

@section('content')
  <h1 class="font-semibold text-xl text-center text-gray-900 dark:text-gray-200 leading-tight py-4">Noticias:</h1>
    <div class="flex justify-center items-center">
      <ul class="grid grid-cols-2 gap-6 mt-6 mb-6">
          @foreach ($noticias as $noticia)
              <li>
                  <img src="{{ $noticia->imagen }}" alt="Imagen de la noticia" width="300">
                  <br>
                  <a href="{{ route('noticia.show', $noticia->id) }}" class="text-lg font-semibold">{{ $noticia->titulo }}</a>
                  <br>
                  Fecha de publicación: {{ $noticia->fecha_publicacion }}
              </li>
          @endforeach
      </ul>
    </div>

@endsection

