<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\View\View;

class PostController extends Controller
{
    //Show all posts
    public function index()
    {
        /* DB::listen(function ($query){
             logger($query->sql, $query->bindings);
         });*/

        return view('posts.index')->with([
            //is 'search param in request then filter() else we get all posts
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString(), //filter is query scope function created inside Post Model
           // 'categories' => Category::all(),
            //'currentCategory'=> Category::firstWhere('slug', request('category'))
        ]);

    }

    //show single post
    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post,
        ]);
    }

}
