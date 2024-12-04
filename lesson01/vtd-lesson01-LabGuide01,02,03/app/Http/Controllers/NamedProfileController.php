<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NamedProfileController extends Controller
{
    public function display()
    {
        return "<h1>Named Profile Controller";
    }
    public function show()
    {
        return redirect()->route('display.profile');
    }
}
