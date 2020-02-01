<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'authors';
    protected $primaryKey = 'id';
    protected $fillable = ['name',];

    public function books()
    {
        return $this->hasMany(Book::class);
    }

}
