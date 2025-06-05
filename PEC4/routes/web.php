<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Videogame;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    $videogames = Videogame::all();
    $videogames_chosen = new Collection();
    $videogames_chosen->push(Videogame::first());
    $videogames_chosen->push(Videogame::find(2));
    $numbers = range(3, 50);
    $randomNumbers = Arr::random($numbers, 3);
    foreach($randomNumbers as $randNum) {
        $videogames_chosen->push(Videogame::find($randNum));
    }
    return view('home', [
        'videogames' => $videogames_chosen
    ]);
});

Route::get('home/{videogame}', function ($id) {
    return view('videogame', [
        'videogame' => Videogame::findOrFail($id)
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
