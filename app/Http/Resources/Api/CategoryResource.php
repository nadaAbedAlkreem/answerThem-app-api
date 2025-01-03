<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $image = (strpos($this->image, 'https://linktest.gastwerk-bern.ch/') !== false) ? $this->image : 'https://linktest.gastwerk-bern.ch/'.$this->image;
        $locale = App::getLocale();
        $colors = ['#03BOFA', '#815CA3', '#B86BFF'];

        return[
            'id' => $this->id,
            'name' => $locale === 'ar' ? $this->name_ar  : $this->name_en,
            'description' => $locale === 'ar' ? $this->description_ar : $this->description_en,
            'image' => $image,
            'color' => $this->color ,
            'rating' => $this->rating,
            'parent' => new CategoryResource($this->whenLoaded('parent')),
            'grandparent' => new CategoryResource($this->whenLoaded('parent.parent')),
            'level' => $this->level ,
            'questions' => $this->whenLoaded('questions') && $this->questions->isNotEmpty()
                ? QuestionResource::collection($this->questions->shuffle()->take(25))
                : [],
        ];
      }
}
