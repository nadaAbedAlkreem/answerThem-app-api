<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Answer extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['question_id', 'answer_text_ar', 'answer_image' , 'is_have_image',  'answer_text_en', 'is_correct'];
    protected $dates = ['deleted_at'];

    // An answer belongs to a question
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
