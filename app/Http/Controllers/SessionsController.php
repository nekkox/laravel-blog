<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function destroy(){

        auth()->logout();
       return redirect('/posts')->with(['success', 'Goodbye']);
    }

    public function create(){

       return view('sessions.create');
    }

    public function store(Request $request){

        //validate request

        $attr = $request->validate([
            'email' =>'required|email',
            'password' =>'required'
        ]);

        //attempt to authenticate and login the user
        //redirect with flash message

        if(Auth::attempt($attr)){
            return redirect('/posts/')->with('success', 'Welcome Back!!');
        }

        //auth failed
       //throw ValidationException::withMessages(['email' => 'Your provided credintials could not be verified']);
      //  return back()->withInput()->withErrors(['email' => 'Your provided credintials could not be verified']);
        return back()->withErrors([
            'email' => 'Your provided credentials could not be verified.'
        ])->withInput();
    }

}
