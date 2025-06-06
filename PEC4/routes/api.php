<?php

use App\Http\Controllers\ApiVideogame;

Route::get('/api/videogames/{page}', [ApiVideogame::class, 'allGames']);
Route::get('/api/videogame/{id}', [ApiVideogame::class, 'oneGame']);
Route::get('/api/genre/{id}/{page}', [ApiVideogame::class, 'gameByGenre']);