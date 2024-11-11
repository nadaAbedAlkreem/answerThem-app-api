<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ChallengeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
         return  [
            'id' => $this->id,
            'name_game' => $this->name_game ,
            'creator' =>  new UserResource($this->whenLoaded('user1')),
            'competitor' =>   new UserResource($this->whenLoaded('user2')),
            'category' => new CategoryResource($this->whenLoaded('category')),
            'number_of_questions' => $this->number_of_questions ?? 25   ,
            'time_per_question' => $this->time_per_question ?? 1,
            'status' => $this->status  ?? 'pending',
        ];
    }
}
