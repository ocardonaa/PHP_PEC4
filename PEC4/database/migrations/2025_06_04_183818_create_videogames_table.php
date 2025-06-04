<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('videogames', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('developer', 255)->default('Unknown developer');
            $table->year('release_year')->default(0);
            $table->enum('game_mode', ['un jugador', 'multijugador']);
            $table->enum('platform', ['PlayStation', 'Xbox', 'Nintendo Switch', 'PC', 'Arcade Machine']);
            $table->string('cover_image', 255)->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videogames');
    }
};

