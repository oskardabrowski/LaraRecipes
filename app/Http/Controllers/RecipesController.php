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
}
