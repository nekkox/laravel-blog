<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\View\View;

class PostController extends Controller
{
    //Show all posts
    public function index(): View
    {
        /* DB::listen(function ($query){
             logger($query->sql, $query->bindings);
         });*/

        return view('posts.posts')->with([
            //is 'search param in request then filter() else we get all posts
            'posts' => Post::latest()->filter()->get(), //filter is query scope function created inside Post Model
            'categories' => Category::all()
        ]);
    }

    //show single post
    public function show(Post $post)
    {
        return view('posts.post', [
            'post' => $post,
        ]);
    }

}
