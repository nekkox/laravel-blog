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
    if (file_exists(resource_path('posts/'.$slug.'.html'))){
        $post= file_get_contents(resource_path('posts/'.$slug.'.html'));

        return view('posts.post',[
            'post' => $post
        ]);
    }

    return redirect('/');



});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
