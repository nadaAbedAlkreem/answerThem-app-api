<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'hummn_doe',
                'full_name' => 'Me Doe',
                'email' => 'M@example.com',
                'phone' => '+123456779',
                'image' => 'https://linktest.gastwerk-bern.ch/storage/uploads/images/settings/app_logo1730468704.jpeg',
                'country' => 'US',
                'lang' => 'en',
                'email_verified_at' => now(),
                'password' => Hash::make('123456789'), // Ensure password is hashed
                'provider' => 'local',
                'provider_id' => Str::random(10),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ahmed_saeed',
                'full_name' => 'Ahmed Saeed',
                'email' => 'ahmed@example.com',
                'phone' => '+987654321',
                'image' => 'https://linktest.gastwerk-bern.ch/storage/uploads/images/settings/app_logo1730468704.jpeg',
                'country' => 'EG',
                'lang' => 'ar',
                'email_verified_at' => now(),
                'password' => Hash::make('123456789'),
                'provider' => 'local',
                'provider_id' => Str::random(10),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]
            ,
            [
            'name' => 'ali_saeed',
            'full_name' => 'ali Saeed',
            'email' => 'ali@example.com',
            'phone' => '+987654324',
            'image' => 'https://linktest.gastwerk-bern.ch/storage/uploads/images/settings/app_logo1730468704.jpeg',
            'country' => 'EG',
            'lang' => 'ar',
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'),
            'provider' => '',
            'provider_id' => '' ,
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]
         ,
            [
            'name' => 'nada_saeed',
            'full_name' => 'nada Saeed',
            'email' => 'nada@example.com',
            'phone' => '+987654327',
            'image' => 'https://linktest.gastwerk-bern.ch/storage/uploads/images/settings/app_logo1730468704.jpeg',
            'country' => 'EG',
            'lang' => 'ar',
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'),
            'provider' => '',
            'provider_id' => '' ,
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]

            ,
            [
                'name' => 'maha_saeed',
                'full_name' => 'maha Saeed',
                'email' => 'maha@example.com',
                'phone' => '+987654325',
                'image' => 'https://linktest.gastwerk-bern.ch/storage/uploads/images/settings/app_logo1730468704.jpeg',
                'country' => 'EG',
                'lang' => 'ar',
                'email_verified_at' => now(),
                'password' => Hash::make('123456789'),
                'provider' => '',
                'provider_id' => '' ,
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
