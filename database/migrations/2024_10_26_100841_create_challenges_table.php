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
        Schema::create('challenges', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team1_id')->nullable()->constrained('teams')->onDelete('cascade'); // Nullable for one-on-one
            $table->foreignId('team2_id')->nullable()->constrained('teams')->onDelete('cascade'); // Nullable for one-on-one
            $table->foreignId('user1_id')->nullable()->constrained('users')->onDelete('cascade'); // For individual competitors
            $table->foreignId('user2_id')->nullable()->constrained('users')->onDelete('cascade'); // For individual competitors
            $table->integer('number_of_questions')->default(25);
            $table->integer('time_per_question')->default(30); // seconds
            $table->timestamps();
            $table->softDeletes(); // Soft delete for notifications
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('challenges');
    }
};
