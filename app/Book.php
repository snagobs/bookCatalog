<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Book extends Model
{
    use Sortable;

    protected $table = 'books';
    protected $primaryKey = 'id';

    protected $fillable = ['title', 'author', 'genre', 'price', 'description','created_at','updated_at'];
    public $sortable = ['id', 'author', 'genre', 'title', 'price', 'description','created_at','updated_at'];

}
