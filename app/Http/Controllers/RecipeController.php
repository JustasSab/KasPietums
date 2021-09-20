<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function show(){
        $recipe = Recipe::firstOrFail();

        return view('recipes/show', ['recipes'=> $recipe]);
    }

    public function create(){

    }
}
