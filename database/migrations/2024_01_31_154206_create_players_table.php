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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name', 15);
            $table->text('twitter')->nullable();
            $table->text('instagram')->nullable();
            $table->text('twitch')->nullable();
            $table->boolean('visible')->default(false);
            //Campo adicionales
            $table->string('position')->nullable(); //Delantero, defensa, etc
            $table->integer('jersey_number')->nullable(); //10, 2, etc
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
