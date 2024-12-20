<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vtd_LOAI_SAN_PHAM; // Sử dụng Model User để thao tác với cơ sở dữ liệu
class VTD_LOAI_SAN_PHAMController extends Controller
{
    //admin CRUD
    // list
    public function vtdList()
    {
        $vtdloaisanphams = vtd_LOAI_SAN_PHAM::all();
        return view('vtdAdmins.vtdloaisanpham.vtd-list',['vtdloaisanphams'=>$vtdloaisanphams]);
    }

    //create
    public function vtdCreate()
    {
        return view('vtdAdmins.vtdloaisanpham.vtd-create');
    }

    public function vtdCreateSunmit(Request $request)
    {
        //ghi dữ liệu xuống db
        $vtdloaisanpham = new vtd_LOAI_SAN_PHAM;
        $vtdloaisanpham->vtdMaLoai = $request->vtdMaLoai;
        $vtdloaisanpham->vtdTenLoai = $request->vtdTenLoai;
        $vtdloaisanpham->vtdTrangThai = $request->vtdTrangThai;

        $vtdloaisanpham->save();
       return redirect()->route('vtdadims.vtdloaisanpham');
    }

    public function vtdEdit($id)
    {
        $vtdloaisanpham = vtd_LOAI_SAN_PHAM::find($id);
        return view('vtdAdmins.vtdloaisanpham.vtd-edit',['vtdloaisanpham'=>$vtdloaisanpham]);
    }
    public function vtdEditSubmit(Request $request, $id)
    {
        // Kiểm tra và xác thực dữ liệu gửi lên
        $validatedData = $request->validate([
            'vtdTenLoai' => 'required|string|max:255',   
            'vtdTrangThai' => 'required|in:0,1',  // Xác thực vtdTrangThai phải là 0 hoặc 1
        ]);
    
        // Tìm Loại Sản Phẩm theo mã Loại Sản Phẩm (vtdMaLoai)
        $vtdloaisanpham = vtd_LOAI_SAN_PHAM::where('vtdMaLoai', $id)->first();
    
        // Kiểm tra xem loại sản phẩm có tồn tại không
        if (!$vtdloaisanpham) {
            return redirect()->route('vtdadims.vtdloaisanpham')->with('error', 'Loại sản phẩm không tồn tại.');
        }
    
        // Cập nhật các thông tin Loại Sản Phẩm từ dữ liệu đã xác thực
        $vtdloaisanpham->vtdTenLoai = $request->vtdTenLoai;
        $vtdloaisanpham->vtdTrangThai = $request->vtdTrangThai;
    
        // Lưu lại thông tin đã cập nhật vào cơ sở dữ liệu
        $vtdloaisanpham->save();
    
        // Chuyển hướng về trang danh sách và hiển thị thông báo thành công
        return redirect()->route('vtdadims.vtdloaisanpham')->with('success', 'Cập nhật loại sản phẩm thành công.');
    }
    

    public function vtdGetDetail($id)
    {
        $vtdloaisanpham = vtd_LOAI_SAN_PHAM::where('vtdMaLoai', $id)->first();
        return view('vtdAdmins.vtdloaisanpham.vtd-detail',['vtdloaisanpham'=>$vtdloaisanpham]);

    }

    public function vtdDelete($id)
    {
        vtd_LOAI_SAN_PHAM::where('vtdMaLoai',$id)->delete();
    return back()->with('loaisanpham_deleted','Đã xóa sinh viên thành công!');
    }

}
