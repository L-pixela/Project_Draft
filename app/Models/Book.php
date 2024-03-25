<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Borrower;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'author',
        'description',
        'publishDate'
    ];

    public function borrowers(){
        return $this->hasMany(Borrower::class, 'book_id', 'id');
    }

}
