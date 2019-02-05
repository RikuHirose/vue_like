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


    public static function defaultLiked($post, $user_auth_id)
    {
      // $defaultLiked = $post->likes->where('user_id', $user_auth_id)->first();

      $defaultLiked = 0;
      foreach ($post['likes'] as $key => $like) {
          if($like['user_id'] == $user_auth_id) {
            $defaultLiked = 1;
            break;
          }
      }

      if(count($defaultLiked) == 0) {
            $defaultLiked == false;
        } else {
            $defaultLiked == true;
        }

      return $defaultLiked;
    }


}
