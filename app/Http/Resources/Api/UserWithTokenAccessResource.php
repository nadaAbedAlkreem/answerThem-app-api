<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserWithTokenAccessResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function __construct($userData)
    {
        parent::__construct($userData['user']);
        return $this->access_token = $userData['access_token'] ?? null;

    }
    public function toArray($request): array
    {
        return [
            'id' => $this->id ,
            'access_token'=>$this->access_token ,
            'image' => $this->image,
            'name' => $this->name,
            'full_name' => $this->full_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'country' => $this->country,
            'created_at' => $this->created_at->toDateTimeString(),
            'updated_at' => $this->updated_at->toDateTimeString(),

        ];
    }
}
