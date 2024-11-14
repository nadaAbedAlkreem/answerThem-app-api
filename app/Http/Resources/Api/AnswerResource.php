<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;

class AnswerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $locale = App::getLocale();

        return
        [
            'answer_text' => $locale === 'ar' ? $this->answer_text_ar : $this->answer_text_en,
            'is_correct' => $this->is_correct ,
            'timer' => 60  ,
        ] ;

     }
}
