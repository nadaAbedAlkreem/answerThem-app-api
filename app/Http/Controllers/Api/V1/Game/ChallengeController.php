<?php

namespace App\Http\Controllers\Api\V1\Game;

use App\Http\Controllers\Controller;
use App\Http\Requests\AcceptInvitationsRequest;
use App\Http\Requests\StoreChallengeRequest;
use App\Http\Requests\UpdateChallengeRequest;
use App\Http\Resources\Api\ChallengeResource;
use App\Http\Resources\Api\FriendResource;
use App\Models\Challenge;
use App\Models\Friend;
use App\Models\User;
use App\Repositories\IChallengeRepositories;
use App\Repositories\IFriendRepositories;
use App\Services\FcmNotificationService;
use App\Traits\ResponseTrait;
use Exception;
use Illuminate\Http\Request;

class ChallengeController extends Controller
{
    use ResponseTrait ;
    protected $friendRepository  , $challengeRepository ,  $fcmNotificationService  ;
    public function __construct(IFriendRepositories $friendRepository   , IChallengeRepositories $challengeRepository  , FcmNotificationService $fcmNotificationService
    )
    {
        $this->middleware('auth:sanctum');
        $this->friendRepository = $friendRepository;
        $this->fcmNotificationService = $fcmNotificationService;
        $this->challengeRepository = $challengeRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function getFriendsWithSearch(Request $request)
    {

         $user =  $request->user();
         if (!$user) {
            return $this->errorResponse('UNAUTHENTICATED', [], 401, app()->getLocale());
        }
        $searchValue = $request->query('name');
        $friendsOfUser = Friend::getFriendsByLimited($user->id ,$searchValue);
        return $this->successResponse('DATA_RETRIEVED_SUCCESSFULLY',FriendResource::collection($friendsOfUser) , 202, app()->getLocale());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(StoreChallengeRequest $request)
    {
        try {
        $currentUser = User::findOrFail($request->user1_id);
        $title = __('messages.invitation_notification_title'); ;
        $body  = $currentUser->name .' '. __('messages.invitation_notification_body'); ;
        $type  = "invitations_request";
        $challenge= $this->challengeRepository->create($request->getData());
        $challenge->load(['user1' , 'user2' , 'category.questions.answers']);
        $challengeLink = route('challenge.show', ['challengeId' => $challenge->id]);
        $this->fcmNotificationService->sendNotification($challenge['user1_id']  ,$challenge['user2_id'] , $title , $body  , $type  , $challengeLink  , $challenge->id  );

         return $this->successResponse(
                'DATA_RETRIEVED_SUCCESSFULLY',
                new ChallengeResource($challenge),
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

    /**
     * Store a newly created resource in storage.
     */
    public function statusStartGaming(AcceptInvitationsRequest $request)
    {
        try {
            $challenge = $this->challengeRepository->findOne( $request->challenge_id);
            $this->expiredTime($challenge);
            $currentUser = User::findOrFail($request->sender_id);
            $title = __('messages.invitation_accept_competitor_notification_title');;
            $body = $currentUser->name . ' ' . __('messages.invitation_accept_competitor_notification_body');;
            $type = "accept_invitation";
            $challengeLink = route('challenge.show', ['challengeId' => $request->challenge_id]);
            $this->fcmNotificationService->sendNotification($request->sender_id, $request->receiver_id, $title, $body, $type, $challengeLink, $request->challenge_id);


            return $this->successResponse(
                'NOTIFICATION_SENT_SUCCESSFULLY',
                [],
                202,
                app()->getLocale()
            );
        }catch (\Exception $e) {



            return $this->errorResponse(
                'ERROR_OCCURRED',
                ['error' => $e->getMessage()],
                500,
                app()->getLocale()
            );
        }
    }

    /**
     * Display the specified resource.
     */
  function show($challengeId)
    {
        try {
            $challenge = $this->challengeRepository->findOrFailWith($challengeId , ['user1' , 'user2' , 'category.questions.answers']);
            $this->expiredTime($challenge);
            $challenge->status = 'ongoing' ;
            $challenge->save();
            return $this->successResponse(
                'DATA_RETRIEVED_SUCCESSFULLY',
                new ChallengeResource($challenge),
                202,
                app()->getLocale()
            );
         } catch (\Exception $e) {
            if($e->getMessage() == "EXPIRED_TIME")
            {
                return $this->errorResponse(
                    'EXPIRED_TIME',
                    [],
                    403,
                    app()->getLocale()
                );
            }
            return $this->errorResponse(
                'ERROR_OCCURRED',
                ['error' => $e->getMessage()],
                500,
                app()->getLocale()
            );
        }

    }

    private  function  expiredTime($challenge)
    {
        if ($challenge->created_at->diffInMinutes(now()) > 5) {
            $challenge->status = 'end' ;
            $challenge->save();
            $this->challengeRepository->delete($challenge->id );

            throw new Exception('EXPIRED_TIME');
        }
    }




/**
     * Show the form for editing the specified resource.
     */
    public function endOFChallenge($challengeId)
    {
        try {
            $this->challengeRepository->update(['status' => 'end'] , $challengeId);
            $this->challengeRepository->delete($challengeId );
            return $this->successResponse(
                'GAME_END',
               [],
                202,
                app()->getLocale()
            );
        }catch (\Exception $e) {
            return $this->errorResponse(
                'ERROR_OCCURRED',
                ['error' => $e->getMessage()],
                500,
                app()->getLocale()
            );
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateChallengeRequest $request, Challenge $challenge)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Challenge $challenge)
    {
        //
    }
}
