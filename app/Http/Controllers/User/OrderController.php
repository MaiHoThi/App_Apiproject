<?php

namespace App\Http\Controllers\USer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Firebase\JWT\JWT;
use App\Order;
use App\Product;
use Illuminate\Support\Facades\DB;
class OrderController extends Controller
{
    function index()
    {
     $orders =Order::all();
     return view('dashboard.orders',['orders'=>$orders]);   
    // return \json_encode($order);
    }
    function dashboard()
    {
     $orders =Order::all();
     return json_encode($orders);   
    }
    function product($id)
    {
     $products = Product::where('id',$id)->get();
     $orders = Order::find($products->image_id);
     $products->nameCategory = $orders->name;
     return json_encode($products);   
    }
    function orders(Request $request){
        $name=$request->name;
        $date=$request->date;
        $address=$request->address;
        $phone=$request->phone;
        $phone1=$request->phone1;
        $image_id= $request->image_id;
        $user_id = $request->user_id;
        $key ="PNV21A HoThiMai";
        $data = JWT::decode($user_id, $key, array('HS256'));
        $user_id=$data->user_id;

       DB::table('orders')->insert(['name'=>$name,'date'=>$date,'address'=>$address,'phone'=>$phone,'phone1'=>$phone1,'user_id'=>$user_id, 'image_id'=>$image_id]);
    }
}
