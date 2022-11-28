<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Categories;
use Illuminate\Http\Request;

class BooksController extends Controller
{

    public function bookDetail($id) {
        $categories = Categories::all();
        $book = Books::all()->find($id);

        return view('book_detail',compact('book', 'categories'));
    }

    public function mainpage() {
        $categories = Categories::all();
        $books = Books::all();

        return view('homepage',compact('books', 'categories'));
    }
}
