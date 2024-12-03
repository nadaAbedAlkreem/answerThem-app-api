<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $categories = DB::table('categories')->where('level', 3)->get();

        foreach ($categories as $category) {
            for ($i = 1; $i <= 25; $i++) {
                DB::table('questions')->insert([
                    'category_id' => $category->id,
                    'image' => 'https://linktest.gastwerk-bern.ch/storage/uploads/images/categories/Capa_1.png',
                    'question_ar_text' => 'من هو اللاعب الذي فاز بأكبر عدد من الكرات الذهبية؟',
                    'question_en_text' => 'Who is the player with the most Ballon d’Or awards?',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
