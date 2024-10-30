<?php

namespace App\Http\Controllers\Api\V1\Game;

use App\Http\Controllers\Controller;
use App\Repositories\IUserTrackingRepositories;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;

class UserTrackingController extends Controller
{

    use ResponseTrait;

    protected $userTrackingRepository;

    public function __construct(IUserTrackingRepositories $userTrackingRepository)
    {
        $this->userTrackingRepository = $userTrackingRepository;
    }
    public function trackAppEntry($userId)
    {
        $tracking = $this->userTrackingRepository->incrementAppEntries($userId);

        return $this->successResponse(
            'TRAFFICKER_SUCCESSFULLY',
            $tracking,
            202,
            app()->getLocale()
        );
    }
    public function trackAppLogGameResult($userId , $result)
    {
        $tracking = $this->userTrackingRepository->logGameResult($userId , $result);

        return $this->successResponse(
            'TRAFFICKER_SUCCESSFULLY',
            $tracking,
            202,
            app()->getLocale()
        );
    }
    public  function getTrafficForCurrentUser(Request $request)
    {
        $user =  $request->user();

        $tracking = $this->userTrackingRepository->getTrafficForCurrentUser($user->id);

        return $this->successResponse(
            'TRAFFICKER_SUCCESSFULLY',
            $tracking,
            202,
            app()->getLocale()
        );
    }

    public function getLastGame(Request $request)
    {

        $tracking = $this->userTrackingRepository->getLastGame($request);

        return $this->successResponse(
            'TRAFFICKER_SUCCESSFULLY',
            $tracking,
            202,
            app()->getLocale()
        );
    }

    /**
     * Log a game result for a user.
     */
    public function logGameResult($userId, $result)
    {
        $tracking = $this->userTrackingRepository->logGameResult($userId, $result);

        return $this->successResponse(
            'TRAFFICKER_SUCCESSFULLY',
            $tracking,
            202,
            app()->getLocale()
        );
    }


}
