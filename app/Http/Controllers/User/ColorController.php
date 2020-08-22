<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Color;
use Illuminate\Support\Facades\DB;

class ColorController extends Controller
{
    function index(){
        $colors=Color::all(); 
    return json_encode($colors);        
    }
}
