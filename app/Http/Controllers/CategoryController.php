<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index($name){
        $category = Category::where('name', 'like' ,$name)->first();

        return view("category")->with(
            [
                "categories" => Category::all(),
                'category' => $category
            ]
        );
    }

}
