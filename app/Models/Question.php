<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['category_id', 'image' ,'video' , 'is_have_video' , 'question_ar_text', 'question_en_text'];
    protected $dates = ['deleted_at'];

    // A question belongs to a category
    public function category()
    {
        return $this->belongsTo(Category::class , 'category_id');
    }



    // A question can have many answers
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
