<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Recipe;


class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'slug'
    ];

    public function categories()
    {
        return $this->belongsToMany(Recipe::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
