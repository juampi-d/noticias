<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $noticias = Noticia::all();
        return view('backend.noticias.index', compact('noticias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(noticia $noticia)
    {
        $noticia->autor = $noticia->autor()->first();
        return view('backend.noticias.show', compact('noticia'));
        //return $noticia->autor->name;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(noticia $noticia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, noticia $noticia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(noticia $noticia)
    {
        //
    }
}
