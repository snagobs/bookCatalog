<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $primaryKey = 'id';
    protected $attributes = [
        'available' => false,
    ];

    protected $fillable = ['title', 'price, USD', 'description',];
    protected $guarded = ['available',];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
