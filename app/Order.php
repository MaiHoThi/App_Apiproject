<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\User;
class Order extends Model
{
    function product()
    {
     return $this->belongsTo('App\Product','image_id','id');
    }
    function user()
    {
     return $this->belongsTo('App\User','user_id','id');
    }
}
