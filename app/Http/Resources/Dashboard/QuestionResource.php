<?php

namespace App\Http\Resources\Dashboard;

use App\Http\Resources\Api\AnswerResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $locale = $request->route('lang');
        return [
            'id' => $this->id ,
            'question_text' => $locale === 'ar' ? $this->question_ar_text : $this->question_en_text,
            'question_ar_text' =>  $this->question_ar_text  ,
            'question_en_text'=>$this->question_en_text ,
            'image' => $this->image ,
            'answers' => AnswerResource::collection($this->answers),
            'category' => new CategoryResource($this->category),
            'video'=> $this->video ,
            'timer' => 60  ,
        ];
    }
}
