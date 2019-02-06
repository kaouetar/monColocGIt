<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index ()
    {
        return view('CSC_Home');
    }

    public function oldIndex()
    {
        return view('oldindex');
    }
    public function offers(){
      return view('offers');

    }
    public function myoffers(){
      return view('myoffers');

    }


}
