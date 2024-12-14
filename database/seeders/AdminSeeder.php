<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'phone' => '+123456779',
                'password' => Hash::make('admin'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more challenges as needed
        ]);
    }
}
