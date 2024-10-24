<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ContactUsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return    [ 'id' => $this->id,
                    'sender_id' => $this->sender_id,
                    'title' => $this->title,
                    'description' => $this->description,
                    'sender' => new UserResource($this->whenLoaded('sender')),
                    'created_at' => $this->created_at->toDateTimeString(),
                    'updated_at' => $this->updated_at->toDateTimeString()] ;
    }
}
