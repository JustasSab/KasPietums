<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Category;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function viewcategory($slug)
    {
        if(Category::where('slug', $slug))
        {
            $category = Category::where('slug', $slug)->first();
            $recipes = Recipe::where('id', $category->id)->get();

            return view('frontend.categoryRecipes', compact('category', 'recipes'));
        }
        else
        {
            return redirect('/')->with('status', "Slug does not exists!");
        }
        
    }
}
