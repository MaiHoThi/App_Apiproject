<?php

namespace App\Http\Controllers\Auth;
use App\Comment;
use App\Product;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
   function index(){
    $products=Product::all();
    $categories=Category::all();
    foreach($products as $product){
        $product->category;
    }
     return view('products.Create',['products'=>$products],['categories'=>$categories]);
    
}
function sortBy()
{
    $categories=Category::all();
    $products=Product::all()->sortBy('price'); 
    return view('products.Create',['products'=>$products],['categories'=>$categories]);
}
function sortByDesc()
{ 
    $categories=Category::all();
//sắp xếp giảm dần
$products=Product::all()->sortByDesc('price'); 
return view('products.Create',['products'=>$products],['categories'=>$categories]);
}

   function store(Request $request)
   {
       $name = $request->name;
       $code =random_int(100,400);
       $filePath =$request->file("image")->store("public");
       $old_price = $request->old_price;
       $price = $request->price;
       $detail = $request->detail;
       $category_id = $request->category_id;

       $images= new Product();
       $images->name=$name;
       $images->code=$code;
       $images->image='/storage/'.$filePath;
       $images->old_price=$old_price;
       $images->price=$price;
       $images->detail=$detail;
       $images->category_id=$category_id;
       $images->save();
       return redirect()->route('insert.image');
       

   }
   function edit($id){
    $categories=Category::all();
       $products=Product::find($id);
       return view('products.Update',['edit'=>$products],['categories'=>$categories]);
   }
   function update($id, Request $request)
   {
       $name = $request->name;
       $code =random_int(100,400);
       $filePath =$request->file("image")->store("public");
       $old_price = $request->old_price;
       $price = $request->price;
       $detail = $request->detail;
       $category_id = $request->category_id;

       $images= Product::find($id);
       $images->name=$name;
       $images->code=$code;
       $images->image='/storage/'.$filePath;
       $images->old_price=$old_price;
       $images->price=$price;
       $images->detail=$detail;
       $images->category_id=$category_id;
       $images->save();
       return redirect()->route('insert.image');

   }
   function destroy($ida){
    DB:: table ('products')->where('id', '=', $ida)->delete();
    return redirect('/insert/image');
   }
  

}