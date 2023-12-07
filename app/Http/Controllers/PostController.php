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
            'posts' => $this->getPosts(),
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

    public function getPosts()
    {

        // $posts = Post::all();
        $posts = Post::latest(); // Get all posts if not searching anything
        // $posts = Post::latest()->with('category','author')->get(); //with eager loading

        //if 'search' in request then:
        if (request('search')) {
            $posts
                ->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('body', 'like', '%' . request('search') . '%');
        }

        return $posts->get();

    }


}
