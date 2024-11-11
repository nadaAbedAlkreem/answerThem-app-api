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
        return
        [
            'challenge_id' =>  new UserResource('challenge') ,
            'first_competitor_id'  => new UserResource('firstCompetitor') ,
            'second_competitor_id' => new UserResource('secondCompetitor')  ,
            'score_FC' => $this->score_FC ,
            'score_SC' =>$this->score_FC ,
            'winner_id' => new UserResource('winner')

        ] ;
    }
}
