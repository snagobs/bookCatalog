<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Book extends Model
{
    use Sortable;

    protected $table = 'books';
    protected $primaryKey = 'id';

    protected $fillable = ['title', 'price', 'description','created_at','updated_at'];
    public $sortable = ['id', 'author_id', 'genre_id', 'title', 'price', 'description','created_at','updated_at'];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
