<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name_ar',
        'name_en',
        'description_ar',
        'description_en',
        'rating',
        'image',
        'parent_id',
        'famous_gaming'
    ];

    // A category can have many questions
    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    // A category can have sub-categories (parent-child relationship)
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function challenge()
    {
        return $this->hasMany(Category::class, 'category_id');
    }

    // A category can belong to a parent category
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

}
