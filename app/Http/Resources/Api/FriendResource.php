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
            'image' => $this->image ?? 'https://linktest.gastwerk-bern.ch/storage/uploads/images/settings/app_logo1730468704.jpeg',  // Assuming name is in the User model
            'email' => $this->email,
         ];
    }
}
