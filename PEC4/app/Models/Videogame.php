<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Videogame extends Model
{
    protected $fillable = ['title', 'developer', 'release_year', 'game_mode', 'platform', 'cover_image'];
    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }

}
