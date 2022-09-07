<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Pago;
use Cart;
use App\Models\Product;

class PagoController extends Controller
{
    //
    public function pagos(){
        return view('paga');
    }

    public function agregar(Request $request){

       try{
        $request->validate([
          'cliente' =>  'required', 
          'correo' => 'required |',
          'tarjeta' => 'required | unique:pagos',
          'caducidad' => 'required',
          'cvc' => 'required | int | unique:pagos'
        ]);
        DB::beginTransaction();
        $pago = new Pago;
        $pago->cliente=$request->get('cliente');
        $pago->correo=$request->get('correo');
        $pago->tarjeta=$request->get('tarjeta');
        $pago->caducidad=$request->get('caducidad');
        $pago->cvc=$request->get('cvc');
        $pago->monto=number_format(Cart::getTotal(),2);
        
        Cart::clear();
        $pago->save();

        DB::commit(); //enviar transaccion

       }   catch (Exception $e ) {
        DB::rollback(); //no ejecutar nada si falla
      }    
      return redirect('notificacion')->with('message', 'Order con Exito');  //mensaje de confirmacion
    }
    

    
}
