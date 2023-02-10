<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Book;

class PageController extends Controller
{

    public function index(){
        // logica qui

        // $books = Book::all(); // select * from 'books'

        // select * from 'books' where 'title' LIKE 'T%'
        // $books = Book::where('title', 'LIKE', 'T%')->get();

        // select * from 'books' where 'id' = 1
        // $book = Book::find(1);

        // $book = new Book();
        // $book->title = 'La Gerusalemme Liberata';
        // $book->author = 'Torquato Tasso';
        // $book->cover = "https://upload.wikimedia.org/wikipedia/commons/thumb/8/80/TassoGerusalem1724TP.jpg/220px-TassoGerusalem1724TP.jpg";
        // $book->save();
        $books = Book::all();

        return view('home', compact('books'));
    }
}
