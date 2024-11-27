<?php

namespace App\Http\Controllers\Api\V1\Game;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\UserResource;
use App\Http\Resources\Api\UserTrackingResource;
use App\Models\Result;
use App\Models\UserTracking;
use App\Repositories\IResultRepositories;
use App\Repositories\IUserRepositories;
use App\Repositories\IUserTrackingRepositories;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class UserTrackingController extends Controller
{

    use ResponseTrait;

    protected $userTrackingRepository  , $userRepository , $resultRepository ;

    public function __construct(IUserTrackingRepositories $userTrackingRepository ,IUserRepositories $userRepository ,  IResultRepositories $resultRepository)
    {
        $this->userTrackingRepository = $userTrackingRepository;
        $this->resultRepository = $resultRepository;
        $this->userRepository = $userRepository; // Inject the repository

    }

    public function trackAppEntry($userId)
    {
        try {
            $tracking = $this->userTrackingRepository->incrementAppEntries($userId);
            return $this->successResponse(
                'TRAFFICKER_SUCCESSFULLY',
                $tracking,
                202,
                app()->getLocale()
            );
        } catch (\Exception $e) {
            return $this->errorResponse(
                'ERROR_OCCURRED',
                ['error' => $e->getMessage()],
                500,
                app()->getLocale()
            );
        }

    }

    private function trackWinsResult($userId)
    {
        try {
            $wins = $this->resultRepository->getWhereWithCount(['winner_id' => $userId]);
            return  $wins ;
        } catch (\Exception $e) {
            return $this->errorResponse(
                'ERROR_OCCURRED',
                ['error' => $e->getMessage()],
                500,
                app()->getLocale()
            );
        }
    }

    private function trackLossesResult($userId)
    {
        $losses = Result::where(function ($query) use ($userId) {
            $query->where('first_competitor_id', $userId)
                ->orWhere('second_competitor_id', $userId);
        })
            ->where('winner_id', '!=', $userId)
            ->where('is_tie', false)
            ->count();
        return $losses ;
    }

    public function getCurrentUser($userId)
    {

        $enterUser = $this->getTrackAppEntry($userId) ;
        $win = $this->trackWinsResult($userId);
        $loss = $this->trackLossesResult($userId);
        $game = $this->getNumberOfGame($userId);
        $games = $this->userTrackingRepository->getLastGame($userId);
        $currentUser = $this->userRepository->findOne($userId);
        return (!empty($currentUser))
            ? $this->successResponse('DATA_RETRIEVED_SUCCESSFULLY',

                ['count_entrance'=>$enterUser,
                    'count_wins' => $win  ,
                    'count_loss' => $loss  ,
                    'count_game' => $game  ,
                    'last_games' =>  UserTrackingResource::collection($games) ,
                    'user' => new UserResource($currentUser) ,
                ]
                , 200, App::getLocale())
            : $this->errorResponse('NOTAUTHORIZED', [], 403, App::getLocale());

    }

//    public function getTrafficForCurrentUser($userId)
//    {
//
//
//        return $this->successResponse(
//            'TRAFFICKER_SUCCESSFULLY',
//            ['count_entrance'=>$enterUser  , 'count_wins' => $win  , 'count_loss' => $loss  ,'count_game' => $game  ,  'last_games' =>  UserTrackingResource::collection($games) ],
//            202,
//            app()->getLocale()
//        );
//    }

    public function getNumberOfGame($userId)
    {
        $gamesPlayed = Result::where('first_competitor_id', $userId)
            ->orWhere('second_competitor_id', $userId)
            ->count();
        return $gamesPlayed ;
    }

    private function getTrackAppEntry($userId)
    {
        $getUserEnter = UserTracking::where('user_id', $userId)->first();
        return $getUserEnter->app_entries_count  ?? 1 ;
    }
}
