<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index(){
        $publishers = Publisher::all();

        return view("publisher")->with(
            [
                "publishers" => $publishers,
                "categories" => Category::all()
            ]
        );
    }

    public function detail($id){
        $publisher = Publisher::find($id);

        return view("publisher-detail")->with(
            [
                "publisher" => $publisher,
                "categories" => Category::all()
            ]
        );

    }
}
