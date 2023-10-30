<?php

namespace App\Http\Controllers;

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

        $posts = Post::latest()->with('category','author')->get(); //eager loading
       // $posts = Post::all();

        return view('posts.posts')->with([
            'posts'=>$posts
        ]);
    }
}
