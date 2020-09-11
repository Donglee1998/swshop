<?php

namespace App\Http\Controllers;

use App\product;
use App\type_product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        $product = product::all();
        $new_product = product::where('new',1)->paginate(4);
        $product_sale = product::where('promotion_price','>',0)->paginate(4);
        return view('trangchu',compact('product','new_product','product_sale'));
    }
    public function getloaisp($type){
        $product = product::where('id_type',$type)->get();
        return view('product',compact('product'));
    }
    public function getchitietsp($id){
        $detail_product = product::where('id',$id)->first();
        return view('product-detail',compact('detail_product'));
    }

    public function cart(){
        return view('cart');
    }
}
