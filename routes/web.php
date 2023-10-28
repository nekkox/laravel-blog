<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index'])->name('posts');

//Post::where('slug', $post)->first();
Route::get('/posts/{post}', function (Post $post) {
    //Find a post by its slug and pass it to a view called "post"

   // $post = $post::find($post)->firstOrFail();
   // $posts = Post::all();
    //$post = $posts->find($post)->firstOrFail();
   // ddd($post);



    return view('posts.post', [
        'post' => $post,
    ]);
});//->where('post', '[A-z\-_1-9]+');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
