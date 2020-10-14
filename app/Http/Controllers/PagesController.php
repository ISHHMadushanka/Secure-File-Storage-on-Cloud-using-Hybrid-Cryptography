<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller

{
    public function indexindex(){
     return view('pages.index');
    }

    public function indexowner(){
     return view('pages.owner');
    }

    public function indexuser(){
     return view('pages.user');
    }

    public function indexabout(){
     return view('pages.about');
    }

 }
