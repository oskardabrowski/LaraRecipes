<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function index()
    {
        return view('pages.index', [
            'recipes' => Recipe::all()
        ]);
    }
    public function SingleRecipe(Recipe $recipe)
    {
        return view('pages.recipe', [
            'recipe' => $recipe
        ]);
    }
    public function EditRecipe(Recipe $recipe)
    {
        return view('pages.edit', [
            'recipe' => $recipe
        ]);
    }

    public function Create()
    {
        return view('pages.create');
    }

    public function DestroyRecipe(Recipe $recipe) {
        $recipe->delete();
        return redirect('/')->with('message', 'Recipe Deleted!');
    }

    public function Save(Request $request) {
        // dd($request);
        $formFields = $request->validate([
            'title' => 'required',
            'type' => 'required',
            'description' => 'required'
        ]);

        $formFields['user_id'] = auth()->id();

        if($request->hasFile('image')) {
            $formFields['image'] = strval($request->file('image')->store('image', 'public'));
            // dd($request->file('image')->store('images', 'public'));
        }

        // dd($formFields);


        Recipe::create($formFields);

        return redirect('/')->with('message', 'Recipe Created!');
    }

    public function UpdateRecipe(Request $request, Recipe $recipe) {
        // dd($request);
        if($recipe->user_id != auth()->id()) {
            abort(403, 'Unauthorized action');
        }

        $formFields = $request->validate([
            'title' => 'required',
            'type' => 'required',
            'description' => 'required',
        ]);

        if($request->hasFile('image')) {
            $formFields['image'] = strval($request->file('image')->store('image', 'public'));
            // dd($request->file('image')->store('images', 'public'));
        }


        // dd($formFields);

        $recipe->update($formFields);

        return redirect('/')->with('message', 'Recipe Updated!');
    }
}
