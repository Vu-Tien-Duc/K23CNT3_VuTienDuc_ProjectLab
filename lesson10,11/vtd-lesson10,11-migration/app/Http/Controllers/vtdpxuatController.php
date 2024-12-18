<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vtdpXuat; 
class vtdpxuatController extends Controller
{
    //
     //
     public function vtdlist()
     {
           $vtdpxuat = vtdpXuat::all();
           $vtdpxuat = vtdpXuat::paginate(10);  // Thay 10 bằng số lượng bạn muốn trên mỗi trang
           return view('vtdpxuat.list',['vtdpxuat'=>$vtdpxuat]);
     }
 
     public function vtddetail($SoPx)
     {
         $vtdpxuat = vtdpXuat::where('vtdSoPx',$SoPx)->first();
         return view('vtdpxuat.detail',['vtdpxuat'=>$vtdpxuat]);
     }
     public function vtdedit($SoPx)
     {
         // Lấy bản ghi vtdvattu dựa vào mã vật tư
         $vtdpxuat = vtdpXuat::where('vtdSoPx', $SoPx)->first();
 
         // Kiểm tra nếu vật tư không tồn tại, chuyển hướng về trang danh sách với thông báo lỗi
         if (!$vtdpxuat) {
             return redirect('/vtdpxuat')->with('error', 'Vật tư không tồn tại.');
         }
 
         return view('vtdpxuat.edit', ['vtdpxuat' => $vtdpxuat]);
     }
 
     public function vtdeditsubmit(Request $request, $SoPx)
     {
         // Kiểm tra dữ liệu nhập vào từ người dùng (validate)
         $request->validate([
             'ngayxuat' => 'required|date|max:255',
             'tenkh' => 'required|string|max:255',
            
         ]);
 
         // Lấy thông tin vật tư từ cơ sở dữ liệu
         $vtdpxuat = vtdpXuat::where('vtdSoPx', $SoPx)->first();
 
         // Kiểm tra nếu vật tư không tồn tại
         if (!$vtdpxuat) {
             return redirect('/vtdpxuat')->with('error', 'Vật tư không tồn tại.');
         }
 
         // Cập nhật thông tin vật tư
         $vtdpxuat->vtdNgayXuat = $request->ngayxuat;
         $vtdpxuat->vtdTenKH = $request->tenkh;
      
 
         // Lưu lại thông tin vật tư vào cơ sở dữ liệu
         $vtdpxuat->save();
 
         // Chuyển hướng và thông báo thành công
         return redirect('/vtdpxuat')->with('success', 'Thông tin vật tư đã được cập nhật.');
     }
 
     public function vtdcreate()
     {
         // Trả về view và truyền dữ liệu danh mục nếu cần
         return view('vtdpxuat.create');
     }
     
     public function vtdcreatesubmit(Request $request)
     {
         // Validate dữ liệu đầu vào
         $request->validate([
             'sopx' => 'required|unique:vtdpxuat,vtdSoPx', // Mã vật tư phải duy nhất
             'ngayxuat' => 'required|date|max:255',
             'tenkh' => 'required|string|max:255',
         ]);
     
         // Tạo một đối tượng mới của model vtdVattu
         $vtdpxuat = new vtdpXuat;
         $vtdpxuat->vtdSoPx = $request->sopx;
         $vtdpxuat->vtdNgayXuat = $request->ngayxuat;
         $vtdpxuat->vtdTenKH = $request->tenkh;
     
         // Lưu vật tư vào cơ sở dữ liệu
         $vtdpxuat->save();
     
         // Thông báo thành công khi thêm vật tư mới
         return redirect('/vtdpxuat')->with('success', 'Thông tin vật tư đã được thêm thành công.');
     }
     
 
     public function vtddelete($SoPx)
     {
        vtdpXuat::where('vtdSoPx',$SoPx)->delete();
     return back()->with('pxuat_deleted','Đã xóa sinh viên thành công!');
     }
}
