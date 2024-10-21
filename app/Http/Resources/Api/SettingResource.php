<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SettingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $value = json_decode($this->value);

        // Handle different types of values
        switch ($this->type) {
            case 'image':
                // If the type is image, return the image path
                return [
                    'id' => $this->id,
                    'key' => $this->key,
                    'value' => asset($value), // Assuming you want the full URL for the image
                    'description' => $this->description,
                    'base_term' => $this->base_term,
                    'lang' => $this->lang,
                    'type' => $this->type,
                    'created_at' => $this->created_at->toDateTimeString(),
                    'updated_at' => $this->updated_at->toDateTimeString(),
                ];

            case 'json':
                // If the type is json, handle it accordingly
                return [
                    'id' => $this->id,
                    'key' => $this->key,
                    'value' => (array)$value, // Cast to array if necessary
                    'description' => $this->description,
                    'base_term' => $this->base_term,
                    'lang' => $this->lang,
                    'type' => $this->type,
                    'created_at' => $this->created_at->toDateTimeString(),
                    'updated_at' => $this->updated_at->toDateTimeString(),
                ];

            case 'string':
            default:
                // For string type, return it directly
                return [
                    'id' => $this->id,
                    'key' => $this->key,
                    'value' => $this->value, // Directly return the string value
                    'description' => $this->description,
                    'base_term' => $this->base_term,
                    'lang' => $this->lang,
                    'type' => $this->type,
                    'created_at' => $this->created_at->toDateTimeString(),
                    'updated_at' => $this->updated_at->toDateTimeString(),
                ];
        }
    }
}
