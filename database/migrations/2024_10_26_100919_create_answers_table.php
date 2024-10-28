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
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('question_id')->nullable()->index();
            $table->foreign('question_id', 'fk_question_id')->references('id')->on('questions')->onDelete('cascade');

            $table->string('answer_text_ar');
            $table->string('answer_text_en')->nullable();
            $table->boolean('is_correct')->default(false)->index(); // To mark the correct answer
            $table->timestamps();
            $table->softDeletes(); // Soft delete for notifications

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answers');
    }
};
