<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;

class Comment extends Model
{
    /**
    * Get the user that owns the phone.
    */

    public function article()
    {
        return $this->belongsTo('App\Article');
    }
    

    

}
