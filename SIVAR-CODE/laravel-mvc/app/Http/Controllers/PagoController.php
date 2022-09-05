<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Pago;
use Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

class PagoController extends Controller
{
    //
    public function pagos(){
        return view('paga');
    }

    public function agregar(Request $request){

       try{
       
        $request->validate([
        'cliente' =>  'required | string | max:255', 
        'correo' => 'required | email | max:255',
        'tarjeta' => 'required | string | unique:pagos',
        'caducidad' => 'required | string',
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

        $pago->save();
        DB::commit(); //enviar transaccion

       }   catch (Exception $e ) {
        DB::rollback(); //no ejecutar nada si falla
      }    
        
      return redirect('home')->with('message', 'Order con Exito');  //mensaje de confirmacion
    }


    
}
