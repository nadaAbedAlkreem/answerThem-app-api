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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name_ar')->unique()->index();
            $table->string('name_en')->nullable()->unique()->index();
            $table->text('description_ar')->nullable();
            $table->text('description_en')->nullable();
            $table->decimal('rating' ,4, 2)->default(0.00);
            $table->string('image');
            $table->bigInteger('parent_id')->default(0);
            $table->tinyInteger('famous_gaming')->default(0);


            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
