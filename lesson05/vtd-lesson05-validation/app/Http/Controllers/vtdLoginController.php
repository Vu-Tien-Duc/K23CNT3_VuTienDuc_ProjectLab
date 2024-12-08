<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vtdLoginController extends Controller
{
    //
    public function index()
    {
        return view('login1');
    }
    public function loginSubmit(Request $request)
    {
        $res=$request->all();
        return $res;
    }
}
