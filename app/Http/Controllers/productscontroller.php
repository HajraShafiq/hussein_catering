<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

class productscontroller extends Controller
{
    function Adddata(Request $req){

        $products = new products;
        $products->name = $req['name'];
        $products->price = $req['price'];
        $products->description = $req['description'];
        $products->cate_id = $req['cate_id'];
        $products->media_file = $req['media_file'];
    
          $products->save();
         return redirect('products');
    
          print_r($req->all());
    
    
    
     }


     
 function view(){

    $products = products::all();
   
     return view('products',['record'=>$products]);
 
    
 //  return redirect('view-career-cate', compact('add_career_cate'));
 //  return redirect()->route('view-career-cate',compact('add_career_cate'));
    
 // echo "<pre>";
 //       print_r( $add_career_cate->toArray());
 // echo "</pre>";
  }


  function delete($id){
    $products = products::find($id);
    $products->delete();
    return redirect('products');
  }
}
