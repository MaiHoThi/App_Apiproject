<?php

namespace App;
use App\Category;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    function category()
   {
    return $this->belongsTo('App\Category','category_id','id');
   }
}
