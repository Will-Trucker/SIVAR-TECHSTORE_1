<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Product;
use Cart;

class VistapController extends Controller

{
    public function productos($category = null){
        if (isset($category) &&  $category != '') {
            $prod = Product::where('categoria', $category)->paginate(5); //Producto por categoria
        }else {
            $prod = Product::paginate(6); //Todos los productos
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

    
    public function cartList(){
      $cartItems = \Cart::getContent();
      // dd($cartItems);
      return view('cart', compact('cartItems'));
  }


  public function addToCart(Request $request)
  {
      \Cart::add([
          'id' => $request->id,
          'nombre' => $request->nombre,
          'precio' => $request->precio,
          'attributes' => array(
              'foto' => $request->foto,
          )
      ]);
      session()->flash('success', 'Producto Agregado Satisfactoriamente !');

      return redirect()->route('cart.list');
  }

  public function updateCart(Request $request)
  {
      \Cart::update(
          $request->id,
          [
              'quantity' => [
                  'relative' => false,
                  'value' => $request->quantity
              ],
          ]
      );

      session()->flash('success', '¡Productos Actualizados!');

      return redirect()->route('cart.list');
  }

  public function removeCart(Request $request)
  {
      \Cart::remove($request->id);
      session()->flash('success', 'Producto Eliminado !');

      return redirect()->route('cart.list');
  }

  public function clearAllCart()
  {
      \Cart::clear();

      session()->flash('success', 'No tienes Productos !');

      return redirect()->route('cart.list');
  }
}


