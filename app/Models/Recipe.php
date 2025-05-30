<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'main_image',
        'servings',
        'duration',
        'category_id',
        'ingredients',
        'steps',
        'step_images',
    ];

    protected $casts = [
        'ingredients' => 'array',
        'steps' => 'array',
        'step_images' => 'array',
    ];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
