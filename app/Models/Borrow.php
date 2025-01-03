<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'reader_id',
        'book_id',
        'borrow_date',
        'return_date',
        'status'
    ];
    protected $dates = ['borrow_date', 'return_date'];

    public function reader()
    {
        return $this->belongsTo(Reader::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
    
}
