<?php

namespace App;
use App\Category;
use Illuminate\Database\Eloquent\Model;
use App\Comment;
class Product extends Model
{
   function product()
   {
    return $this->belongsTo('App\Comment','id','image_id');
   }
   function category()
   {
    return $this->belongsTo('App\Category','category_id','id');
   }
}
