<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use App\Providers\RouteServiceProvider;


class ProductController extends Controller
{
    //
    public function Insertar(Request $request){
      // dd($request);
      try {
        DB::beginTransaction(); //Iniciar transaccion
        //Validacion de Campos
        $request->validate([
        'nombre' => 'required | unique:product' ,
        'slug' => 'required' ,
        'categoria' => 'required' , 
        'proveedor' => 'required' ,
        'precio' => 'required | numeric' , 
        'archivo' => 'required '
       ]);

      $prod = new Product;
      $prod->nombre=$request->get('nombre');      
      $prod->slug=$request->get('slug');
      $prod->categoria=$request->get('categoria');
      $prod->proveedor=$request->get('proveedor');
      $prod->precio=$request->get('precio');
      
      if ($request->hasFile('archivo')){ //hace referencia al name del input file
            $imagen = $request->file('archivo');
            $imagen->move(public_path().'/productos/',$imagen->getClientOriginalName()); //donde guardara la imagen
            $prod->image_path=$imagen->getClientOriginalName();
        }

      
      $prod -> save();
      DB::commit(); //enviar transaccion
    }
       catch (Exception $e ) {
        DB::rollback(); //no ejecutar nada si falla
        
      }     
      return back()->with('message',  '<br> Gracias');  //mensaje de confirmacion
   }

   public function update(Request $request, $id){
   
      $datos=Product::find($id);
      if ($request->hasFile('archivo')){ //hace referencia al name del input file
        $imagen = $request->file('archivo');
        $imagen->move(public_path().'/productos/',$imagen->getClientOriginalName()); //donde guardara la imagen
        $datos->image_path=$imagen->getClientOriginalName();
    }

    $datos->save();

    return redirect('Listado')->with('message', 'Gracias');  

   }
}