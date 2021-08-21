<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\User;


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

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);

Route::get('/posts', [PostController::class, 'index']);
//halaman single post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);


Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all(),
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Posts Sorted by: $category->name",
        'active' => 'categories',
        'posts' => $category->posts,
    ]);
});

Route::get('/author/{author:username}', function (User $author) {
    return view('posts', [
        'title' => "Posts Created by: $author->name",
        'active' => 'posts',
        'posts' => $author->posts->load('author', 'category')
    ]);
});
