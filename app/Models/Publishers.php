<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publishers extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'image'
    ];

    // Satu publisher bisa memiliki beberapa buku yang diterbitkan

    public function books() {
        return $this -> hasMany(Books::class);
    }
}
