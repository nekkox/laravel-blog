<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class  User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function posts():HasMany
    {
        return $this->hasMany(Post::class);
    }

    /*
    //MUTATOR - alter the data before it is set on an Eloquent model attribute
    public function setUsernameAttribute($username){
        $this->attributes['username'] = strtoupper($username);
    }
*/

  /*
    //ACCESSOR - format Eloquent model attributes when you retrieve them from the database
    public function getUsernameAttribute($username){
        $this->attributes['username'] = strtolower($username);
    }
*/
}
