<?php

namespace App\Http\Controllers;

use App\Models\vtd_KHACH_HANG;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class VTD_TTNHUOIDUNGController extends Controller
{
    // Hiển thị form chỉnh sửa thông tin khách hàng
    public function vtdEdit($id)
    {
        $vtduser = vtd_KHACH_HANG::where('id', $id)->first();
    
        if (!$vtduser) {
            return redirect()->route('vtduser.home1')->with('error', 'Khách hàng không tồn tại!');
        }
    
        return view('vtduser.ttuser', ['vtduser' => $vtduser]);
    }

    // Xử lý submit form chỉnh sửa thông tin khách hàng
    public function vtdEditSubmit(Request $request, $id)
    {
        $request->validate([
            'vtdMaKhachHang' => 'required|unique:vtd_khach_hang,vtdMaKhachHang,' . $id,
            'vtdHoTenKhachHang' => 'required|string',
            'vtdEmail' => 'required|email|unique:vtd_khach_hang,vtdEmail,' . $id,
            'vtdDienThoai' => 'required|numeric|unique:vtd_khach_hang,vtdDienThoai,' . $id,
            'vtdDiaChi' => 'required|string',
            'vtdNgayDangKy' => 'required|date',

        ]);
    
        $vtduser = vtd_KHACH_HANG::where('id', $id)->first();
    
        if (!$vtduser) {
            return redirect()->route('vtduser.home1')->with('error', 'Khách hàng không tồn tại!');
        }

        // Cập nhật thông tin khách hàng
        $vtduser->vtdMaKhachHang = $request->vtdMaKhachHang;
        $vtduser->vtdHoTenKhachHang = $request->vtdHoTenKhachHang;
        $vtduser->vtdEmail = $request->vtdEmail;
        $vtduser->vtdDienThoai = $request->vtdDienThoai;
        $vtduser->vtdDiaChi = $request->vtdDiaChi;
        $vtduser->vtdNgayDangKy = $request->vtdNgayDangKy;
  
    
        $vtduser->save();
    
        return redirect()->route('vtduser.home1')->with('success', 'Cập nhật thông tin thành công!');
    }

    // Hiển thị form thay đổi mật khẩu
    public function showChangePasswordForm($id)
    {
        $vtduser = vtd_KHACH_HANG::where('id', $id)->first();
    
        if (!$vtduser) {
            return redirect()->route('vtduser.home1')->with('error', 'Khách hàng không tồn tại!');
        }

        return view('vtduser.changePassword', ['vtduser' => $vtduser]);
    }

    // Xử lý thay đổi mật khẩu
    public function changePasswordSubmit(Request $request, $id)
    {
        // Xác thực các trường nhập liệu
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:6|confirmed', // Kiểm tra mật khẩu xác nhận
        ]);
    
        // Lấy thông tin người dùng
        $vtduser = vtd_KHACH_HANG::where('id', $id)->first();
    
        if (!$vtduser) {
            return redirect()->route('vtduser.home1')->with('error', 'Khách hàng không tồn tại!');
        }
    
        // Kiểm tra mật khẩu cũ
        if (!Hash::check($request->old_password, $vtduser->vtdMatKhau)) {
            return redirect()->back()->withErrors(['old_password' => 'Mật khẩu cũ không đúng!']);
        }
    
        // Cập nhật mật khẩu mới
        $vtduser->vtdMatKhau = Hash::make($request->new_password);
        $vtduser->save();
    
        return redirect()->route('vtduser.home1')->with('success', 'Mật khẩu đã được thay đổi thành công!');
    }
    
    
}
