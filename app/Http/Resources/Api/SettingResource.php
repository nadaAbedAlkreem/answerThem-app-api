<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;

class SettingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $value = json_decode($this->value, true);

        switch ($this->type) {
            case 'image':
                return [$this->key => asset($this->value)]; // Convert image path to full URL

            case 'json':
                return [$this->key => $value]; // Use the decoded JSON value

            default:
                return [$this->key => $this->value]; // Return the raw value for strings
        }
    }

}
