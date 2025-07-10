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
        Schema::create('teams_teams', function (Blueprint $table) {
            $table->foreignId('team2_id')->constrained('teams')->cascadeOnDelete();
            $table->foreignId('team1_id')->constrained('teams')->cascadeOnDelete();
            $table->primary(['team2_id', 'team1_id']);
//            $table->integer('team1-goals')->default(0);
//            $table->integer('team2-goals')->default(0);
//            $table->integer('week')->default(0);
//            $table->string('winner')->nullable();
//            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams_teams');
    }
};
