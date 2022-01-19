<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Mostra la risorsa
     */
    public function index()
    {
        # code...
    }

    /**
     * Crea risorsa
     */
    public function create()
    {
        # code...
    }

    /**
     * Salvo nel database la risorsa
     */
    public function store(Request $request)
    {
        # code...
    }

    /**
     * mostro la singola risorsa
     */
    public function show(Post $post)
    {
        # code...
    }

    /**
     * mostro form per modificare risorsa
     */
    public function edit(Post $post)
    {
        # code...
    }

    /**
     * salvo modifica risorsa
     */
    public function update(Request $request, Post $post)
    {
        # code...
    }

    /**
     * distruggo risorsa
     */
    public function destroy(Post $post)
    {
        # code...
    }
}
