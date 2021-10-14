<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        
        return view('categories.index',compact('categories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);
        $categories = new Category;

        $categories->name = $request->name;
        $categories->slug = $request->slug;

        $categories->save();

        return redirect()->route('categories.index')
            ->with('success','Category has been created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $categories)
    {
        return view('categories.show',compact('categories')); //recipe
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $categories)
    {
        return view('categories.edit',compact('categories')); //recipe
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        $categories = Category::find($id);

        $categories->name = $request->name;
        $categories->slug = $request->slug;

        $categories->save();

        return redirect()->route('categories.index')
            ->with('success','Category updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $categories = Category::find($id);
        $categories->delete();

        return redirect()->route('categories.index')
            ->with('success','Category deleted!');
    }
}

