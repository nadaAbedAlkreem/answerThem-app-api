<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Challenge;
use App\Models\ContactUs;
use App\Models\Evaluation;
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
            UserRolesPermissionsSeeder::class,
            CategorySeeder::class,
//            QuestionSeeder::class,
//            AnswerSeeder::class,
            AdminSeeder::class,

        ]);

//        $users = User::factory()
//            ->count(20)
//            ->create();
//          ContactUs::factory()
//            ->count(20)
//            ->create();
//            Evaluation::factory()
//                  ->count(40)
//                  ->create();
//        $users->each(function ($users) {
//            $users->update([
//                'created_at' => now()->subDays(rand(0, 365)), // Set created_at to a random date in the last year
//            ]);
//        });
//        FriendRequest::factory()->count(5)->create([
//            'sender_id' => $users->random()->id,  // Randomly select a user as sender
//            'receiver_id' => $users->random()->id, // Randomly select another user as receiver
//        ]);
//
//        // Create friends with user IDs
//        Friend::factory()->count(5)->create([
//            'user_id' => $users->random()->id,
//            'friend_id' => $users->random()->id,
//
//        ]);
//        $level1 = Category::factory()->count(5)->create(['level' => 1, 'parent_id' => 0]);

//         $level1Ids = $level1->pluck('id')->toArray();
//        $level2 = Category::factory()->count(10)->create([
//            'level' => 2,
//            'parent_id' => function () use ($level1Ids) {
//                return $level1Ids[array_rand($level1Ids)]; // Assign parent_id from level 1 categories
//            },
//        ]);
//
//         $level2Ids = $level2->pluck('id')->toArray();
//        $level3 = Category::factory()->count(15)->create([
//            'level' => 3,
//            'parent_id' => function () use ($level2Ids) {
//                return $level2Ids[array_rand($level2Ids)]; // Assign parent_id from level 2 categories
//            },
//        ]);
//
//         $level3->each(function ($category) {
//            Question::factory(25)->for($category)->create(); // Creating 25 questions for each level 3 category
//        });
//        $categories=  Category::factory()->count(15)->create([
//            'level' => 3,
//            'parent_id' =>  1
//        ]);
//
//
//        $categories->each(function ($category) {
//            Question::factory(25)->for($category)->create();
//        });
//

//        $teams = Team::factory()->count(5)->create();
////         $answers= Question::factory()->count(25)->create([
////            'category_id' => $categories->random()->id,
////        ]);
////        Answer::factory()->count(5)->create([
////            'question_id' => $answers->random()->id,
////        ]);
//       $teamMembers = TeamMember::factory()->count(5)->create([
//             'team_id' => $teams->random()->id,
//             'user_id' => $users->random()->id,
//         ]);
//       $challenges = Challenge::factory()->count(50)->create([
//            'team_member1_id' => $teamMembers->random()->id,
//            'team_member2_id' => $teamMembers->random()->id,
//            'user1_id' => $users->random()->id,
//            'user2_id' => $users->random()->id,
//            'category_id' => $categories->random()->id,
//
//        ]);
//        $challenges->each(function ($challenge) {
//            $challenge->update([
//                'created_at' => now()->subDays(rand(0, 365)), // Set created_at to a random date in the last year
//            ]);
//        });
//        Invitation::factory()->count(5)->create([
//            'sender_id' => $teamMembers->random()->id,
//            'receiver_id' => $teamMembers->random()->id,
//            'challenge_id' => $challenges->random()->id,
//         ]);

    }
}
