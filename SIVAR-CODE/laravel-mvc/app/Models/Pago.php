<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $table = 'pagos';
    protected $primaryKey = 'id';
   
    public $timestamps = false;
    
    protected $fillable = ['cliente', 'correo', 'tarjeta','caducidad','cvc', 'monto'];
}
