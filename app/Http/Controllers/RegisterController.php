<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function create(): View
    {
        return view('register.create');
    }

    public function store(): View
    {

      $attributes = request() -> validate([
            'name' =>'required|max:255',
            'username' => 'required|max:255|min:3',
            'email' => 'required|email|max:255',
            'password' => ['required','min:7', 'max:255'],
        ]);

      User::create($attributes);
      ddd("user created");
        return view('register.store');
    }
}
