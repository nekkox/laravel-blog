<?php

use App\Http\Controllers\PostController;
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

Route::get('/posts/{post}', function ($slug) {
    $path = resource_path('posts/' . $slug . '.html');

    if (!file_exists($path)) {
        return redirect('/', 302);
    }

    //cache the file for 10 secs
    $post = cache()->remember("posts/{$slug}", 10, function () use ($path) {
        return file_get_contents($path);
    });
    // $post = file_get_contents($path);

    return view('posts.post', [
        'post' => $post
    ]);
})->where('post', '[A-z\-_]+');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
