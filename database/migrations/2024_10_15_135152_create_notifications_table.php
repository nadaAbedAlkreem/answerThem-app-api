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
            $table->foreignId('user_id') // Foreign key to users table
            ->constrained()
                ->onDelete('cascade'); // Cascade delete

            $table->string('type'); // Notification type (e.g., 'friend_request', 'message')
            $table->json('data'); // Additional data for the notification (JSON format)
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
