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
        Schema::create('invitations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sender_id')->nullable()->index();
            $table->foreign('sender_id', 'fk_sender_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('receiver_id')->nullable()->index();
            $table->foreign('receiver_id', 'fk_receiver_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('challenge_id')->constrained('challenges');

            $table->enum('status', ['pending', 'accepted', 'declined'])->default('pending'); // Status column
            $table->timestamps();
            $table->softDeletes(); // Soft delete for notifications

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invitations');
    }
};
