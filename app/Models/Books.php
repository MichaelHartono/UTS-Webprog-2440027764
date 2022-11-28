<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $fillable = [
        'publisher_id',
        'title',
        'author',
        'year',
        'synopsis',
        'image'
    ];

    // Satu buku bisa memiliki beberapa kategori

    public function book_categories() {
        return $this->hasMany(BookCategory::class);
    }


    // Satu buku hanya memiliki 1 publisher

    public function publisher() {
        return $this->belongsTo(Publisher::class);
    }
}
