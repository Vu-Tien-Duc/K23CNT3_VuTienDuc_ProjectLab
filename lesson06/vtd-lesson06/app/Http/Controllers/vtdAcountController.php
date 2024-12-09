<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vtdAcountController extends Controller
{
    //#Form login
    public function vtdLogin()
    {
        return view('vtd-login');
    }
    public function vtdSubmitLogin(Request $request)
    {
        $request->validate([
        'email' =>'required|email',
        'password'=>'required|min:6|max:12'
        ]);
        // check login -> store session ->redirect home
        $email=$request->input('email'); // email ở đây là name ở php
        $password=$request->input('password');// password ở đây là name ở php

        $vtdLoginSession = [
            'email'=>$email,
            'password'=>$password
        ];

        $vtd_json =json_encode($vtdLoginSession);

        if($email == "vtd@gmail.com" && $password == "123456")
        {
            // lưu session
            $request->session()->put('K23CNT3-VuTienDuc',$email);
            return redirect('/');    // khi $email và password giống trên thì ấn submit sẻ đưa về route '/' (welcome.balade.php)
        }
        else
        {
            return redirect()->back()->with('vtd-error','Lỗi Đăng Nhập');
        }
    }
     // Đọc dữ liệu từ session
   
      //# Xóa Dữ liệu trong session  logout
      public function vtdDeleteSessionData(Request $request)
      {
          $request->session()->forget('K23CNT3-VuTienDuc');
        return redirect('/');

      }

     

}
