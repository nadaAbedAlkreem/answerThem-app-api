<?php

namespace App\Http\Resources\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $lang = $request->route('lang');
        $name = "";
        $description = "";
        if ($lang == 'ar') {
            $name = mb_convert_encoding($this->name_ar, 'UTF-8', 'auto');
            $description = mb_convert_encoding($this->description_ar, 'UTF-8', 'auto');
        } else {
            $name = mb_convert_encoding($this->name_en, 'UTF-8', 'auto');
            $description = mb_convert_encoding($this->description_en, 'UTF-8', 'auto');
        }

        return [
            'id' => $this->id,
            'name' => $name,
            'description' => $description,
            'name_ar' => $this->name_ar,
            'description_ar' => $this->description_ar,
            'name_en' => $this->name_en,
            'description_en' => $this->description_en,
            'image' =>  $this->image,
            'rating' => $this->rating,
            'level' => $this->level ,
            'parent_id' => $this->parent_id ,
            'parent' => new \App\Http\Resources\Api\CategoryResource($this->whenLoaded('parent')),
            'grandparent' => new CategoryResource($this->whenLoaded('parent.parent')),
            'famous_gaming' => $this->famous_gaming ,

        ];
    }
}
