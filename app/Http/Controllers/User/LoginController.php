<?php

namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\Auth;
use \Firebase\JWT\JWT;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
class LoginController extends Controller
{
    function index(){
        $responData=User::all();
        return view('dashboard.users',['users'=>$responData]);
    }
    function destroy($ida){
        DB:: table ('users')->where('id', '=', $ida)->delete();
        return redirect('/admin/dashboard/user');
       }
      
    function login(Request $request)
    {
        $credentials = $request->only('email','password');
        $key ="PNV21A HoThiMai";      
        if(Auth::Attempt($credentials)){
         $user = Auth::user();
         $userId = $user->id;
         $data =array(
         "user_id"=>$userId
         );
           $token = JWT::encode($data, $key);
           $responData = array("user_id"=>$token);
           return response()->json($responData,200);
        }else{
            $array = array("user_id"=>null);
             return response()->json($array,400);
        }  
    }
     function profile($id){
        $user = DB::table('users')->where('id',$id)->first();
        return json_encode($user);
    }
   
    function getProfile(){
        $token = request()->header("Authorization");
        $key ="PNV21A HoThiMai";
        $data = JWT::decode($token, $key, array('HS256'));
  
        $user = DB::table('users')->find($data->user_id);
        $responData = array("user"=>$user);

        return response()->json($responData, 200);
    }
  
}
