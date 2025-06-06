<?php

namespace App\Http\Controllers;
use App\Models\Videogame;
use App\Models\Genre;
use Illuminate\Support\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApiVideogame extends Controller
{
    protected function pagination($page, $videogames) {
        $perPage = 10;
        $last_page = ($page - 1) * $perPage;
        if ($last_page > $videogames->count() or $last_page < 0) {
            abort(404, 'Page not found');
        }
        else {
            $new_videogames = $videogames->slice($last_page, $perPage);
            if ($new_videogames->isEmpty()) {
                abort(404, 'No videogames for this page');
            }
            else {
                return response()->json($videogames->slice($last_page, $perPage));
            }
        }
    }

    public function allGames($page) {
        $videogames = Videogame::all();
        return $this->pagination($page, $videogames);
    }
    
    public function oneGame($id) {
        return response()->json(Videogame::findOrFail($id));
    }

    public function gameByGenre($id, $page) {
        $genre = Genre::findOrFail($id);
        $videogames = $genre->videogames;
        $videogames_correct_fields = new Collection();
        foreach ($videogames as $videogame) {
            $correct_fields = ['id' => $videogame->id, 'title' => $videogame->title, 'release_year' => $videogame->release_year];
            $videogames_correct_fields->push($correct_fields);
        }
        return $this->pagination($page, $videogames_correct_fields);
    }
}
