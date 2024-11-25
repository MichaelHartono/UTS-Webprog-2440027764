<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PublishersController;
use App\Models\Categories;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [BooksController::class, 'mainpage']);

Route::get('/book/{id}', [BooksController::class, 'bookDetail']);

Route::get('/category/{id}', [CategoriesController::class, 'bookCategory']);

Route::get('/publishers', [PublishersController::class, 'publisherList']);

Route::get('/publishers/{id}', [PublishersController::class, 'publisherDetail']);

Route::get('/contact', function () {
    $categories = Categories::all();
    return view('contact', compact('categories'));
});
