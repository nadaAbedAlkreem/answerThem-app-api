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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
             $table->foreignId('category_id')->index();
            $table->foreign('category_id', 'fk_category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('image');
            $table->string('question_ar_text');
            $table->string('question_en_text');
            $table->timestamps();
            $table->softDeletes(); // Soft delete for notifications
            $table->unique(['question_ar_text', 'deleted_at']);
            $table->unique(['question_en_text', 'deleted_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
