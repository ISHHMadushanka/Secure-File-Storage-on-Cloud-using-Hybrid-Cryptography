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

    public function indexfileupload() {
        return view('pages.fileupload');
       }

    public function indexviewfile() {
       return view('pages.viewfile');
       }

    public function indexviewsplitdata() {
       return view('pages.viewsplitdata');
        }

    public function indexviewrequest() {
        return view('pages.viewrequest');
       }

       public function indexviewfiles() {
        return view('pages.viewfiles');
       }

       public function indexverify() {
        return view('pages.verify');
       }


 }
