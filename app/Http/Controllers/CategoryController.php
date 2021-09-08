<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function viewCategory($slug)
    {
        $category = Category::FindOrFail($slug);
        return view('viewcategory', compact('category'));
    }
}
