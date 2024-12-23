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
        'level',
        'color',
        'famous_gaming'
    ];
    protected $dates = ['deleted_at'];
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($category) {
            // Soft delete related friend requests
            $category->children()->each(function ($children) {
                $children->delete(); // Soft delete sent requests
            });
            $category->questions()->each(function ($questions) {
                $questions->delete(); // Soft delete sent requests
            });

        });
    }
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    // Define the children relationship
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }


    // A category can have many questions
    public function questions()
    {
        return $this->hasMany(Question::class , 'category_id');
    }

    // A category can have sub-categories (parent-child relationship)


    // A category can belong to a parent category

}
