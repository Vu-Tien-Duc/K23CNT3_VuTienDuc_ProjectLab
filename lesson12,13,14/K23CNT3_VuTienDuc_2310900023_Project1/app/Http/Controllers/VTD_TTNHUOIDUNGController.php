<?php

namespace App\Http\Controllers;

use App\Models\vtd_KHACH_HANG;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; // Đảm bảo thêm dòng này

class VTD_TTNHUOIDUNGController extends Controller
{
    // Hiển thị form chỉnh sửa thông tin khách hàng
    public function vtdEdit($id)
    {
        // Lấy khách hàng theo id
        $vtduser = vtd_KHACH_HANG::where('id', $id)->first();
    
        // Kiểm tra nếu khách hàng không tồn tại
        if (!$vtduser) {
            return redirect()->route('vtduser.home1')->with('error', 'Khách hàng không tồn tại!');
        }
    
        // Trả về view để chỉnh sửa khách hàng
        return view('vtduser.ttuser', ['vtduser' => $vtduser]);
    }
    
    // Xử lý submit form chỉnh sửa
    public function vtdEditSubmit(Request $request, $id)
    {
        // Xác thực dữ liệu
        $validate = $request->validate([
            'vtdMaKhachHang' => 'required|unique:vtd_khach_hang,vtdMaKhachHang,' . $id, // Bỏ qua kiểm tra unique cho bản ghi hiện tại
            'vtdHoTenKhachHang' => 'required|string',
            'vtdEmail' => 'required|email|unique:vtd_khach_hang,vtdEmail,' . $id,  // Bỏ qua kiểm tra unique cho bản ghi hiện tại
            'vtdMatKhau' => 'nullable|min:6', // Mật khẩu không bắt buộc khi cập nhật
            'vtdDienThoai' => 'required|numeric|unique:vtd_khach_hang,vtdDienThoai,' . $id,  // Bỏ qua kiểm tra unique cho bản ghi hiện tại
            'vtdDiaChi' => 'required|string',
            'vtdNgayDangKy' => 'required|date',
            'vtdTrangThai' => 'required|in:0,1,2',
        ]);
    
        // Lấy khách hàng theo id
        $vtduser = vtd_KHACH_HANG::where('id', $id)->first();
    
        // Kiểm tra nếu khách hàng không tồn tại
        if (!$vtduser) {
            return redirect()->route('vtduser.home1')->with('error', 'Khách hàng không tồn tại!');
        }
    
        // Cập nhật các giá trị từ request
        $vtduser->vtdMaKhachHang = $request->vtdMaKhachHang;
        $vtduser->vtdHoTenKhachHang = $request->vtdHoTenKhachHang;
        $vtduser->vtdEmail = $request->vtdEmail;
        
        // Kiểm tra nếu người dùng nhập mật khẩu mới
        if ($request->filled('vtdMatKhau')) {
            // Nếu có mật khẩu mới, mã hóa và cập nhật
            $vtduser->vtdMatKhau = Hash::make($request->vtdMatKhau);
        }
        
        $vtduser->vtdDienThoai = $request->vtdDienThoai;
        $vtduser->vtdDiaChi = $request->vtdDiaChi;
        $vtduser->vtdNgayDangKy = $request->vtdNgayDangKy;
        $vtduser->vtdTrangThai = $request->vtdTrangThai;
    
        // Lưu khách hàng đã cập nhật
        $vtduser->save();
    
        // Chuyển hướng đến danh sách khách hàng
        return redirect()->route('vtduser.home1')->with('success', 'Cập nhật khách hàng thành công!');
    }
}
