<?php

namespace App\Http\Controllers;

use App\Models\vtd_QUAN_TRI; // Thêm dòng này để sử dụng Model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session; // Thêm dòng này để sử dụng session

class VTD_QUAN_TRIController extends Controller
{
    // GET login (authentication)
    public function vtdLogin()
    {
        return view('vtdAdmins.vtd-login');
    }

    // POST login (authentication)
    public function vtdLoginSubmit(Request $request)
    {
        // Validate tài khoản và mật khẩu
        $request->validate([
            'vtdTaiKhoan' => 'required|string',
            'vtdMatKhau' => 'required|string',
        ]);

        // Tìm người dùng trong bảng vtd_QUAN_TRI
        $user = vtd_QUAN_TRI::where('vtdTaiKhoan', $request->vtdTaiKhoan)->first();

        // Kiểm tra nếu người dùng tồn tại và mật khẩu đúng
        if ($user && Hash::check($request->vtdMatKhau, $user->vtdMatKhau)) {
            // Đăng nhập thành công
            Auth::loginUsingId($user->id);

            // Lưu tên tài khoản vào session
            Session::put('username', $user->vtdTaiKhoan);

            // Chuyển hướng về trang admin với thông báo thành công
            return redirect('/vtd-admins')->with('message', 'Đăng Nhập Thành Công');
        } else {
            // Thông báo lỗi nếu tài khoản hoặc mật khẩu sai
            return redirect()->back()->withErrors(['vtdMatKhau' => 'Tài khoản hoặc mật khẩu không đúng']);
        }
    }
}
