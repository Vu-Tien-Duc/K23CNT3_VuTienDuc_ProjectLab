<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VtdNhaCC;  // import model VtdNhaCC

class VtdNhaCCController extends Controller
{
    //
    
    // Danh sách Nhà Cung Cấp
    public function vtdlist()
    {
        // Lấy tất cả dữ liệu từ bảng VtdNhaCC
        $vtdnhacc = VtdNhaCC::all();
        
        // Phân trang kết quả, thay 10 bằng số lượng bạn muốn mỗi trang
        $vtdnhacc = VtdNhaCC::paginate(10);
        
        // Trả về view với dữ liệu Nhà Cung Cấp
        return view('vtdnhacc.list', ['vtdnhacc' => $vtdnhacc]);
    }

    // Chi tiết Nhà Cung Cấp
    public function vtddetail($manhacc)
    {
        // Tìm Nhà Cung Cấp theo mã Nhà Cung Cấp (vtdMaNCC)
        $vtdnhacc = VtdNhaCC::where('vtdMaNCC', $manhacc)->first();
        
        // Trả về view với dữ liệu chi tiết Nhà Cung Cấp
        return view('vtdnhacc.detail', ['vtdnhacc' => $vtdnhacc]);
    }

    // Sửa thông tin Nhà Cung Cấp
    public function vtdedit($manhacc) {
        // Tìm Nhà Cung Cấp theo mã Nhà Cung Cấp (vtdMaNCC)
        $vtdnhacc = VtdNhaCC::where('vtdMaNCC', $manhacc)->first();
        
        // Nếu không tìm thấy Nhà Cung Cấp, trả về thông báo lỗi
        if (!$vtdnhacc) {
            return redirect()->route('vtdnhacc.index')->with('error', 'Nhà Cung Cấp không tồn tại!');
        }
    
        // Trả về view sửa thông tin Nhà Cung Cấp với dữ liệu tìm được
        return view('vtdnhacc.edit', ['vtdnhacc' => $vtdnhacc]);
    }
    
    // Xử lý cập nhật thông tin Nhà Cung Cấp
    public function vtdeditsubmit(Request $request, $manhacc) {
        // Kiểm tra và xác thực dữ liệu gửi lên
        $validatedData = $request->validate([
            'tenncc' => 'required|string|max:255',   // Kiểm tra 'tenncc' phải có giá trị, là chuỗi và có độ dài tối đa 255 ký tự
            'diachi' => 'required|string|max:255',   // Tương tự với 'diachi'
            'dienthoai' => 'required|string|max:20', // Kiểm tra 'dienthoai' phải là chuỗi và không vượt quá 20 ký tự
            'status' => 'required|string|max:50',    // 'status' phải có giá trị, là chuỗi và có độ dài tối đa 50 ký tự
            'email' => 'required|email|max:255',     // 'email' phải là định dạng email hợp lệ và có độ dài tối đa 255 ký tự
        ]);

        // Tìm Nhà Cung Cấp theo mã Nhà Cung Cấp (vtdMaNCC)
        $vtdnhacc = VtdNhaCC::where('vtdMaNCC', $manhacc)->first();
        
        // Nếu không tìm thấy Nhà Cung Cấp, trả về thông báo lỗi
        if (!$vtdnhacc) {
            return redirect()->route('vtdnhacc.index')->with('error', 'Nhà Cung Cấp không tồn tại!');
        }

        // Cập nhật các thông tin Nhà Cung Cấp từ dữ liệu đã xác thực
        $vtdnhacc->vtdTenNCC = $request->tenncc;
        $vtdnhacc->vtdDiaChi = $request->diachi;
        $vtdnhacc->vtdDienThoai = $request->dienthoai;
        $vtdnhacc->vtdStatus = $request->status;
        $vtdnhacc->vtdEmail = $request->email;
    
        // Lưu lại thông tin đã cập nhật vào cơ sở dữ liệu
        $vtdnhacc->save();
    
        // Chuyển hướng về trang danh sách và hiển thị thông báo thành công
        return redirect('/vtdnhacc')->with('success', 'Thông tin nhà cung cấp đã được cập nhật.');
    }

    //create
    public function vtdcreate()
    {
        // Trả về view form thêm mới
        return view('vtdnhacc.create');
    }

    // Xử lý lưu thông tin nhà cung cấp mới
    public function vtdcreatesubmit(Request $request)
    {
        // Xác thực dữ liệu gửi lên
        $validatedData = $request->validate([
            'mancc' => 'required|string|max:20|unique:vtdnhacc,vtdMaNCC', // Validate Mã Nhà Cung Cấp (tùy chỉnh)
            'tenncc' => 'required|string|max:255',
            'diachi' => 'required|string|max:255',
            'dienthoai' => 'required|string|max:20',
            'status' => 'required|string|max:50',
            'email' => 'required|email|max:255',
        ]);
    
        // Tạo mới nhà cung cấp
        $vtdnhacc = new VtdNhaCC();
        $vtdnhacc->vtdMaNCC = $request->mancc; // Gán Mã Nhà Cung Cấp
        $vtdnhacc->vtdTenNCC = $request->tenncc;
        $vtdnhacc->vtdDiaChi = $request->diachi;
        $vtdnhacc->vtdDienThoai = $request->dienthoai;
        $vtdnhacc->vtdStatus = $request->status;
        $vtdnhacc->vtdEmail = $request->email;
    
        // Lưu thông tin mới
        $vtdnhacc->save();
    
        // Chuyển hướng về trang danh sách với thông báo thành công
        return redirect('/vtdnhacc')->with('success', 'Nhà cung cấp mới đã được thêm.');
    }
    // delete
    public function vtddelete($manhacc)
    {
    vtdNhaCC::where('vtdMaNCC',$manhacc)->delete();
    return back()->with('nhacc_deleted','Đã xóa sinh viên thành công!');
    }
}    