<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sportsCategoryId = DB::table('categories')->insertGetId([
            'name_ar' => 'ألعاب رياضية',
            'name_en' => 'Sports Games',
            'description_ar' => 'فئة الألعاب الرياضية.',
            'description_en' => 'Category for sports games.',
            'rating' => 4.5,
            'image' => 'https://linktest.gastwerk-bern.ch/storage/uploads/images/categories/Basketball.png', // Specify an actual path or URL
            'parent_id' => 0, // No parent for primary category
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Insert subcategories for Sports Games
        DB::table('categories')->insert([
            [
                'name_ar' => 'كرة القدم',
                'name_en' => 'Football',
                'description_ar' => 'لعبة كرة القدم.',
                'description_en' => 'Football game.',
                'rating' => 4.8,
                'image' => 'https://linktest.gastwerk-bern.ch/storage/uploads/images/categories/Football.png',
                'parent_id' => $sportsCategoryId, // Link to Sports Games
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_ar' => 'كرة السلة',
                'name_en' => 'Basketball',
                'description_ar' => 'لعبة كرة السلة.',
                'description_en' => 'Basketball game.',
                'rating' => 4.7,
                'image' => 'https://linktest.gastwerk-bern.ch/storage/uploads/images/categories/game.png',
                'parent_id' => $sportsCategoryId, // Link to Sports Games
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_ar' => 'تنس',
                'name_en' => 'Tennis',
                'description_ar' => 'لعبة التنس.',
                'description_en' => 'Tennis game.',
                'rating' => 4.6,
                'image' => 'https://linktest.gastwerk-bern.ch/storage/uploads/images/categories/game.png',
                'parent_id' => $sportsCategoryId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_ar' => 'كريكيت',
                'name_en' => 'Cricket',
                'description_ar' => 'لعبة الكريكيت.',
                'description_en' => 'Cricket game.',
                'rating' => 4.5,
                'image' => 'https://linktest.gastwerk-bern.ch/storage/uploads/images/categories/Football.png',
                'parent_id' => $sportsCategoryId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_ar' => 'سباحة',
                'name_en' => 'Swimming',
                'description_ar' => 'لعبة السباحة.',
                'description_en' => 'Swimming game.',
                'rating' => 4.4,
                'image' => 'https://linktest.gastwerk-bern.ch/storage/uploads/images/categories/Football.png',
                'parent_id' => $sportsCategoryId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_ar' => 'هوكي',
                'name_en' => 'Hockey',
                'description_ar' => 'لعبة الهوكي.',
                'description_en' => 'Hockey game.',
                'rating' => 4.3,
                'image' => 'https://linktest.gastwerk-bern.ch/storage/uploads/images/categories/Football.png',
                'parent_id' => $sportsCategoryId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_ar' => 'كرة الطائرة',
                'name_en' => 'Volleyball',
                'description_ar' => 'لعبة كرة الطائرة.',
                'description_en' => 'Volleyball game.',
                'rating' => 4.2,
                'image' =>'https://linktest.gastwerk-bern.ch/storage/uploads/images/categories/Football.png',
                'parent_id' => $sportsCategoryId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_ar' => 'بيسبول',
                'name_en' => 'Baseball',
                'description_ar' => 'لعبة البيسبول.',
                'description_en' => 'Baseball game.',
                'rating' => 4.1,
                'image' => 'https://linktest.gastwerk-bern.ch/storage/uploads/images/categories/Football.png',
                'parent_id' => $sportsCategoryId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name_ar' => 'ملاكمة',
                'name_en' => 'Boxing',
                'description_ar' => 'لعبة الملاكمة.',
                'description_en' => 'Boxing game.',
                'rating' => 4.0,
                'image' =>'https://linktest.gastwerk-bern.ch/storage/uploads/images/categories/Football.png',
                'parent_id' => $sportsCategoryId,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            ]);
    }
}
