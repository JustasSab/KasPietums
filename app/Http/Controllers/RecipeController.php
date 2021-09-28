<?php

namespace App\Http\Controllers;

use App\Models\Recipe;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        $recipes = new Recipe;

        $recipes->name = $request->name;
        $recipes->slug = $request->slug;
        $recipes->ingredients = $request->ingredients;
        $recipes->description = $request->description;
        $recipes->preparation = $request->preparation;

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('public/recipes/', $filename);
            $recipes->image = $filename;
        }

        $recipes->save();

        return redirect()->route('recipes.index')
            ->with('success','Recipe has been created!');
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
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'ingredients' => 'required',
            'description' => 'required',
            'preparation' => 'required',
        ]);

        $recipes = Recipe::find($id);

        $recipes->name = $request->name;
        $recipes->slug = $request->slug;
        $recipes->ingredients = $request->ingredients;
        $recipes->description = $request->description;
        $recipes->preparation = $request->preparation;

        if (request()->hasFile('image')) {
            $destination = 'public/recipes/'.$recipes->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('public/recipes/', $filename);
            $recipes->image = $filename;
        }

        $recipes->save();

        return redirect()->route('recipes.index')
            ->with('success','Recipe updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $recipes = Recipe::find($id);
        $recipes->delete();

        return redirect()->route('recipes.index')
            ->with('success','Recipe deleted!');
    }
}
