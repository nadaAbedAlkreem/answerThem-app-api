<?php

namespace App\Http\Resources\Api;

 use AllowDynamicProperties;
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
        $image = (strpos($this->image, 'https://linktest.gastwerk-bern.ch/') !== false) ?  $this->image : 'https://linktest.gastwerk-bern.ch/'.$this->image   ;

        return [
            'id' => $this->id ,
            'image' =>  $image,
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
