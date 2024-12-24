<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;

class CategoryWithOutParentResource extends JsonResource
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
            'level' => $this->level ,
            'questions' => QuestionResource::collection(
                $this->whenLoaded('questions')->shuffle()->take(25)
            ),
        ];
    }
}
