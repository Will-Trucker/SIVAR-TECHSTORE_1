<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Cart;
use DB;

class CartController extends Controller
{
    //
    public function adde(Request $request){
        $p = Product::find($request->id);
        Cart::add(array(
            "id" => $p->id,
            "name" => $p->nombre,
            "price" => $p->precio,
            "quantity" => 1, 
            "attributes" => array(
                "image" => $p->foto,
                "slug" => $p->slug
            ) 
            ));
            return redirect()->back()->with("success_message","Producto $p->nombre agregado");
    }

   //Vista Carrito
    public function cart(){
      return view('cart');
    }

    //Quitar un producto del carrito
    public function removeitem(Request $request){
      Cart::remove([
        'id' => $request->id,
      ]);
      return back()->with('success', "Producto Eliminado Satisfactoriamente");
    }

    //Limpiar el  carrito
    public function clear(){
        Cart::clear();
        return back()->with('success', "Carrito de Compras Vacio");
    }
    
    

    
}