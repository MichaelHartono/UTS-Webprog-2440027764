<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Publishers;
use Illuminate\Http\Request;

class PublishersController extends Controller
{
    public function publisherDetail($id) {
        $categories = Categories::all();
        $publisher = Publishers::all()->find($id);
        $books = $publisher->books;

        return view('publisher_detail', compact('categories', 'publisher', 'books'));
    }

    public function publisherList() {
        $categories = Categories::all();
        $publishers = Publishers::all();

        return view ('publishers', compact('categories', 'publishers'));
    }

}
