<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;

class categoriescontroller extends Controller
{
    function Adddata(Request $req){

        $categories = new categories;
        $categories->name = $req['name'];
    
          $categories->save();
         return redirect('categories');
    
         // print_r($req->all());
    
    
    
     }
     function view(){

        $categories = categories::all();
       
        return view('categories',['record'=>$categories]);
     
        
     //  return redirect('view-career-cate', compact('add_career_cate'));
     //  return redirect()->route('view-career-cate',compact('add_career_cate'));
        
     // echo "<pre>";
     //       print_r( $add_career_cate->toArray());
     // echo "</pre>";
      }

      function delete($id){
        $categories = categories::find($id);
        $categories->delete();
        return redirect('categories');
      }
    
}
