<?php

namespace App\Http\Controllers\Auth;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    function index(){
        $categories=Category::all();
         return view('categories.Create',['categories'=>$categories]);
        
    }
    
       function store(Request $request)
       {
           $name = $request->name;
    
           $categories= new Category();
           $categories->name=$name;
           $categories->save();
           return redirect()->route('insert.categories');
    
       }
       function edit($id){
        $categories=Category::Find($id);
           return view('categories.Update',['edit'=>$categories]);
       }
       function update($id, Request $request)
       {
           $name = $request->name;
           $categories= Category::find($id);
           $categories->name=$name;
           $categories->save();
           return redirect()->route('insert.Categories');
    
       }
       function destroy($ida){
        DB:: table ('categories')->where('id', '=', $ida)->delete();
        return redirect('/insert/Categories');
       }
      }
