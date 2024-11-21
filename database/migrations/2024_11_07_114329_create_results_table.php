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
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('challenge_id')->nullable()->index();
            $table->foreign('challenge_id', 'fk1_challenge_id')->references('id')->on('challenges')->onDelete('cascade');
            $table->foreignId('first_competitor_id')->nullable()->index();
            $table->foreign('first_competitor_id', 'fk_first_competitor_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('second_competitor_id')->nullable()->index();
            $table->foreign('second_competitor_id', 'fk_second_competitor_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('winner_id')->nullable()->index();
            $table->foreign('winner_id', 'fk_winner_id')->references('id')->on('users')->onDelete('cascade');
            $table->boolean('is_tie')->default(false);
            $table->integer('score_FC')->nullable();
            $table->integer('score_SC')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('results');
    }
};
