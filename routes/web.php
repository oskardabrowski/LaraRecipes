<?php

use App\Http\Controllers\RecipesController;
use App\Models\Recipe;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('pages.index', [
//         'recipes' => Recipe::all()
//     ]);
// });

Route::get('/', [RecipesController::class, 'index']);

Route::get('/create', function () {
    return view('pages.create');
});
