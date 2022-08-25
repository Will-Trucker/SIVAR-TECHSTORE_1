<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Cart;

class CartController extends Controller
{
    //
    public function adde(Request $request){
        $producto = Product::find($request->id);
        Cart::add(array(
            "id" => $producto->id,
            "name" => $producto->nombre,
            "price" => $producto->precio,
            "quantity" => 1,  //Cantidad
            "attributes" => array(
                "image" => $producto->precio,
                "slug" => $producto->slugs
            ) 
            ));
            return redirect()->back()->with("success_message", "Producto $producto->name agregado");
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