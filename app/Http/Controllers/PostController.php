<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    //Show all posts
    public function index()
    {
        $posts = Post::all();
        //ddd($posts);
        return view('posts.posts')->with(['posts'=>$posts]);
    }
}
