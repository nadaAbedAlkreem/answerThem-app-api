<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = DB::table('questions')->get();

        foreach ($questions as $question) {
            $correctAnswer = rand(1, 4); // تحديد الإجابة الصحيحة بشكل عشوائي

            for ($i = 1; $i <= 4; $i++) {
                DB::table('answers')->insert([
                    'question_id' => $question->id,
                    'answer_text_ar' =>' ليونيل ميسي',
                    'answer_text_en' => 'Lionel Messi',
                    'is_correct' => $i === $correctAnswer, // تحديد الإجابة الصحيحة
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
