<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/* use App\Models\Product;
use Cart;*/
class CartController extends Controller
{
    //
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