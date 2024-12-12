<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class vtdsinhvienController extends Controller
{
    public function GetAllSinhVien()
    {
        $vtdsinhvien = DB::table('vtdsinhvien')->get();
        return view('vtdsinhvien.vtdlist',['sinhvien'=>$vtdsinhvien]);
    }
    public function vtdGetSinhvien($masinhvien)
    {
        $vtdsinhvien = DB::table('vtdsinhvien')->where('VTDMASINHVIEN',$masinhvien)->first();
        return view('vtdsinhvien.vtddetail',['sinhvien'=>$vtdsinhvien]);
    }

    public function vtdCreate()
    {
        return view('vtdsinhvien.vtdcreate');
    }
    public function vtdCreateSubmit(Request $request)
    {
        // Kiểm tra tính hợp lệ của dữ liệu
        $validated = $request->validate([
            'masinhvien' => 'required|unique:vtdsinhvien,VTDMASINHVIEN',
            'hosinhvien' => 'required|string|max:255',
            'tensinhvien' => 'required|string|max:255',
            'gioitinh' => 'required|in:0,1', // Kiểm tra giá trị 0 hoặc 1
            'ngaysinh' => 'required|date',
            'noisinh' => 'required|string|max:255',
            'makhoa' => 'required|exists:vtdkhoa,VTDMAKHOA', // Kiểm tra mã khoa có tồn tại trong bảng vtdkhoa
            'hocbong' => 'nullable|numeric',
            'diemtrungbinh' => 'nullable|numeric',
        ]);
    
        // Sử dụng Query Builder để thêm sinh viên mới
        $request = DB::table('vtdsinhvien')->insert([
            'VTDMASINHVIEN' => $request->masinhvien,
            'VTDHOSV' => $request->hosinhvien,
            'VTDTENSV' => $request->tensinhvien,
            'VTDPHAI' => (bool)$request->gioitinh,  // Lưu giá trị 0 hoặc 1 vào cột VTDPHAI
            'VTDNGAYSINH' => $request->ngaysinh,
            'VTDNOISINH' => $request->noisinh,
            'VTDMAKHOA' => $request->makhoa,
            'VTDHOCBONG' => $request->hocbong,
            'VTDDIEMTRUNGBINH' => $request->diemtrungbinh,
        ]);
    
        // Kiểm tra nếu thêm thành công
        if ($request) {
            return redirect('/sinhvien');
        } else {
            return back()->with('error', 'Có lỗi xảy ra trong quá trình thêm mới');
        }
    }
        
        public function vtdEdit($masinhvien)
    {
        // Lấy thông tin sinh viên theo mã sinh viên
        $vtdsinhvien = DB::table('vtdsinhvien')->where('VTDMASINHVIEN', $masinhvien)->first();

        // Kiểm tra nếu không có sinh viên
        if (!$vtdsinhvien) {
            return redirect('/sinhvien')->with('error', 'Sinh viên không tồn tại!');
        }

        // Trả về view edit với dữ liệu sinh viên
        return view('vtdsinhvien.vtdedit', ['sinhvien' => $vtdsinhvien]);
    }

    public function vtdEditSubmit(Request $request, $masinhvien)
    {
        // Kiểm tra tính hợp lệ của dữ liệu
        $validated = $request->validate([
            'masinhvien' => 'required|unique:vtdsinhvien,VTDMASINHVIEN,' . $masinhvien, // Chỉ kiểm tra unique trừ bản ghi hiện tại
            'hosinhvien' => 'required|string|max:255',
            'tensinhvien' => 'required|string|max:255',
            'gioitinh' => 'required|in:0,1', // Kiểm tra giá trị 0 hoặc 1
            'ngaysinh' => 'required|date',
            'noisinh' => 'required|string|max:255',
            'makhoa' => 'required|exists:vtdkhoa,VTDMAKHOA', // Kiểm tra mã khoa có tồn tại trong bảng vtdkhoa
            'hocbong' => 'nullable|numeric',
            'diemtrungbinh' => 'nullable|numeric',
        ]);
    
        // Cập nhật thông tin sinh viên vào cơ sở dữ liệu
        $result = DB::table('vtdsinhvien')
            ->where('VTDMASINHVIEN', $masinhvien)
            ->update([
                'VTDHOSV' => $request->hosinhvien,
                'VTDTENSV' => $request->tensinhvien,
                'VTDPHAI' => (bool)$request->gioitinh,  // Chuyển giá trị thành kiểu boolean (0 hoặc 1)
                'VTDNGAYSINH' => $request->ngaysinh,
                'VTDNOISINH' => $request->noisinh,
                'VTDMAKHOA' => $request->makhoa,
                'VTDHOCBONG' => $request->hocbong,
                'VTDDIEMTRUNGBINH' => $request->diemtrungbinh,
            ]);
    
        // Kiểm tra nếu cập nhật thành công
        if ($result) {
            return redirect('/sinhvien')->with('success', 'Cập nhật thông tin sinh viên thành công!');
        } else {
            return back()->with('error', 'Có lỗi xảy ra trong quá trình cập nhật!');
        }
    }

    // xóa
    public function vtddelete($masinhvien)
    {
    DB::table('vtdsinhvien')->where('VTDMASINHVIEN','=', $masinhvien)->delete();
    return redirect('/sinhvien');
    }
    
}
