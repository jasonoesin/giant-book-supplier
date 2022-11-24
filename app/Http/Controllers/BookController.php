<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index(){
        $books = Book::all();

        return view("home")->with(
            [
                "books" => $books,
                "categories" => Category::all()
            ]
        );

    }


    public function detail($id){
        $book = Book::find($id);

        return view("book")->with(
            [
                "book" => $book,
                "categories" => Category::all()
            ]
        );
    }
}
