<?php

namespace App\Http\Controllers\User;
use App\Product;
use App\Video;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index(){
        $products=Product::all(); 
    return json_encode($products);        
    }
    function indexvideo(){
        $videos=Video::all(); 
    return json_encode($videos);        
    }

    function category(){
        $categories=Category::all(); 
    return json_encode($categories);   

    }
    function getCategory($id){
        $categories=Product::where('category_id',$id)->get();
        return json_encode($categories);
    }
// DETAIL

    function getIdImage($id){
        $products = Product::where('id',$id)->get();
        return json_encode($products);
    }
    function getIdVideo($id){
        $videos=Video::where('id',$id)->get();
        return json_encode($videos);
    }
    function getIdImageq($id){
        $products = Product::where('id',$id)->get();
        $cate = Category::find($products->category_id);
        // $products->nameCategory = $cate->name;
        return json_encode($products);
    }
    // search
    function search(Request $request)
    {
        $q =$request->search;
        $search = Product::where('name','LIKE','%'.$q.'%')->orWhere('price','LIKE','%'.$q.'%')->get();
        return json_encode($search);
    }
    
}
