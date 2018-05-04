<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * Get the comments for the Article.
     *
     * @var array
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
