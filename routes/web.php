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
    return view('dog');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () { return view('welcome');})->name('root');

Route::get('/posts', [PostController::class, 'index'])->name('MainPosts');

//Post::where('slug', $post)->first();
//Find a post by its slug and pass it to a view called "post"
Route::get('/posts/{post}', [PostController::class, 'show'])
    ->where('post', '[A-z\-_1-9]+')->name('posts2');


Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts.index', [
        'posts' => $category->posts->load(['category', 'author']), //eager loads the given relationships
       // 'categories'=>Category::all()->load(['posts']),
        //'currentCategory' => $category,
    ]);
})->name('categories');


Route::get('/authors/{author:username}', function (User $author) {
    return view('posts.index', [
        'posts' => $author->posts->load(['category', 'author']),
       // 'categories'=>Category::all()->load(['posts'])
    ]);
})->name('authors');

//Create new user
Route::get('/registeruser', [\App\Http\Controllers\RegisterController::class, 'create']);
Route::post('/registeruser', [\App\Http\Controllers\RegisterController::class, 'store']);

Route::get('dogs/{nameofdog?}',
function($nameofdog = null) {

    $dogs = ["Vego", "Beco", "Axel" ,"Vitto"];
    $theDogs = collect($dogs);
return view('test', ['dogs'=> $theDogs]);
}

)->name('dogs');

Route::get('/json', function() {
    return ['dog'=>'vego'];
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/contact', function() {
    return view('contact');
});
