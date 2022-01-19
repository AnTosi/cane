<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function home()
    {
        $comics = Comic::all();
        return view('comics.home', compact('comics'));
    }

    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }
}
