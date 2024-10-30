<?php

namespace App\Repositories\Eloquent;

use App\Models\Challenge;
use App\Models\Team;
use App\Models\TeamMember;
use App\Models\User;
use App\Models\UserTracking;
use App\Repositories\IUserTrackingRepositories;

class UserTrackingRepository extends BaseRepository implements IUserTrackingRepositories
{

    public function __construct(UserTracking $userTracking)
    {
        $this->model = $userTracking;
    }


    public function incrementAppEntries($userId)
    {
        $tracking = $this->getWhereFirst(['user_id'=> $userId]);
        if ($tracking) {
            $tracking->increment('app_entries_count');
            $tracking->save();

        }
        else
        {
            $tracking = $this->create([
                'user_id' => $userId,
                'app_entries_count' => 1,
             ]);
            $tracking->save();

        }

        return $tracking;
    }
    public function getTrafficForCurrentUser($userId)
    {
     return $this->getWhereFirst( ['user_id' => $userId]) ;
    }

    public function logGameResult($userId, $result)
    {
        // Check if the tracking record exists
        $tracking = $this->getWhereFirst(['user_id'=> $userId]);

        if ($tracking) {
            // If the record exists, increment the counts
            $tracking->increment('play_count');

            if ($result === 'win') {
                $tracking->increment('win_count');
            } elseif ($result === 'loss') {
                $tracking->increment('loss_count');
            }

         } else {
             $tracking = $this->create([
                'user_id' => $userId,
                'play_count' => 1, // Starting play count
                'win_count' => $result === 'win' ? 1 : 0,
                'loss_count' => $result === 'loss' ? 1 : 0,
            ]);
        }

        return $tracking;

    }


    public function getLastGame($request)
    {
         $user = $request->user();

        // Get the team member record for the user
        $teamMember = TeamMember::where('user_id', $user->id)->first();

        // Check if the user is a member of any team
//        if (!$teamMember) {
//            return response()->json(['message' => 'USER_NOT_IN_TEAM'], 404);
//        }

        // Retrieve the last challenge involving either the user or their team member
        $lastGame = Challenge::where(function ($query) use ($user) {
            // Filter by user_id or team_member_id
            $query->where('user1_id',1)
                ->orWhere('user2_id',1);
//                ->orWhere('team_member1_id', $teamMember->id)
//                ->orWhere('team_member2_id', $teamMember->id);
        })
            ->latest()
            ->first();


         // Check if any games exist
        if (!$lastGame) {
            return response()->json(['message' => 'NO_GAMES'], 200);
        }

        // Determine the competitor's information
        $competitorTeamMemberId = ($lastGame->team_member1_id === $teamMember->id)
            ? $lastGame->team_member2_id
            : $lastGame->team_member1_id;
//        dd($competitorTeamMemberId);
        // Get the competitor's team member and team
        $competitorTeamMember = TeamMember::find($competitorTeamMemberId);
        $competitorTeam = $competitorTeamMember ? Team::find($competitorTeamMember->team_id) : null;

        // Return the response
        return response()->json([
            'last_game' => $lastGame,
            'competitor_team' => $competitorTeam,
            'status' => $lastGame->status,
            'category' => $lastGame->category_id ? $lastGame->category : null,
        ], 200);
    }
}
