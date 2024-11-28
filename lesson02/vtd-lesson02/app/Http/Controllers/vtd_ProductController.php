<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vtd_ProductController extends Controller
{
    public function index()
    {
        $fruits = array("Apple","Orange","Mango","Banana","Pineapple");
        return view('welcome',['fruits' => $fruits]);
    }
}
