<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NotificationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'type' => $this->type,
            'data' => json_decode($this->data), // Assuming 'data' is JSON
            'sender' => new UserResource($this->whenLoaded('sender')), // Assuming you have a UserResource
            'created_at' => $this->created_at ,
            'read_at' => $this->read_at
        ];



    }
}
