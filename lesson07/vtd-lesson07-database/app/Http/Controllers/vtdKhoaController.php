<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class vtdKhoaController extends Controller
{
    //
    public function vtdGetAllKhoa()
    {
        // truy vấn dữ liệu từ bảng khoa
        $vtdkhoas = DB::select('select * from vtdkhoa');
        // chuyển dử liệu lên view để hiển thị
        return view('vtdkhoa.vtdlist',['vtdkhoas'=>$vtdkhoas]);

    }

    // chi tiết khoa
    public function tvcGetKhoa($makhoa)
    {
        $khoa = DB::select("select * from vtdkhoa where vtdmakhoa=?",[$makhoa])[0];
        return view('vtdkhoa.vtddetail',['khoa'=>$khoa]);
    }

    // edit get
    public function vtdEdit($makhoa)
    {
        $khoa = DB::select("select * from vtdkhoa where vtdmakhoa=?",[$makhoa])[0];
        return view('vtdkhoa.vtdedit',['khoa'=>$khoa]);
    }

    public function vtdEditSubmit(Request $request)
    {
        // lấy dữ lieuj mới trên form sửa
        $makhoa = $request->input('VTDMAKHOA');
        $tenkhoa = $request->input('VTDTENKHOA');
        DB::update("UPDATE vtdkhoa set VTDTENKHOA = ? Where VTDMAKHOA=?",[$tenkhoa,$makhoa]);
        return redirect('/khoa');
    }

    public function vtdDelete($makhoa)
    {
        $khoa = DB::select("select * from vtdkhoa where vtdmakhoa=?",[$makhoa])[0];
        return view('vtdkhoa.vtddelete',['khoa'=>$khoa]);
    }

    public function vtdDeleteSubmit(Request $request)
{
    // Lấy mã khoa cần xóa từ form
    $makhoa = $request->input('VTDMAKHOA');
    
    // Xóa khoa khỏi bảng
    DB::delete('DELETE FROM vtdkhoa WHERE VTDMAKHOA = ?', [$makhoa]);
    
    // Chuyển hướng về trang danh sách khoa
    return redirect()->route('khoas.vtdGetAllKhoa')->with('success', 'Khoa đã được xóa thành công!');
}

    

    // Create Form
      // Hiển thị form tạo mới khoa
    public function vtdCreate()
    {
        return view('vtdkhoa.vtdcreate'); // Trả về view 'khoa.create'
    }

    // Xử lý form tạo mới khoa
   // CreateSubmit
   public function vtdCreateSubmit(Request $request)
   {
       // Lấy dữ liệu từ form thông qua request
       $makhoa = $request->input('makhoa');  // Mã khoa
       $tenkhoa = $request->input('tenkhoa');  // Tên khoa
   
       // Chèn dữ liệu vào bảng vtdkhoa
       DB::insert('insert into vtdkhoa (VTDMAKHOA, VTDTENKHOA) values (?, ?)', [$makhoa, $tenkhoa]);
   
       // Sau khi chèn thành công, chuyển hướng về trang khoa
       return redirect('/khoa');
   }
        

}
