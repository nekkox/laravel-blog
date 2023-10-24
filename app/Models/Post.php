<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{

    public string $title;
    public string $body;
    public string $excerpt;
    public string $date;
    public $slug;


    public function __construct(string $title, string $body, string $excerpt, string $date, $slug)
    {
        $this->title = $title;
        $this->body = $body;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->slug = $slug;
    }


    public static function find($slug)
    {
        $path = resource_path('posts/' . $slug . '.html');

        if (!file_exists($path)) {
            throw new ModelNotFoundException();
        }
        $data = YamlFrontMatter::parseFile($path);

        return  new Post($data->title, $data->body(), $data->excerpt, $data->date, $data->slug);

        // return cache()->remember("posts{$slug}", 1000, fn() => new Post($data->title, $data->body(), $data->excerpt, $data->date, $data->slug)   );
        //file_get_contents($path)
    }

    public static function all()
    {
        $files = File::files(resource_path('posts/'));

        $posts =  array_map( function ($file) {
            $document = YamlFrontMatter::parseFile($file);
            return new Post(
                $document->title,
                $document->body(),
                $document->excerpt,
                $document->date,
                $document->slug
            );

        }, $files);

        return $posts;
    }
}
