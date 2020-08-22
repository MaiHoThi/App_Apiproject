<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Video;
use App\User;

class Comment extends Model
{
    function product()
    {
        return $this->hasMany('App\Product','id','image_id');

    }
    function user()
    {
        return $this->hasMany('App\User','id','user_id');

    }
    
}
