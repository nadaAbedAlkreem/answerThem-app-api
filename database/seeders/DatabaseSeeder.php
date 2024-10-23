<?php

namespace Database\Seeders;

use App\Models\Friend;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FriendRequest;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {

        $this->call([
            SettingsTableSeeder::class,
            UsersTableSeeder::class,
            FriendRequestSeeder::class,
            FriendSeeder::class,
            NotificationSeeder::class,
        ]);

    }
}
