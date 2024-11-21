<?php

namespace App\Repositories\Eloquent;

use App\Models\Challenge;
use App\Models\Team;
use App\Models\TeamMember;
use App\Models\User;
use App\Models\UserTracking;
use App\Repositories\IUserTrackingRepositories;
use Illuminate\Support\Facades\Validator;

class UserTrackingRepository extends BaseRepository implements IUserTrackingRepositories
{
    public function __construct(UserTracking $userTracking)
    {
        $this->model = $userTracking;
    }
    private function validateUserId($userId , $result = null)
    {
        $rules = [
          'id' => 'required|integer|exists:users,id',
        ];
        if ($result) {
            $rules['result'] = 'required|string|in:win,loss';
        }
        $data = ['id' => $userId];
        if ($result) {
            $data['result'] = $result;
        }
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            $errorMessage = $validator->errors()->first();
            throw new \Exception($errorMessage);
        }

        return null;
    }
    public function incrementAppEntries($userId)
    {
        $validationError = $this->validateUserId($userId);
        if ($validationError) {
            return $validationError;
        }

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
        $validationError = $this->validateUserId($userId , $result);
        if ($validationError) {
            return $validationError;
        }
        $tracking = $this->getWhereFirst(['user_id'=> $userId]);
        if ($tracking)
         {
            $tracking->increment('play_count');
            if ($result === 'win') {
                $tracking->increment('win_count');
            } elseif ($result === 'loss') {
                $tracking->increment('loss_count');
            }
         } else
         {
             $tracking = $this->create([
                'user_id' => $userId,
                'play_count' => 1,
                'win_count' => $result === 'win' ? 1 : 0,
                'loss_count' => $result === 'loss' ? 1 : 0,
            ]);
         }

        return $tracking;

    }
    public function getLastGame($userId)
    {
          $lastGame = Challenge::with(['user1' , 'user2'  ,'category'])->where(function ($query) use ($userId) {
            $query->where('user1_id', $userId)
                ->orWhere('user2_id', $userId);
        })
            ->orderBy('created_at', 'desc')
            ->take(5)

            ->get();
           if (!$lastGame) {
            return response()->json(['message' => 'No games found for this user'], 404);
        }
          return  $lastGame;
    }
}
