<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
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

    public static function all(): Collection
    {
        return Cache::remember('posts.all',200, function () {
            return collect(File::files(resource_path('posts/')))->map(function ($file) {
                $document = YamlFrontMatter::parseFile($file);
                return new Post(
                    $document->title,
                    $document->body(),
                    $document->excerpt,
                    $document->date,
                    $document->slug
                );
            })->sortByDesc('date');
        });
    }

    public static function find($slug)
    {
        $path = resource_path('posts/' . $slug . '.html');
        if (!file_exists($path)) {
            return false;
        }

        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }

    public static function findOrFail($slug){

        $post = static::find($slug);

        if(!$post){
            throw new ModelNotFoundException();
        }
        return $post;
    }
}
