<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;

class TeamResource extends JsonResource
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
            'id' => $this->id ,
            'name' => $this->name ,
            'creator'=>new UserResource($this->whenLoaded('user')),
            'members'=> teamMembersResource::collection($this->whenLoaded('teamMembers')),

        ] ;

     }
}
