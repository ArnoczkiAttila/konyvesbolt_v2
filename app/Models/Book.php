<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        "name",
        "author",
        "genre_id",
        "published_at"
    ];
    public function genre() {
        return $this->belongsTo(genre::class);
    }
    public function rents() {
        return $this->hasMany(Rent::class);
    }
}
