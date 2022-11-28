<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    // Database kategori bisa memiliki beberapa kategori buku

    public function book_categories() {
        return $this->hasMany(BookCategory::class);
    }
}
