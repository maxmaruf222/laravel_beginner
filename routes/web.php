<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// // Get method 
// Route::get('/blog', [PostController::class, 'index']);
// Route::get('/blog/{id}', [PostController::class, 'show'])->where('id', '[a-zA-z]+');
// Route::get('/blog/{id}/{name}', [PostController::class, 'show'])->where([
//     'id'=>'[0-9]+',
//     'name'=>'[a-zA-Z]+'
// ]);

Route::get('/blog/{id}/{name}', [PostController::class, 'show'])->whereNumber('id')->whereAlpha('name');

// // Post 
// Route::get('/blog/create', [PostController::class, 'create']);
// Route::post('/blog', [PostController::class, 'store']);

// // put and patch 
// Route::get('/blog/edit/1', [PostController::class, 'edit']);
// Route::patch('/blog/{ id }', [PostController::class, 'update']);

// // delete 
// Route::delete('/blog/1', [PostController::class, 'destroy']);


// multiple HTTP verbs 
// Route::match(['GET', 'POST'], 'blog', [PostController::class, 'index']);

//any
// Route::any('/blog', [PostController::class, 'index']);

//view only return view file
// Route::view('/blog', 'index', ['name' =>'Maruf Hassan']);


// Route for invoke method 
Route::get('/', HomeController::class);
 