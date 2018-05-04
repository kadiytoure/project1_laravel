<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
    * Get the user that owns the phone.
    */

    public function article()
    {
        return $this->belongsTo('App\Article');
    }

class Article extends Model
{
    /**
    * Get the comments for the Article.
    */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
}
