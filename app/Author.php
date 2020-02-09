<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'authors';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'created_at', 'updated_at'];

    public function books()
    {
        return $this->hasMany(Book::class, 'author_id', 'id');
    }

}
