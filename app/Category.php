<?php

namespace App;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    function category()
   {
    return $this->belongsTo('App\Product','id','category_id');
   }
}
