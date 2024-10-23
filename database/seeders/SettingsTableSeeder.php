<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('settings')->insert([
            // Arabic app name
            [
                'key' => 'app_name_ar',
                'value' => 'جاوبهم', // Replace with the Arabic name of your app
                'description' => 'اسم التطبيق باللغة العربية',
                'base_term' => 'app_name',
                'lang' => 'ar',
                'type' => 'string',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // English app name
            [
                'key' => 'app_name_en',
                'value' => 'Application Name', // Replace with the English name of your app
                'description' => 'The name of the application in English',
                'base_term' => 'app_name',
                'lang' => 'en',
                'type' => 'string',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // App logo
            [
                'key' => 'app_logo',
                'value' => 'https://linktest.gastwerk-bern.ch/storage/uploads/images/settings/app_logo1730468704.jpeg', // Replace with actual path to your logo
                'description' => 'Logo of the application',
                'base_term' => 'app_logo',
                'lang' => 'en', // or 'ar' depending on your logic
                'type' => 'image',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Welcome interface
            [
                'key' => 'app_welcome_interface_ar',
                'value' => json_encode(
                   [
                    [
                    'image' => 'https://linktest.gastwerk-bern.ch/storage/uploads/images/settings/app_welcome_interface_ar1732589803.jpeg' ,// Replace with actual image path
                    'title' => 'مرحبا بك في تحدي الأصدقاء!',
                    'body' =>'استعد لقضاء وقت ممتع مع أصدقائك في لعبة التحدي الجديدة ستتنافسون للإجابة',
                    ],
                    [
                        'image' => 'https://linktest.gastwerk-bern.ch/storage/uploads/images/settings/app_welcome_interface_ar1735821442.jpeg' ,// Replace with actual image path
                        'title' => 'لماذا جاوبهم؟',
                        'body' =>'توفر لكم واجهتم تجربة إدارية متكاملة لمساعدتكم في ترتيب العمل.',
                    ],
                    [
                    'image' => 'https://linktest.gastwerk-bern.ch/storage/uploads/images/settings/app_welcome_interface_ar1732826932.jpeg' ,// Replace with actual image path
                    'title' => 'لماذا جاوبهم؟',
                    'body' =>'توفر لكم واجهتم تجربة إدارية متكاملة لمساعدتكم في ترتيب العمل.',
                    ]
                   ]

                ),
                'description' => 'Welcome interface settings',
                'base_term' => 'app_welcome_interface',
                'lang' => 'ar', // You can choose a default language here
                'type' => 'json',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'key' => 'app_welcome_interface_en',
                'value' => json_encode([
                    'image' => 'path/to/image.jpg', // Replace with actual image path
                    'title' => 'Welcome to the App' ,
                    'body' => 'This is the welcome message for the app.' // English body
                ]),
                'description' => 'Welcome interface settings',
                'base_term' => 'app_welcome_interface',
                'lang' => 'en', // You can choose a default language here
                'type' => 'json',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Additional multilingual entries as per your requirement
            [
                'key' => 'app_country_ar',
                'value' => json_encode(
                  [
                    [
                    'name' => 'Egypt',
                    'flag' => 'EG',
                    'code' => '+20',
                    ]
                    ,
                    [
                        'name' => 'Kuwait',
                        'flag' => 'KW',
                        'code' => '+965',
                    ]
                    ,
                    [
                        'UAE' => 'Saudi Arabia',
                        'flag' => 'SA',
                        'code' => '+966',
                    ]
                    ,
                    [
                        'name' => 'UAE',
                        'flag' => 'AE',
                        'code' => '+971',
                    ]
                    ,
                    [
                        'name' => 'Palestine',
                        'flag' => 'PS',
                        'code' => '+970',
                    ]
                  ]


                ),
                'description' => 'Country information',
                'base_term' => 'app_country',
                'lang' => 'ar', // You can choose a default language here
                'type' => 'json',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'app_country_en',
                'value' => json_encode([
                    'title' => 'United States', // English country title
                    'image' => 'path/to/flag.png', // Replace with actual image path
                ]),
                'description' => 'Country information',
                'base_term' => 'app_country',
                'lang' => 'en', // You can choose a default language here
                'type' => 'json',
                'created_at' => now(),
                'updated_at' => now(),
            ],



            [
                'key' => 'app_privacy_policy_ar',
                'value' => json_encode([
                        [
                        'title' => 'سياسة الخصوصية',
                        'body' => 'هذه هي سياسة الخصوصية للتطبيق.',
                        ]
                         ,
                        [
                            'title' => 'سياسة الخصوصية',
                            'body' => 'هذه هي سياسة الخصوصية للتطبيق.',
                        ]
                        ,
                        [
                          'title' => 'سياسة الخصوصية',
                          'body' => 'هذه هي سياسة الخصوصية للتطبيق.',
                        ]
                         ,
                        [
                          'title' => 'سياسة الخصوصية',
                          'body' => 'هذه هي سياسة الخصوصية للتطبيق.',
                        ]





                  ]),
                'description' => 'Privacy policy',
                'base_term' => 'app_privacy_policy',
                'lang' => 'ar', // You can choose a default language here
                'type' => 'json',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'key' => 'app_privacy_policy_en',
                'value' => json_encode([
                       [
                           'title' =>  'Privacy Policy',
                           'body' => 'This is the privacy policy of the application.',
                       ],
                       [
                           'title' =>  'Privacy Policy',
                           'body' => 'This is the privacy policy of the application.',
                       ],
                       [
                           'title' =>  'Privacy Policy',
                           'body' => 'This is the privacy policy of the application.',
                       ],
                       [
                           'title' =>  'Privacy Policy',
                           'body' => 'This is the privacy policy of the application.',
                       ],

                   ]),
                'description' => 'Privacy policy',
                'base_term' => 'app_privacy_policy',
                'lang' => 'en', // You can choose a default language here
                'type' => 'json',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add similar entries for other settings...
        ]);
    }
}
