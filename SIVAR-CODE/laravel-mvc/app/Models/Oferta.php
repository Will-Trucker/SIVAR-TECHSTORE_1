<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'ofertas';

   
    public $timestamps = false;
    
    protected $fillable = ['nombre','precio', 'imagen'];
}
