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
        Schema::create('admins', function (Blueprint $table) {
        $table->id();
        $table->string('name')->index();
        $table->string('email');
        $table->string('phone')->nullable();
        $table->string('image')->nullable()->index();
//        $table->foreignId('category_id')->nullable()->index();
//        $table->foreign('category_id', 'fk_category_admins_id')->references('id')->on('categories')->onDelete('cascade');
        $table->string('password');
        $table->rememberToken();
        $table->timestamps();
        $table->softDeletes(); // Add soft deletes column
        $table->unique(['email', 'deleted_at']);

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');

    }
};
