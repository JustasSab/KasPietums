<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::latest()->paginate(5);

        return view('recipes.index',compact('recipes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'ingredients' => 'required',
            'description' => 'required',
            'preparation' => 'required',
        ]);

        Recipe::create($request->all());

        return redirect()->route('recipes.index')
            ->with('success','Recipe created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Recipe $recipe)
    {
        return view('recipes.show',compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipe)
    {
        return view('recipes.edit',compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recipe $recipe)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'ingredients' => 'required',
            'description' => 'required',
            'preparation' => 'required',
        ]);

        $recipe->update($request->all());

        return redirect()->route('recipes.index')
            ->with('success','Recipe updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();

        return redirect()->route('recipes.index')
            ->with('success','Recipe deleted successfully');
    }
}
