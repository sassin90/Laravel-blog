<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
   public function __construct(){
        $this->middleware('auth');
    }

   public function test($name){
   		//return "hola $name";
   		return  view('pages.content-left');
   }
}
