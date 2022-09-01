<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oferta;
use Illuminate\Support\Facades\DB;

class OfertaController extends Controller
{
    //


    public function addf(Request $request){
        try {
            //code...
            DB::beginTransaction();
            $ofer = New Oferta;
            $ofer->nombre = $request->get('nombre');
            $ofer->precio = $request->get('precio');
    
            
         if ($request->hasFile('archivo')){
            $imagen = $request->file('archivo');
            $imagen->move(public_path().'/ofertas/', $imagen->getClientOriginalName());
            $ofer->imagen = $imagen->getClientOriginalName();
        } 
        $ofer->save(); 
        DB::commit();
    }
        catch (Exception $e) {
            DB::rollback(); //no ejecutar nada si falla
        }
        return back()->with('message',  '<br> Gracias');
    }
     
}
