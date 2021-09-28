<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Recipe extends Model
{
    use HasFactory;

    protected $table = 'recipes';

    protected $fillable = [
        'name',
        'slug',
        'image',
        'ingredients',
        'description',
        'preparation',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
