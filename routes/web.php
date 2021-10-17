<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Hilmi Maulana Mukhlis',
        'job' => 'Programmer'
    ]);
});

Route::get('blog', [PostController::class, 'index']);
Route::get('blog/{post:slug}', [PostController::class, 'post']);
Route::get('categories', function () {
    return view('categories', [
        'title' => 'Categories',
        'categories' => Category::all()
    ]);
});
Route::get('category/{category:slug}', function (Category $category) {
    return view('blog', [
        'title' => "Post in : $category->name",
        'posts' => $category->posts->load(['author', 'category'])
    ]);
});
Route::get('author/{author:username}', function (User $author) {
    return view('blog', [
        'title' => "Post by : $author->name",
        'posts' => $author->posts->load(['author', 'category'])
    ]);
});
