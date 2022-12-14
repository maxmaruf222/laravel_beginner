<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Ramsey\Uuid\Builder\FallbackBuilder;

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

Route::prefix('blog')->group(function(){
    Route::get('/index', [PostController::class, 'index']);
    Route::get('/create', [PostController::class, 'create']);
    Route::get('/show', [PostController::class, 'show']);
    //URL like http://127.0.0.1:8000/blog/index
    Route::get('/{id}', [PostController::class, 'show'])->name('blog.show');
    
});

    

//fallback route
Route::fallback(function(){
    return view('fallback.index');
});