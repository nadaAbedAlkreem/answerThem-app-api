<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;

class QuestionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $locale = App::getLocale();
         return [
            'question_text' => $locale === 'ar' ? $this->question_ar_text : $this->question_en_text,
            'answers' => AnswerResource::collection($this->answers),
        ];

    }
}
