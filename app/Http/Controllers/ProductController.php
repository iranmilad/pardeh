<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($id){
        //return "Product Number: $id";
        if(is_numeric($id))
            $product = Product::where("id",$id)->first();
        else
            $product = Product::where("title",$id)->first();


        return view('product',compact('product'));
    }
}
