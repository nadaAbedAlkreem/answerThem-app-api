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
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id();
             $table->foreignId('sender_id')
                ->constrained('users')
                ->onDelete('cascade') // Cascade delete
                ->onUpdate('cascade');// Cascade update
            $table->string('title')->index() ;
            $table->text('description');
            $table->enum('status',['important' , 'middle' , 'not_important'])->default('important')->index() ;
            $table->timestamps();
            $table->softDeletes(); // Soft delete for notifications

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_us');
    }
};
