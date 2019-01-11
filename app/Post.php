<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'id', 'user_id', 'content'
    ];

    public function likes()
    {
        return $this->hasMany('App\Like', 'post_id', 'id');
    }
}
