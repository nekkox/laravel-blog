<?php

namespace App\Core;
class Post
{
    private static $path;


    public static function find($slug)
    {

        self::$path  = resource_path('posts/' . $slug . '.html');

        if (!file_exists( self::$path)) {
           return to_route('posts');
        }

        return file_get_contents(self::$path);

    }
}
