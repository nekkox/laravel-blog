<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class PostController extends Controller
{
    public static string $lastReqx = '';

    //Show all posts
    public function index(Request $request)
    {
        //AUTHORIZATION
        //$this->authorize('admin'); //automatically returns 403 if not authorized
        //if the logged user is admin then do sth
       //Gate::allows('admin');
       //auth()->user()->can('admin');

        /* DB::listen(function ($query){
             logger($query->sql, $query->bindings);
         });*/
        // self::$lastReqx = request()->fullUrl();
        return view('posts.index')->with([
            //is 'search param in request then filter() else we get all posts
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString(),
            'lastReq' => self::$lastReqx//filter is query scope function created inside Post Model
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
