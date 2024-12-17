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
        $khoa = DB::delete('delete from vtdkhoa where VTDMAKHOA =?',[$makhoa]);
        return redirect('/khoa');
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
    // Validate the request data
    $request->validate([
        'VTDMAKHOA' => 'required|max:2',
        'VTDTENKHOA' => 'required|max:50'
    ], [
        'VTDMAKHOA.required' => 'Vui lòng nhập mã khoa',
        'VTDMAKHOA.max' => 'Mã khoa chỉ được tối đa 2 ký tự',
        'VTDTENKHOA.required' => 'Vui lòng nhập tên khoa',
        'VTDTENKHOA.max' => 'Tên khoa chỉ được tối đa 50 ký tự',
    ]);
   
    // Retrieve the form data from the request
    $makhoa = $request->input('VTDMAKHOA');
    $tenkhoa = $request->input('VTDTENKHOA');

    // Insert the data into the vtdkhoa table
    DB::table('vtdkhoa')->insert([
        'VTDMAKHOA' => $makhoa,
        'VTDTENKHOA' => $tenkhoa
    ]);
   
    // Redirect to the /khoa page after success
    return redirect('/khoa')->with('success', 'Tạo mới khoa thành công!');
}

   
        

}
