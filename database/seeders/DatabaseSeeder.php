<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Challenge;
use App\Models\Friend;
use App\Models\FriendRequest;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Team;
use App\Models\Question;
use App\Models\Answer;
use App\Models\TeamMember;
use App\Models\Invitation;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {

        $this->call([
                    SettingsTableSeeder::class,
        ]);

        $users = User::factory()
            ->count(5)
            ->create();
        FriendRequest::factory()->count(5)->create([
            'sender_id' => $users->random()->id,  // Randomly select a user as sender
            'receiver_id' => $users->random()->id, // Randomly select another user as receiver
        ]);

        // Create friends with user IDs
        Friend::factory()->count(5)->create([
            'user_id' => $users->random()->id,
            'friend_id' => $users->random()->id,

        ]);
        $categories = Category::factory(10)->create();

        $categoriesWithParent = $categories->filter(function ($category) {
            return $category->parent_id != 0; // Exclude categories with parent_id == 0
        });

        $categoriesWithParent->each(function ($category) {
            Question::factory(25)->for($category)->create();
        });

        $teams = Team::factory()->count(5)->create();
//         $answers= Question::factory()->count(25)->create([
//            'category_id' => $categories->random()->id,
//        ]);
//        Answer::factory()->count(5)->create([
//            'question_id' => $answers->random()->id,
//        ]);
       $teamMembers = TeamMember::factory()->count(5)->create([
             'team_id' => $teams->random()->id,
             'user_id' => $users->random()->id,
         ]);
       $challenges = Challenge::factory()->count(5)->create([
            'team_member1_id' => $teamMembers->random()->id,
            'team_member2_id' => $teamMembers->random()->id,
            'user1_id' => $users->random()->id,
            'user2_id' => $users->random()->id,
            'category_id' => $categories->random()->id,

        ]);
        Invitation::factory()->count(5)->create([
            'sender_id' => $teamMembers->random()->id,
            'receiver_id' => $teamMembers->random()->id,
            'challenge_id' => $challenges->random()->id,
         ]);

    }
}
