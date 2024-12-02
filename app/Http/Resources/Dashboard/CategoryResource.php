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
        $lang = $request->header('lang');
        $name = "";
        $description = "";
        if($lang == 'ar')
        {
            $name = $this->name_ar ;
            $description = $this->description_ar ;

        }else
        {

            $name = $this->name_en ;
            $description = $this->description_en ;
        }


        return [
            'id' => $this->id,
            'name' => $name,
            'description' => $description,
            'image' =>  $this->image,
            'rating' => $this->rating,
        ];
    }
}
