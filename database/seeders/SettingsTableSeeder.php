<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{

    public function run()
    {
      //  DB::table('settings')->delete();

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
                        [
                        'title' => 'How can I recover my password?',
                        'body' => 'You can recover your password by clicking on Forgot Passwordon the login screen.',
                        ],
                        [
                            'title' => 'Can I use the app offline?',
                            'body' => 'Some features may require an internet connection, but other features can be used offline.',
                        ],
                        [
                            'title' => 'How do I upgrade my account to a premium account?',
                            'body' => 'You can upgrade to a premium account through the account settings and pay through the available methods.',
                        ],
                        [
                            'title' => 'Does the app support multiple languages?',
                            'body' => 'Yes, the app supports multiple languages ​​and the language can be changed from the app settings.',
                        ],
                        [
                            'title' => 'What devices can I use to run the app?',
                            'body' => 'The app can be run on iOS and Android smartphones and tablets.',
                        ]
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
                        'name' => 'Saudi Arabia',
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
                'value' => json_encode(
                    [
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

            [
                'key' => 'contact_us',
                'value' => json_encode(
                   [  'gmail' => 'test@test.com',
                       'facebook' => 'facebook',
                       'Instagram' => 'Instagram',
                       'WhatsApp' => '9999999',
                       'Snapchat' => 'Snapchat',

                   ]



                ),
                'description' => 'contact us information',
                'base_term' => 'app_contact_us',
                'lang' => 'ar', // You can choose a default language here
                'type' => 'json',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'key' => 'contact_us',
                'value' => json_encode([  'gmail' => 'test@test.com',
                        'facebook' => 'facebook',
                        'Instagram' => 'Instagram',
                        'WhatsApp' => '9999999',
                        'Snapchat' => 'Snapchat',

                    ]),
                'description' => 'contact us information',
                'base_term' => 'app_contact_us',
                'lang' => 'en', // You can choose a default language here
                'type' => 'json',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'problem_suggestions_ar',
                'value' => json_encode(["Technical Issues" , "Account Problems" , "Feedback and Suggestions" , "Other"]),
                'description' => 'problem suggestions  information',
                'base_term' => 'problem_suggestions',
                'lang' => 'ar', // You can choose a default language here
                'type' => 'json',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'key' => 'problem_suggestions_en',
                'value' => json_encode(["المشاكل الفنية" , "مشاكل الحساب" ,"الملاحظات والاقتراحات" , "أخرى"]),
                'description' => 'problem suggestions  information',
                'base_term' => 'problem_suggestions',
                'lang' => 'en', // You can choose a default language here
                'type' => 'json',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'key' => 'frequently_asked_questions_ar',
                'value' => json_encode([
                        [
                            'title' => 'كيف يمكنني استعادة كلمة المرور الخاصة بي؟',
                            'body' => 'يمكنك استعادة كلمة المرور من خلال النقر على "نسيت كلمة المرور" في شاشة تسجيل الدخول.',
                        ],
                        [
                            'title' => 'هل يمكنني استخدام التطبيق بدون اتصال بالإنترنت؟',
                            'body' => 'بعض الميزات قد تتطلب اتصالاً بالإنترنت، ولكن يمكن استخدام ميزات أخرى في وضع عدم الاتصال.',
                        ],
                        [
                            'title' => 'كيف أقوم بترقية حسابي إلى حساب مميز؟',
                            'body' => 'يمكنك الترقية إلى حساب مميز من خلال إعدادات الحساب والدفع عن طريق الوسائل المتاحة.',
                        ],
                        [
                            'title' => 'هل يدعم التطبيق عدة لغات؟',
                            'body' => 'نعم، التطبيق يدعم العديد من اللغات ويمكن تغيير اللغة من إعدادات التطبيق.',
                        ],
                        [
                            'title' => 'ما هي الأجهزة التي يمكنني استخدامها لتشغيل التطبيق؟',
                            'body' => 'يمكن تشغيل التطبيق على الهواتف الذكية والأجهزة اللوحية التي تعمل بنظامي iOS وAndroid.',
                        ]
                    ]),
                'description' => 'frequently asked questions ',
                'base_term' => 'frequently_asked_questions',
                'lang' => 'ar', // You can choose a default language here
                'type' => 'json',
                'created_at' => now(),
                'updated_at' => now(),
            ],

         [   'key' => 'frequently_asked_questions_en',
            'value' => json_encode([
                    [
                        'title' => 'How can I recover my password?',
                        'body' => 'You can recover your password by clicking on Forgot Password on the login screen.',
                    ],
                    [
                        'title' => 'Can I use the app offline?',
                        'body' => 'Some features may require an internet connection, but other features can be used offline.',
                    ],
                    [
                        'title' => 'How do I upgrade my account to a premium account?',
                        'body' => 'You can upgrade to a premium account through the account settings and pay through the available methods.',
                    ],
                    [
                        'title' => 'Does the app support multiple languages?',
                        'body' => 'Yes, the app supports multiple languages ​​and the language can be changed from the app settings.',
                    ],
                    [
                        'title' => 'What devices can I use to run the app?',
                        'body' => 'The app can be run on iOS and Android smartphones and tablets.',
                    ]
                ]),
            'description' => 'frequently asked questions ',
            'base_term' => 'frequently_asked_questions',
            'lang' => 'en', // You can choose a default language here
            'type' => 'json',
            'created_at' => now(),
            'updated_at' => now(),
]
        ]);
    }
}
