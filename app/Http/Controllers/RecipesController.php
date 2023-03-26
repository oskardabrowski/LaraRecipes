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

    public function Create()
    {
        return view('pages.create');
    }

    public function Save(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'type' => 'required',
            'description' => 'required'
        ]);

        Recipe::create($formFields);

        return redirect('/');
    }
}
