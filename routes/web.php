<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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


Route::get('/home', function () {
    return view('home', [
        "title" => "home",
        'active' => 'home'
        
     
    ]);
});

Route::get('/about', function () {
    return view('about', [
       "title" => "about",
       'active' => 'about',
        "h1" => "halaman about",
        "name" => "penaldo"

    ]);
});



Route::get('/blog', [PostController::class, 'index']);
Route::get('/posts/{post:slug}',[PostController::class, 'show']);

Route::get('/categories', function() {
  return view('/categories',[
      'title' => 'Post Categories',
      'active' => 'categories',
      'categories' => Category::all()
  ]);
});


Route::get('/categories/{category:slug}', function(Category $category) {
     return view('posts', [
        'title' => "Post By Category : $category->name",
        'active' => 'categories',
        'posts' => $category->posts->load('category', 'author'),
       
     ]);
 });


 Route::get('/authors/{author:username}', function(User $author) {
    return view('posts', [
        'title' => "Post By Author : $author->name",
        'active' => 'categories',
        'posts' => $author->posts->load('category', 'author'),

    ]);
 });
