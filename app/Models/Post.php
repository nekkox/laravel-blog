<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Query\Builder;

class Post extends Model
{
    use HasFactory;

    /*    protected $fillable = [
            'title',
            'body'
        ];*/

    protected $with = ['author', 'category']; //eager loading relationships

    //  protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $fillable =
        ['title', 'excerpt', 'body', 'category_id','user_id','slug', 'thumbnail',
        ];

    //Post belongs to a Category/ One category can have many posts
    public function category(): BelongsTo //category_id
    {
        return $this->belongsTo(Category::class);
        // now we can do : $post->category->name
    }

    public function user(): BelongsTo //user_id
    {
        return $this->belongsTo(User::class);
        // now we can do : $post->author->name
    }

    public function author(): BelongsTo //user_id
    {
        return $this->belongsTo(User::class, 'user_id');
        // now we can do : $post->author->name
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    //Creating query scope functions (automaticly access query Builder)
    public function scopeFilter($query, array $filters)
    {

        //Used when() method of Collections because Models should have access to request
        //the 'search parameter of the request is passed in $filters array
        $query->when(($filters['search'] ?? false), function ($query, $searchedValue) {
            $query->where(fn($query) => $query->where('title', 'like', '%' . $searchedValue . '%')
                ->orWhere('body', 'like', '%' . $searchedValue . '%'));
        });

        //Filter post according to their category
        $query->when(($filters['category'] ?? false), fn($query, $category) => $query->whereExists(fn($query) => $query->from('categories')
            ->whereColumn('categories.id', 'posts.category_id')
            ->where('categories.slug', $category))
        );

        //Filter post according to their author

        $query->when(($filters['author'] ?? false), fn($query, $author) => $query->whereExists(fn($query) => $query->from('users')
            ->whereColumn('users.id', 'posts.user_id')
            ->where('users.username', $author))
        );
        /*
        $query->when(($filters['author'] ?? false), fn($query, $author) =>
        $query->whereHas('author', fn($query)=>$query->where('username', $author))
        );
        */
        //Give Post with specific category given in request
        //or we can use whereHas method
        /*
        $query->when(($filters['category'] ?? false), fn($query, $category) =>
        $query->whereHas('category', fn($query)=> $query->where('slug', $category)));
    */
    }
}
