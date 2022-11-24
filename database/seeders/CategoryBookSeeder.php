<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = Book::all();
        $categories = Category::all();
        foreach($books as $book){

            $book->categories()->attach(
                $categories->pluck('id')->random(rand(1, 2))->toArray()
            );
        }
    }
}
