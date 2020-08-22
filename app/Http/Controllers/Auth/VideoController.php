<?php

namespace App\Http\Controllers\Auth;
use App\Video;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    function index(){
        $Videos=Video::all();
        $categories=Category::all();
        foreach($Videos as $Video){
            $Video->category;
        }
         return view('Videos.Create',['Videos'=>$Videos],['categories'=>$categories]);
        
    }
    function sortBy()
{
    $categories=Category::all();
    $Videos=Video::all()->sortBy('price'); 
    return view('Videos.Create',['Videos'=>$Videos],['categories'=>$categories]);
}
function sortByDesc()
{ 
    $categories=Category::all();
//sắp xếp giảm dần
$Videos=Video::all()->sortByDesc('price'); 
return view('Videos.Create',['Videos'=>$Videos],['categories'=>$categories]);
}
       function store(Request $request)
       {
           $name = $request->name;
           $code =random_int(100,400);
           $filePath =$request->file("Video")->store("/storage/public");
           $old_price = $request->old_price;
           $price = $request->price;
           $detail = $request->detail;
           $category_id = $request->category_id;
    
           $Videos= new Video();
           $Videos->name=$name;
           $Videos->code=$code;
           $Videos->Video='/storage/'.$filePath;
           $Videos->old_price=$old_price;
           $Videos->price=$price;
           $Videos->detail=$detail;
           $Videos->category_id=$category_id;
           $Videos->save();
           return redirect()->route('insert.video');
    
       }
       function edit($id){
        $categories=Category::all();
           $Videos=Video::find($id);
           return view('Videos.Update',['edit'=>$Videos],['categories'=>$categories]);
       }
       function update($id, Request $request)
       {
           $name = $request->name;
           $code =random_int(100,400);
           $filePath =$request->file("Video")->store("public");
           $old_price = $request->old_price;
           $price = $request->price;
           $detail = $request->detail;
           $category_id = $request->category_id;
    
           $Videos= Video::find($id);
           $Videos->name=$name;
           $Videos->code=$code;
           $Videos->Video='/storage/'.$filePath;
           $Videos->old_price=$old_price;
           $Videos->price=$price;
           $Videos->detail=$detail;
           $Videos->category_id=$category_id;
           $Videos->save();
           return redirect()->route('insert.video');
    
       }
       function destroy($ida){
        DB:: table ('Videos')->where('id', '=', $ida)->delete();
        return redirect('/insert/video');
       }
      
}
