<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function __invoke(\App\Services\Newsletter $newsletter)
    {
        request()->validate(['email' => 'required|email']);

        try {
            $newsletter->subscribe(request('email'));
        } catch (Exception $e) {
            throw \Illuminate\Validation\ValidationException::withMessages(['email' => 'This email couldnt be added to our newsletter list']);
        }
        return redirect('/posts')->with('success', 'you are now singed up for newsletter!');
    }
}
