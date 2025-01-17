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
   // Handle login form submission
   public function vtdLoginSubmit(Request $request)
   {
       // Validate đầu vào
       $request->validate([
           'vtdEmail' => 'required|email',
           'vtdMatKhau' => 'required|string',
       ]);
   
       // Tìm người dùng theo email
       $user = vtd_KHACH_HANG::where('vtdEmail', $request->vtdEmail)->first();
   
       // Xóa giỏ hàng trong session khi đăng nhập
       Session::forget('cart');
   
       // Kiểm tra nếu người dùng tồn tại và mật khẩu đúng
       if ($user && Hash::check($request->vtdMatKhau, $user->vtdMatKhau)) {
           // Kiểm tra trạng thái tài khoản
           if ($user->vtdTrangThai == 2) {
               // Tài khoản bị khóa
               return redirect()->back()->withErrors(['vtdEmail' => 'Tài khoản của bạn đã bị khóa.']);
           } elseif ($user->vtdTrangThai == 1) {
               // Tài khoản bị tạm khóa
               return redirect()->back()->withErrors(['vtdEmail' => 'Tài khoản của bạn đã bị tạm khóa.']);
           }
   
           // Đăng nhập người dùng
           Auth::login($user);
   
           // Lưu thông tin người dùng vào session
           Session::put('user_id', $user->id);
           Session::put('username1', $user->vtdHoTenKhachHang);  // Lưu tên người dùng
           Session::put('vtdEmail', $user->vtdEmail);  // Lưu email
           Session::put('vtdDienThoai', $user->vtdDienThoai);  // Lưu số điện thoại
           Session::put('vtdDiaChi', $user->vtdDiaChi);  // Lưu địa chỉ
           Session::put('vtdMaKhachHang', $user->vtdMaKhachHang);  // Lưu mã khách hàng
   
           // Chuyển hướng người dùng tới trang chủ sau khi đăng nhập thành công
           return redirect()->route('vtduser.home1')->with('message', 'Đăng Nhập Thành Công');
       } else {
           // Nếu thông tin không chính xác, trả về lỗi
           return redirect()->back()->withErrors(['vtdEmail' => 'Email hoặc Mật khẩu không đúng']);
       }
   }
   
   

    public function logout()
{
    // Xóa giỏ hàng trong session khi người dùng đăng xuất
    Session::forget('cart');

    // Tiến hành đăng xuất
}

    

}
