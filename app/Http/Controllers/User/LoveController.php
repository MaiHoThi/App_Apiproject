<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Firebase\JWT\JWT;
use App\Love;
use Illuminate\Support\Facades\DB;
class LoveController extends Controller
{
    function dashboard($id)
    {
     $loves = DB::table('loves')->where('image_id',$id)->get();
     return json_encode($loves);   
    }
    function loves(Request $request){
        $image_id= $request->image_id;
        $user_id = $request->user_id;
        $key ="PNV21A HoThiMai";
        $data = JWT::decode($user_id, $key, array('HS256'));
        $user_id = $data->user_id;
       DB::table('loves')->insert(['user_id'=>$user_id, 'image_id'=>$image_id]);
    }
    function index($id)
    {
     $loves = DB::table('lovesvideos')->where('video_id',$id)->get();
     return json_encode($loves);   
    }
    function videos(Request $request){
        $video_id= $request->video_id;
        $user_id = $request->user_id;
        $key ="PNV21A HoThiMai";
        $data = JWT::decode($user_id, $key, array('HS256'));
        $user_id = $data->user_id;
       DB::table('lovesvideos')->insert(['user_id'=>$user_id, 'video_id'=>$video_id]);
    }
}
