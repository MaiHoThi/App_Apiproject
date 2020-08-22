<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Size;
class SizeController extends Controller
{
    function index(){
        $sizes=Size::all(); 
    return json_encode($sizes);        
    }
}
