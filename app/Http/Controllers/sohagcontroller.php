<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sohagcontroller extends Controller
{
   public function first(){
    	return view('index');
    } 
    public function second(){
    	return view('table');
    }
}
