<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use DB;

class CategoriesController extends Controller
{
    //
    public function categorias(){
        $categorias = Category::all(); 
        return view('categorias', ['categorias' => $categorias]);
    }

}
