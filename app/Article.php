<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;

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
