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

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    //Post belongs to a Category/ Onw category can have many posts
    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
        // now we can do : $post->category->name
    }

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
        // now we can do : $post->author->name
    }

}
