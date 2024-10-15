<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class AttachmentResource  extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'operating_order_id' => $this->operating_order_id,
            'file_type' => $this->file_type,
            'file_path' => $this->file_path,
            'created_at' => $this->created_at->toDateTimeString(),
            'updated_at' => $this->updated_at->toDateTimeString(),
            'operating_order' => new OperatingOrderResource($this->whenLoaded('operatingOrders')), // Load item as a single instance

        ];
    }
}
