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
        return [
            'id'=> $this->id  ,
            'challenge_id' => new ChallengeResource($this->challenge),
            'first_competitor_id' => new UserResource($this->firstCompetitor),
            'second_competitor_id' => new UserResource($this->secondCompetitor),
            'score_FC' => $this->score_FC,
            'score_SC' => $this->score_SC,
            'winner_id' => new UserResource($this->winner),
        ];
    }
}
