<?php

use App\Models\Genre;
use App\Models\Videogame;

$adventure = Genre::create(['name' => 'Adventure']);
$sandbox = Genre::create(['name' => 'Sandbox']);
$racing = Genre::create(['name' => 'Racing']);
$arcade = Genre::create(['name' => 'Arcade']);
$fps = Genre::create(['name' => 'FPS']);
$puzzle = Genre::create(['name' => 'Puzzle']);
$moba = Genre::create(['name' => 'MOBA']);
$terror = Genre::create(['name' => 'Terror']);
$fighting = Genre::create(['name' => 'Fighting']);
$roguelike = Genre::create(['name' => 'Roguelike']);

$videogame1 = Videogame::create(['title' => 'Minecraft','developer' => 'Mojang','release_year' => 2009,'game_mode' => 'un jugador','platform' => 'PC','cover_image' => 'covers/1minecraft.png',]);
$videogame2 = Videogame::create(['title' => 'PacMan','developer' => 'Toru Iwatani','release_year' => 1980,'game_mode' => 'un jugador','platform' => 'Arcade Machine','cover_image' => 'covers/2pacman.webp',]);
$videogame3 = Videogame::create(['title' => 'GTA V','developer' => 'Rockstar','release_year' => 2013,'game_mode' => 'multijugador','platform' => 'PlayStation','cover_image' => 'covers/3gta.webp',]);
$videogame4 = Videogame::create(['title' => 'League of Legends','developer' => 'Riot Games','release_year' => 2009,'game_mode' => 'multijugador','platform' => 'PC','cover_image' => 'covers/4lol.webp',]);
$videogame5 = Videogame::create(['title' => 'Silent Hill','developer' => 'Konami','release_year' => 1999,'game_mode' => 'un jugador','platform' => 'PC','cover_image' => 'covers/5sh1.webp',]);
$videogame6 = Videogame::create(['title' => 'CSGO','developer' => 'Valve','release_year' => 2012,'game_mode' => 'multijugador','platform' => 'PC','cover_image' => 'covers/6csgo.webp',]);
$videogame7 = Videogame::create(['title' => 'Tetris','developer' => 'Alexey Pajitnov','release_year' => 1989,'game_mode' => 'un jugador','platform' => 'Arcade Machine','cover_image' => 'covers/7tetris.webp',]);
$videogame8 = Videogame::create(['title' => 'Need for Speed','developer' => 'Electronic Arts','release_year' => 1994,'game_mode' => 'multijugador','platform' => 'Xbox','cover_image' => 'covers/8nfs.webp',]);
$videogame9 = Videogame::create(['title' => 'Mortal Kombat','developer' => 'Ed Boon','release_year' => 1992,'game_mode' => 'multijugador','platform' => 'PC','cover_image' => 'covers/9mortalk.webp',]);
$videogame10 = Videogame::create(['title' => 'Nuclear Throne','developer' => 'Vlambeer','release_year' => 2015,'game_mode' => 'un jugador','platform' => 'PC','cover_image' => 'covers/10nt.webp',]);

$videogame1->genres()->attach([$adventure->id, $sandbox->id]);
$videogame2->genres()->attach([$arcade->id]);
$videogame3->genres()->attach([$adventure->id, $sandbox->id, $fps->id]);
$videogame4->genres()->attach([$moba->id]);
$videogame5->genres()->attach([$terror->id, $adventure->id]);
$videogame6->genres()->attach([$fps->id]);
$videogame7->genres()->attach([$arcade->id, $puzzle->id]);
$videogame8->genres()->attach([$racing->id]);
$videogame9->genres()->attach([$fighting->id]);
$videogame10->genres()->attach([$roguelike->id]);