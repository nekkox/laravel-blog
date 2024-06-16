<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostCommentsController extends Controller
{
    public function store(Request $request, Post $post){
     //   ddd(auth()->user()->id);
        request()->validate(['body'=>'required']);

        $post->comments()->create([
          'body'=>$request->get('body'),
            'user_id'=>auth()->id(),
            'post_id'=>$post->id,
          ]);


        return redirect()->back()->with('success', 'Comment added successfully!!');

    }
}
