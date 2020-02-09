<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genres';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'created_at','updated_at'];

    public function books()
    {
        return $this->hasMany(Book::class, 'genre_id', 'id');
    }

}
