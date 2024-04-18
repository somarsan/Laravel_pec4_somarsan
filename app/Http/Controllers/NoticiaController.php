<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class NoticiaController extends Controller
{
    public function index()
    {
        $noticias = Noticia::orderBy('id')->take(5)->get();

        return view('noticias.index', compact('noticias'));
    }

    public function show($id)
    {
        $noticia = Noticia::findOrFail($id);

        return view('noticias.show', compact('noticia'));
    }

    public function apiIndex(Request $request)
    {
        $perPage = 10;
        $page = $request->query('page', 1);
        $offset = ($page - 1) * $perPage;

        $noticias = Noticia::select('id', 'titulo', 'fecha_publicacion')
            ->orderBy('id', 'asc')
            ->offset($offset)
            ->limit($perPage)
            ->get();

        return response()->json($noticias);
    }

    public function apiShow($id)
    {
        $noticia = Noticia::findOrFail($id);

        return response()->json($noticia);
    }
}
