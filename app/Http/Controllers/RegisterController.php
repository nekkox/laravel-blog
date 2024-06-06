<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function create(): View
    {
        return view('register.create');
    }

    public function store()
    {

        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'max:255', 'min:3', Rule::unique('users', 'username')],
            'email' => 'required|email|max:255',
            'password' => ['required', 'min:7', 'max:255'],
        ]);

        // $attributes['password'] =bcrypt($attributes['password']);
        $user = User::create($attributes);

        session()->flash('success', 'Your accoutn has been created successfully');
        //flash message can be written as:
        //return redirect('/')->with 'Your accoutn has been created successfully');

        //sign in created user
        auth()->login($user);

        return redirect('/posts/');
    }
}
