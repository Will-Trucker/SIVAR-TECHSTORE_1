<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Product;


class VistapController extends Controller

{
    public function productos($category = null){
        if (isset($category) &&  $category != '') {
            $prod = Product::where('categoria', $category)->paginate(2);
        }else {
            $prod = Product::paginate(5);
        }
        return view('viewp', ['datos'=>$prod]);
    }


}