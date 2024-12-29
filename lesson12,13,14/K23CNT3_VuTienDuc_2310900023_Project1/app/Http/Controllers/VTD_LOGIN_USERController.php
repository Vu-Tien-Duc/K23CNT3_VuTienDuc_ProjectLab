<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vtd_KHACH_HANG;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class VTD_LOGIN_USERController extends Controller
{
    // Show login form
    public function vtdLogin()
    {
        return view('vtduser.login');
    }

    // Handle login form submission
    public function vtdLoginSubmit(Request $request)
    {
        // Validate the input data
        $request->validate([
            'vtdEmail' => 'required|email',
            'vtdMatKhau' => 'required|string',
        ]);
        
        // Find the user by email
        $user = vtd_KHACH_HANG::where('vtdEmail', $request->vtdEmail)->first();
        
        // Check if the user exists and the password matches
        if ($user && Hash::check($request->vtdMatKhau, $user->vtdMatKhau)) {
            // Log the user in
            Auth::login($user);
    
            // Store the user's name in the session
            Session::put('username1', $user->vtdHoTenKhachHang);
            
            // Redirect to homepage or dashboard after successful login
            return redirect()->route('vtduser.home1')->with('message', 'Đăng Nhập Thành Công');
        } else {
            // Return error if the credentials are invalid
            return redirect()->back()->withErrors(['vtdEmail' => 'Email hoặc Mật khẩu không đúng']);
        }
    }
    
    

}
