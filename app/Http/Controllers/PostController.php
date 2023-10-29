<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class PostController extends Controller
{
    //Show all posts
    public function index(): View
    {
       /* DB::listen(function ($query){
            logger($query->sql, $query->bindings);
        });*/

        $posts = Post::with('category')->get();
       // $posts = Post::all();

        return view('posts.posts')->with([
            'posts'=>$posts
        ]);
    }
}
