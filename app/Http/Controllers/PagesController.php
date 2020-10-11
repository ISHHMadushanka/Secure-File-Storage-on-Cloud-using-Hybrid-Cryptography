<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function indexabout(){
    return view('about');
   }

   public function indexowner(){
    return view('owner');
   }

   public function indexuser(){
    return view('user');
   }

   public function indexhome(){
    return view('home');
   }

}
