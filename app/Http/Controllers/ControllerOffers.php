<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerOffers extends Controller
{
    //
    public function index ()
    {
      return view('offers');
    }

    public function oldIndex()
    {
        return view('oldindex');
    }


}
