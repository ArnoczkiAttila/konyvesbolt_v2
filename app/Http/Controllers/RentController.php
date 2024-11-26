<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Rent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RentController extends Controller
{
    public function index(Request $request) {
        $books = DB::select("SELECT * FROM books WHERE id NOT IN (SELECT book_id FROM rents WHERE returned_at IS NULL) AND deleted_at IS NULL");
        return view('book.books',compact('books'));
    }
    public function kolcsonzes($id) {
        $book = Book::find($id);
        return view('rent.index',compact('book'));
    }

    public function rentBook(Request $request,$id) {
        $request->validate([
            'email'=>'required|max:255',
            'rented_at'=>'required|date'
        ]); 
        Rent::create([
            'email'=>$request->email,
            'book_id'=>$id,
            'rented_at'=>$request->rented_at
        ]);
        return redirect()->route('rent.back')->with('success','Sikeres mentés!');
    }
    public function backPage() {
        $rents = rent::where('returned_at','=',null)->get();
        return view('rent.back',compact('rents'));
    }
    public function backPagePost(Request $request) {
        $request->validate([
            'id'=>'required|exists:rents,id',
            'returned_at'=>'required|date'
        ]);
        $requestedRent = Rent::find($request->id);
        $requestedRent->returned_at = $request->returned_at;
        $requestedRent->save();
        return redirect()->route('rent.back')->with('success','Sikeres mentés!');
    }
}
