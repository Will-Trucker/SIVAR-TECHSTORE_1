<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class AgregarController extends Controller
{
    //
    public function add(Request $request){
      //  dd($request);
      try{
         DB::beginTransaction(); 
         $cat = new Category;
         $cat->nombre = $request->get('nombre');

         if ($request->hasFile('archivo')){
            $foto = $request->file('archivo');
            $foto->move(public_path().'/categorias/', $foto->getClientOriginalName());
            $cat->imagen = $foto->getClientOriginalName();
      }
      $cat->save();
      DB::commit();
    } catch (Exception $e){
        DB::rollback();
    }
    return back()->with('message',  '<br> Gracias');  //mensaje de confirmacion
  }
}