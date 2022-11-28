<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function bookCategory($id) {
        $categories = Categories::all();
        $category = $categories->find($id);
        $books = Books::query()->join('book_categories', 'book_categories.book_id', 'books.id')-> join (
            'categories', 'categories.id', 'book_categories.category_id'
        )-> where('category_id','=',"{$id}")-> get();

        return view('book_categories', compact('books','categories', 'category'));
    }
}
