<?php

namespace App\Http\Resources\Api;

 use Illuminate\Http\Resources\Json\JsonResource;

 class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */


    public function toArray($request): array
    {
        return [
            'id' => $this->id ,
            'image' => 'https://linktest.gastwerk-bern.ch/'.$this->image,
            'name' => $this->name,
            'full_name' => $this->full_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'country' => $this->country,
            'is_online'=> $this->is_online  ?? 0 ,
            'created_at' => $this->created_at->toDateTimeString(),
            'updated_at' => $this->updated_at->toDateTimeString(),

        ];
    }
}
