<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'author', 'genre', 'price', 'description','created_at','updated_at'];

}
