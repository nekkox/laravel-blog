<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();
Route::get('/dog/{name}', function ($name){
ddd(App\Models\User::first()->posts());
    return 'hello';
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index'])->name('posts');

//Post::where('slug', $post)->first();
Route::get('/posts/{post}', function (Post $post) {
    //Find a post by its slug and pass it to a view called "post"

    return view('posts.post', [
        'post' => $post,
    ]);
})->where('post', '[A-z\-_1-9]+')->name('posts2');


Route::get('/categories/{category:slug}', function (Category $category) {

    return view('posts.posts', [
        'posts' => $category->posts->load(['category', 'author']) //eager loads the given relationships
    ]);
})->name('categories');


Route::get('/authors/{author:username}', function (User $author) {

    return view('posts.posts', [
        'posts' => $author->posts->load(['category', 'author'])
    ]);
})->name('authors');


