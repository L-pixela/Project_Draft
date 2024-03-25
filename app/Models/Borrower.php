<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Borrower extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'gender',
        'contact',
        'book_id',
        'return_date'
    ];

    public function books()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }
}
