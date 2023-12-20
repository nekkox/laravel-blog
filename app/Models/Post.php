<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    //Post belongs to a Category/ On category can have many posts
    public function category():BelongsTo //category_id
    {
        return $this->belongsTo(Category::class);
        // now we can do : $post->category->name
    }

    public function user():BelongsTo //user_id
    {
        return $this->belongsTo(User::class);
        // now we can do : $post->author->name
    }

    public function author():BelongsTo //user_id
    {
        return $this->belongsTo(User::class, 'user_id');
        // now we can do : $post->author->name
    }

    //Creating query scope functions (automaticly access query Builder)
    public function scopeFilter($query, array $filters)
    {
        //Used when() method of Collections because Models should have access to request
        //the 'search parameter of the request is passed in $filters array
        $query->when(($filters['search'] ?? false), function ($query, $searchedValue){

            $query
                ->where('title', 'like', '%' . $searchedValue . '%')
                ->orWhere('body', 'like', '%' . $searchedValue . '%');

        });
    }

}
