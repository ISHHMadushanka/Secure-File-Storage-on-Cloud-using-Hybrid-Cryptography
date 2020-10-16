<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller

{
    public function indexindex(){
     return view('pages.index');
    }


    public function indexabout() {
     return view('pages.about');
    }

 }
