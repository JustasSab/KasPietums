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
            $cat = Category::where('slug', $slug)->first();
            $rec = Recipe::where('id', $cat->id)->get();

            return view('frontend.categoryRecipes', compact('cat', 'rec'));
        }
        else
        {
            return redirect('/')->with('status', "Slug does not exists!");
        }
        
    }
}
