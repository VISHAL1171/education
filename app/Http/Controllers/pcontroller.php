<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\Http\Requests;

class pcontroller extends Controller
{

        public function index(){
            $product =product::all();
            return view('product.index')->with('product',$product);
        }
        public function create(){
            return view('product.create');
        }
        public function store(Request  $request){
            $product = new Product;
            $product->name=$request->name;
            $product->price=$request->price;
            $product->id=$request->id;
            $product->save();
            return 'something';
        }

}
