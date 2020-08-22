<?php

namespace App;
use App\Video;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Comment_Video extends Model
{
    function product()
    {
        return $this->hasMany('App\Video','id','image_id');

    }
    function user()
    {
        return $this->hasMany('App\User','id','user_id');

    }
    
}
