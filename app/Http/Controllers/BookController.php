<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\genre;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        $genres = genre::all();
        return view('book.index',compact('genres'));
    }
    public function createBook(Request $request) {
        $request->validate([
            'name'=>'required|max:255',
            'author'=>'required|max:255',
            'genre_id'=>'required|exists:genres,id',
            'published_at'=>'required|max:4'
        ]);
        $new_book = Book::create([
            'name'=>$request->name,
            'author'=>$request->author,
            'genre_id'=>$request->genre_id,
            'published_at'=>$request->published_at
        ]);
        if (!$new_book) {
            return redirect()->route('book.index')->withErrors('Sikertelen mentés!');
        }
        return redirect()->route('book.index')->with('Sikeres művelet!');
    }
    public function deleteBook(Request $request){
        Book::destroy($request->id);
        return redirect()->route('book.books')->with('Sikeres törlés');
    }
}
