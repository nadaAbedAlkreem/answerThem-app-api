<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserTrackingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $user =  $request->user();

        $competitorId = ($this->user1_id === $user->id)?  'user2' :  'user1';

        return
            [
                'challenge_id' => $this->id,
                'competitor' => new UserResource($this->whenLoaded($competitorId)), // Load item as a single instance
                'game' => new CategoryResource($this->whenLoaded('category')),
                'number_of_questions' => $this->number_of_questions,
                'time_per_question' => $this->time_per_question,
                'status' => $this->status,
                'created_at' => $this->created_at->toDateTimeString(),
        ];
    }
}
