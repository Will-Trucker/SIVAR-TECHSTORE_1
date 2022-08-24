<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Product;


class VistapController extends Controller

{
    public function productos($category = null){
        if (isset($category) &&  $category != '') {
            $prod = Product::where('categoria', $category)->paginate(5);
        }else {
            $prod = Product::paginate(6);
        }
        return view('viewp', ['datos'=>$prod]);
    }

    public function detalle($id = null){
      if (isset($id) && $id !=''){
        $prod = Product::where('id', $id)->get();
      }else{
        $prod = Product::show();
      }
      return view('detalle', ['producto'=>$prod]);
    }


}
