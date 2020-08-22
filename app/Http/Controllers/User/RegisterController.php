<?php

namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    function register(Request $request){

        $name=$request->name;
        $email=$request->email;
        // $image=$request->image;
        $password=Hash::make($request->password);
        $role=$request->role;
        
        DB::table('users')->insert([
            'name'=>$name,'email'=>$email,'password'=>$password,'role'=>$role
        ]);
    }
}
