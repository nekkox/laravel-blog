<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class PostController extends Controller
{
    //Show all posts
    public function index(): View
    {
        $posts = Post::all();

        return view('posts.posts')->with([
            'posts'=>$posts
        ]);
    }
}
