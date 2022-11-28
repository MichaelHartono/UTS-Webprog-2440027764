<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'category_id'
    ];


    // Satu kategori buku bisa memiliki beberapa buku

    public function book() {
        return $this->belongsTo(Book::class);
    }

    // Categories terdiri dari beberapa kategori buku

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
