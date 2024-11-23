<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ResultResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $winner = "";
        $loser = "" ;
        $loserScore = 0  ;
        $winnerScore = 0 ;
         if( $this->score_FC > $this->score_SC)
        {
            $winner = new UserResource($this->firstCompetitor)  ;
            $loser = new UserResource($this->secondCompetitor)  ;
            $loserScore  =  $this->score_SC ;
            $winnerScore = $this->score_FC ;

        }else {
             $winner = new UserResource($this->secondCompetitor)  ; //secondCompetitor
             $loser = new UserResource($this->firstCompetitor)  ;
             $loserScore  =  $this->score_FC ;
             $winnerScore  = $this->score_SC ;

         }
        return [
            'id'=> $this->id  ,
            'challenge_id' => new ChallengeResource($this->challenge),
            'winner' => $winner,
            'loser' => $loser ,
            'winner_score' => $winnerScore,
            'loser_score'  => $loserScore,
            'is_tie' => $this->is_tie,

        ];
    }
}
