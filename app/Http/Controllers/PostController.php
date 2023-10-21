<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //Show all posts
    public function index()
    {
        return view('posts.posts');
    }
}
