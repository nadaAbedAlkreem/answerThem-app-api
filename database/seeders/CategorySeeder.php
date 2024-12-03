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
    public function run()
    {
        // Level 1 (Parent Categories)
        $parentCategories = [
            [
                'name_ar' => 'كرة القدم',
                'name_en' => 'Football',
                'description_ar' => 'القسم الخاص بكرة القدم',
                'description_en' => 'Category for football',
                'rating' => 4.5,
                'image' => 'https://linktest.gastwerk-bern.ch/storage/uploads/images/categories/Capa_1.png',
                'parent_id' => 0,
                'level' => 1,
                'color'=> '#03BOFA' ,

                'famous_gaming' => 0,
            ],

        [
                'name_ar' => 'السباحة',
                'name_en' => 'Swimming',
                'description_ar' => 'القسم الخاص بالسباحة',
                'description_en' => 'Category for swimming',
                'rating' => 4.2,
                'image' => 'https://linktest.gastwerk-bern.ch/storage/uploads/images/categories/Frame_(1).png',
                'parent_id' => 0,
                'level' => 1,
                'color'=> '#815CA3' ,

                'famous_gaming' => 0,

            ],

        [
                'name_ar' => 'كرة السلة',
                'name_en' => 'Basketball',
                'description_ar' => 'القسم الخاص بكرة السلة',
                'description_en' => 'Category for basketball',
                'rating' => 4.3,
                'image' => 'https://linktest.gastwerk-bern.ch/storage/uploads/images/categories/Layer_1.png',
                'parent_id' => 0,
                'level' => 1,
                'color' => '#B86BFF',
                'famous_gaming' => 0,
            ],
        ];


        foreach ($parentCategories as $category) {
            $parentId = DB::table('categories')->insertGetId($category);

            // Level 2 (Child Categories of Parent)
            $childCategories = [
                [
                    'name_ar' => 'دوري أبطال أوروبا',
                    'name_en' => 'Champions League',
                    'description_ar' => 'مسابقات دوري الأبطال',
                    'description_en' => 'Champions League competitions',
                    'rating' => 4.8,
                    'image' => 'https://linktest.gastwerk-bern.ch/storage/uploads/images/categories/Basketball.png',
                    'parent_id' => $parentId,
                    'level' => 2,
                    'color' =>'#815CA3' ,
                    'famous_gaming' => 0,
                ],

            [
                    'name_ar' => 'كأس العالم',
                    'name_en' => 'World Cup',
                    'description_ar' => 'بطولة كأس العالم',
                    'description_en' => 'World Cup Championship',
                    'rating' => 4.9,
                    'image' => 'https://linktest.gastwerk-bern.ch/storage/uploads/images/categories/Football.png',
                    'parent_id' => $parentId,
                    'level' => 2,
                    'color' => '#03BOFA' ,

                    'famous_gaming' => 0,
                ],
                [
                    'name_ar' => 'الدوري المحلي',
                    'name_en' => 'Local League',
                    'description_ar' => 'المسابقات المحلية',
                    'description_en' => 'Local competitions',
                    'rating' => 4.4,
                    'image' => 'https://linktest.gastwerk-bern.ch/storage/uploads/images/categories/SVGRepo_iconCarrier.png',
                    'parent_id' => $parentId,
                    'level' => 2,
                    'color' => '#815CA3' ,
                    'famous_gaming' => 0,

                ],
            ];
        }

            foreach ($childCategories as $subCategory) {
                $subParentId = DB::table('categories')->insertGetId($subCategory);

                // Level 3 (Subcategories of Subcategory)
                $thirdLevelCategories = [
                    [
                        'name_ar' => 'التاريخ والإنجازات',
                        'name_en' => 'History and Achievements',
                        'description_ar' => 'كل ما يخص التاريخ والإنجازات',
                        'description_en' => 'All about history and achievements',
                        'rating' => 4.7,//Frame (3).png
                        'image' => 'https://linktest.gastwerk-bern.ch/storage/uploads/images/categories/Frame (3).png',
                        'parent_id' => $subParentId,
                        'level' => 3,
                        'famous_gaming' => 1,
                        'color' => '#03BOFA'
                    ],

                    [
                        'name_ar' => 'الإحصائيات',
                        'name_en' => 'Statistics',
                        'description_ar' => 'إحصائيات المباريات والفرق',
                        'description_en' => 'Match and team statistics',
                        'rating' => 4.6,
                        'image' => 'https://linktest.gastwerk-bern.ch/storage/uploads/images/categories/Frame (2).png',
                        'parent_id' => $subParentId,
                        'level' => 3,
                        'famous_gaming' => 1,
                        'color' => '#B86BFF'
                    ],

                    [
                        'name_ar' => 'أفضل اللاعبين',
                        'name_en' => 'Top Players',
                        'description_ar' => 'معلومات عن أفضل اللاعبين',
                        'description_en' => 'Details about top players',
                        'rating' => 4.9,
                        'image' => 'https://linktest.gastwerk-bern.ch/storage/uploads/images/categories/Frame (2).png',
                        'parent_id' => $subParentId,
                        'level' => 3,
                        'color'=>'#03BOFA' ,
                        'famous_gaming' => 1,
                    ],
                ];
            }
                DB::table('categories')->insert($thirdLevelCategories);


    }
}
