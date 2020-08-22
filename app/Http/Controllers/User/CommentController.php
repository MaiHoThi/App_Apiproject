<?php

namespace App\Http\Controllers\User;
use App\Comment;
use App\Comment_Video;
use Illuminate\Support\Facades\Auth;
use \Firebase\JWT\JWT;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
class CommentController extends Controller
{
    function index($id)
    {
        $comments=Comment::where('image_id',$id)->get();
        return json_encode($comments);
    }
function count()
{
    $count =Comment::all()->count();
    return json_encode($count);

}
    function destroy($ida){
        DB:: table ('comments')->where('id', '=', $ida)->delete();
        return redirect('/admin/dashboard/comments');
       }

    function dashboard(){
        $comments= Comment::all();
        foreach($comments as $comment){
            $comment->product;
            $comment->user;

        }
     return view('dashboard.comments',['comments'=>$comments]);
    }
    
    function comment(Request $request){
        $comment=$request->comment;
        $image_id= $request->image_id;
        $user_id = $request->user_id;
        $key ="PNV21A HoThiMai";
        $data = JWT::decode($user_id, $key, array('HS256'));
        $user_id = $data->user_id;
        DB::table('comments')->insert(['comment'=>$comment,'user_id'=>$user_id, 'image_id'=>$image_id]);
    }
    // video
    function indexvideo($id)
    {
        $comments= DB::table('comments_videos')->where('video_id',$id)->get();
        return json_encode($comments);
    }
    function comment_videos(Request $request){
        $comment=$request->comment;
        $video_id= $request->video_id;
        $user_id = $request->user_id;
        $key ="PNV21A HoThiMai";
        $data = JWT::decode($user_id, $key, array('HS256'));
        $user_id=$data->user_id;

       DB::table('comments_videos')->insert(['comment'=>$comment,'user_id'=>$user_id, 'video_id'=>$video_id]);
        // // return response()->json($data, 200);
    }
    function videos(){
        $comments= Comment_Videos::all();
        foreach($comments as $comment){
            $comment->product;
            $comment->user;

        }
     return view('dashboard.comments',['comments'=>$comments]);
        // echo json_encode($comments,JSON_PRETTY_PRINT);

    }

    function delete($ida){
        DB:: table ('comments_videos')->where('id', '=', $ida)->delete();
        return redirect('/admin/dashboard/comments');
       }

   
}
