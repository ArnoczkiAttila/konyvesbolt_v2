<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class genre extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        "name"
    ];
    public function books() {
        return $this->hasMany(Book::class);
    }
}
