<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Detalle;
use DB;

class DetalleController extends Controller
{
    //
    public function detalle($prod = null){
       $prod = Product::find($prod);
        return view('detalle', compact('prod'));
    }
}
