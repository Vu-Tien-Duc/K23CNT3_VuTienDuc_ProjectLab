<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VTD_QUAN_TRIController extends Controller
{
    //
    //GET login (authentication)
    public function vtdLogin()
    {
        return view('vtdlogin.vtd-login');
    }

     //POST login (authentication)
     public function vtdLoginSubmit()
     {
         return view('vtdlogin.vtd-login');
     }
 
}
