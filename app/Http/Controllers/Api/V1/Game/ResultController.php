<?php

namespace App\Http\Controllers\Api\V1\Game;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCompetitorsScoreRequest;
use App\Http\Requests\StoreResultRequest;
use App\Http\Requests\UpdateResultRequest;
use App\Http\Resources\Api\ResultResource;
use App\Models\Result;
use App\Repositories\IChallengeRepositories;
use App\Repositories\IResultRepositories;
use App\Services\FcmNotificationService;
use App\Traits\ResponseTrait;

class ResultController extends Controller
{
    use ResponseTrait ;

    protected $resultRepository  , $challengeRepositories , $fcmNotificationService ;
    public function __construct(IResultRepositories $resultRepository , IChallengeRepositories $challengeRepositories ,  FcmNotificationService $fcmNotificationService)
    {
        $this->middleware('auth:sanctum');
        $this->resultRepository = $resultRepository;
        $this->challengeRepositories = $challengeRepositories;
        $this->fcmNotificationService = $fcmNotificationService;
    }
    /**
     * Display a listing of the resource.


    /**
     * Store a newly created resource in storage.
     */
    public function showResult($challengeId)
    {
        try {
            $resultChallenge = $this->resultRepository->findWhere(['challenge_id'=>$challengeId]);
            $scoreFC = $resultChallenge['score_FC'];
            $scoreSC = $resultChallenge['score_SC'];
            if ($scoreFC === $scoreSC) {
                $resultChallenge['winner_id'] = null;
                $resultChallenge['is_tie'] = true;
            } else {
                $winnerId = $scoreFC > $scoreSC
                    ? $resultChallenge['first_competitor_id']
                    : $resultChallenge['second_competitor_id'];
                $resultChallenge['winner_id'] = $winnerId;
                $resultChallenge['is_tie'] = false; // Optional
            }
            $resultChallenge->save();
            $resultChallenge->load(['challenge','firstCompetitor' ,'secondCompetitor', 'winner']);
           return $this->successResponse('CREATE_ITEM_SUCCESSFULLY', new ResultResource($resultChallenge), 202, app()->getLocale());
        } catch (\Exception $e) {
            return $this->errorResponse('ERROR_OCCURRED', ['error' => $e->getMessage()], 500, app()->getLocale());
        }
    }


    public function storeCompetitorsScore(StoreCompetitorsScoreRequest $request)
    {
        try {

            $challenge = $this->challengeRepositories->findOne($request['challenge_id']);
            $existingResult = $this->resultRepository->findWhere([
                'challenge_id' => $request['challenge_id'],
            ]);
           $score = ($request['for'] == 'first')? 'score_FC' : 'score_SC';
           $title = __('messages.competition_over_competitor_notification_title');;
           $body = __('messages.competition_over_competitor_notification_body');;
           $type = "competition_over";
            if (!$existingResult) {
                    $this->resultRepository->create([
                    'challenge_id' => $request['challenge_id'],
                    'first_competitor_id' => $challenge['user1_id'],
                    'second_competitor_id' => $challenge['user2_id'],
                    $score  => $request['score']
                ]);
            if($score == 'score_FC')
            {
                $this->fcmNotificationService->sendNotification($challenge['user1_id'],$challenge['user2_id'], $title, $body, $type, $request->challenge_id);

            }else
            {
                $this->fcmNotificationService->sendNotification($challenge['user2_id'], $challenge['user1_id'], $title, $body, $type, $request->challenge_id);

            }




           } else {
                 $existingResult[$score] = $request['score']  ;
                 $existingResult->save();
            }
            return $this->successResponse('STORE_SCORE_SUCCESSFULLY',[], 202, app()->getLocale());
        } catch (\Exception $e) {
            return $this->errorResponse('ERROR_OCCURRED', ['error' => $e->getMessage()], 500, app()->getLocale());
        }
    }

    /*
     * Display the specified resource.
     */
    public function show(Result $result)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Result $result)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateResultRequest $request, Result $result)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Result $result)
    {
        //
    }
}
