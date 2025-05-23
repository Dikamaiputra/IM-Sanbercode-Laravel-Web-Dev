<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $fillable = [
        'title',
        'summary',
        'image',
        'stock',
        'genre_id'

    ];

    public function genre()
{
    return $this->belongsTo(Genre::class);
}
}
