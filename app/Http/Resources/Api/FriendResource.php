<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FriendResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,  // Assuming name is in the User model
            'email' => $this->email,
            'created_at' => $this->pivot->created_at,  // Access pivot table fields if needed
        ];
    }
}
