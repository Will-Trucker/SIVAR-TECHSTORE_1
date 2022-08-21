<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Detalle;
use DB;

class DetalleController extends Controller
{
    //
    public function detalle($id){
       $prod = Product::find($id);
        return view('detalle', compact('prod'));
    }
}
