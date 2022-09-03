<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use App\Http\Controllers\Controller;


class UserController extends Controller
{
    //
    public function usuarios(){
      $query = DB::table('users')->get();
       return view('user', ['data'=> $query]);
    } 
}
