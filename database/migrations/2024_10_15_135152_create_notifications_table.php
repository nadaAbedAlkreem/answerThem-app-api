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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id(); // Primary key auto-increment
            $table->unsignedBigInteger('sender_id')->nullable();
            $table->unsignedBigInteger('receiver_id')->nullable();
            $table->enum('type', ['friend_request', 'invitations_request', 'other'])->default('friend_request');
            $table->json('data'); // Additional data for the notification (JSON format)
            // You may also want to add foreign key constraints
            $table->foreign('sender_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('receiver_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamp('read_at')->nullable(); // Nullable read timestamp
            $table->timestamps(); // Created at and updated at timestamps
            $table->softDeletes(); // Soft delete for notifications
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
