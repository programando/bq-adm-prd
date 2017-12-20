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


   public function getLogin(){
     $app_title = trans('app-productos.browser_title');
     return view('app.login', compact('app_title'));
   }


}
