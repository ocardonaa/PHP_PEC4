<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Videogame extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'developer', 'release_year', 'game_mode', 'platform', 'cover_image'];
    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'genre_videogame');
    }

}
