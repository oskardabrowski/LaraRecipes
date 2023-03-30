<?php

use App\Http\Controllers\RecipesController;
use App\Http\Controllers\UserController;
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

Route::get('/recipe/{recipe}/edit', [RecipesController::class, 'EditRecipe'])->middleware('auth');

Route::put('/recipe/{recipe}', [RecipesController::class, 'UpdateRecipe'])->middleware('auth');

Route::delete('/recipe/{recipe}', [RecipesController::class, 'DestroyRecipe'])->middleware('auth');

Route::get('/recipe/{recipe}', [RecipesController::class, 'SingleRecipe']);

Route::post('/create', [RecipesController::class, 'Save'])->middleware('auth');

Route::get('/create', [RecipesController::class, 'Create'])->middleware('auth');

Route::get('/profile', [UserController::class, 'userProfile'])->middleware('auth');

Route::post('/register', [UserController::class, 'CreateUser']);

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::post('/login', [UserController::class, 'authenticate']);

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

Route::get('/register', [UserController::class, 'registerUser'])->middleware('guest');
