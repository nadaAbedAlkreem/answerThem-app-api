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
            $table->string('name_game');

            $table->foreignId('team_member1_id')->nullable()->index();
            $table->foreign('team_member1_id', 'fk_team_member1_id')->references('id')->on('team_members')->onDelete('cascade');

            $table->foreignId('team_member2_id')->nullable()->index();
            $table->foreign('team_member2_id', 'fk_team_member2_id')->references('id')->on('team_members')->onDelete('cascade');

            // User foreign keys with unique constraint names
            $table->foreignId('user1_id')->nullable()->index();
            $table->foreign('user1_id', 'fk_user1_id')->references('id')->on('users')->onDelete('cascade');

            $table->foreignId('user2_id')->nullable()->index();
            $table->foreign('user2_id', 'fk_user2_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('category_id')->index()->constrained('categories')->onDelete('cascade');


            $table->integer('number_of_questions')->default(25);
            $table->integer('time_per_question')->default(1); // seconds
            $table->enum('status', ['ongoing', 'pending', 'end'])->default('pending'); // Status column

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
