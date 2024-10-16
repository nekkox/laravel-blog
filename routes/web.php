<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SessionsController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
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
//Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('start');
})->name('root');

Route::get('/posts', [PostController::class, 'index'])->name('MainPosts');

//Post::where('slug', $post)->first();
//Find a post by its slug and pass it to a view called "post"
Route::get('/posts/{post}', [PostController::class, 'show'])
    ->where('post', '[A-z\-_1-9]+')->name('posts2');


Route::get('/categories/{category:slug}', function (Category $category) {
    $posts = $category->posts()->with(['category', 'author'])->paginate(6);

    return view('posts.index', [
        'posts' => $posts,
        //  'posts' => $category->posts->load(['category', 'author']), //eager loads the given relationships
        // 'categories'=>Category::all()->load(['posts']),
        //'currentCategory' => $category,
    ]);
})->name('categories');


Route::get('/authors/{author:username}', function (User $author) {
  //  $posts = $author->posts()->with(['category', 'author'])->paginate(6);
    $posts = $author->posts()->paginate(6);
    $posts->load(['category', 'author']);

    return view('posts.index', [
        'posts' => $posts
        //'posts' => $author->posts->load(['category', 'author']),
        // 'categories'=>Category::all()->load(['posts'])
    ]);
})->name('authors');

//Posting comments
Route::post('/posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

//Create new user
Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'store'])->middleware('guest')->name('register');

Route::get('/login', [SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth')->name('logout');

Route::post('/newsletter',NewsletterController::class );

//Admin
Route::post('/admin/posts',[AdminPostController::class, 'store'])->middleware('AdminsOnly');
Route::get('/admin/posts/create',[AdminPostController::class, 'create'])->middleware('AdminsOnly');
Route::get('/admin/posts',[AdminPostController::class, 'index'])->middleware('AdminsOnly');
Route::get('/admin/posts/{post:id}/edit',[AdminPostController::class, 'edit'])->middleware('AdminsOnly');
Route::patch('/admin/posts/{post:id}',[AdminPostController::class, 'update'])->middleware('AdminsOnly');
Route::delete('/admin/posts/{post:id}',[AdminPostController::class, 'destroy'])->middleware('AdminsOnly');

