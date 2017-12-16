<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   /*Dic 15 2017.
      Muestra el home del aplicativo
   */
   public function getHome(){
     return view('app.home');
   }
}
