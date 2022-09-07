<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Models\product;
use App\Models\Pago;

class MensajeController extends Controller
{
    //
    public function notificaciones(){
        return view('notificacion');
    }
}
