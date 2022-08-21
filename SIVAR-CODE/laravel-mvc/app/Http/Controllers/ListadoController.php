<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use DB;


class ListadoController extends Controller
{
    //
    public function index(){
        $query= DB::table('product')->paginate(10); 
        return view('listado', ['datos'=>$query]);
    }

    public function editarp($id){
         $campos=DB::table('product')->find($id); //find lo que hara es encontrar el id del producto

         return view('editarp',compact('campos'));
    }

    public function delete($id){
      Product::find($id)->delete();  
      return redirect()->back();
    }
}