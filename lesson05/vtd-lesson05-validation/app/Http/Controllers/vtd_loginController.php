<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vtd_loginController extends Controller
{
    public function vtdindex()
    {
        return view('vtdlogin');
    }
    public function loginsubmit(Request $request)
    {
        // Validation form
        $validationData = $request->validate([
        'email' =>'required|email',
        'password'=>'required|min:6|max:12'
        ]);
        // Lấy giá trị trên các điều khiển của form
        $email=$request->input('email');
        $password=$request->input('password');
        return "Email:" . $email . "Password:".$password;
        }
}
