<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vtdsignupController extends Controller
{
    public function vtdindex()
    {
        return view('signup');
    }
    public function vtdSignupSubmit(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email'=>'required|email',
            'password' => 'required|string|min:6', // Adjust according to your password rules
            'confirmpassword'=>'required|string|same:password',
        ]);
        $res=$request->all();
        return $res;
    }
}
