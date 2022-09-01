<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Ventas;

class SaleController extends Controller
{
    //
    public function compras(){
     $query = DB::table('pagos')->get();
     return view('sale', ['pago' => $query]);
    }
}
