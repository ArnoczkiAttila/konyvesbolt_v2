<?php

namespace App\Http\Controllers;

use App\Models\genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index() {
        return view('genre.index');
    }
    public function createGenre(Request $request) {
        $request->validate([
            'name'=>'required|max:255'
        ]);
        $new_genre = genre::create([
            'name'=>$request->name
        ]);
        if (!$new_genre) {
            return redirect()->route('genre.index')->withErrors('Sikertelen mentés!');
        }
        return redirect()->route('genre.index')->with('Sikeres művelet!');
    }
}
