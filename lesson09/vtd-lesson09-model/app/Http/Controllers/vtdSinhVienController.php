<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vtdSinhvien;

use App\Models\vtdkhoa; // Import model vtdkhoa (khoa)
class vtdSinhVienController extends Controller
{
    // Lấy toàn bộ sinh viên
    public function vtdGetAllSinhvien()
    {
        // Lấy toàn bộ dữ liệu trong bảng sinh viên
        $vtdsinhViens = vtdsinhvien::all();
        return view('vtdsinhvien.vtdlist', ['vtdsinhViens'=>$vtdsinhViens]);
    }

    // Lấy thông tin sinh viên theo mã sinh viên
    public function vtdGetSinhvien($masv)
{
    // Lấy thông tin sinh viên theo mã sinh viên
    $vtdsinhvien = vtdSinhvien::where('VTDMASINHVIEN', $masv)->first();

    // Kiểm tra nếu không tìm thấy sinh viên
    if (!$vtdsinhvien) {
        return redirect('/sinhvien')->with('error', 'Sinh viên không tồn tại.');
    }

    // Trả về view chi tiết sinh viên nếu có sinh viên
    return view('vtdsinhvien.vtddetail', ['vtdsinhvien' => $vtdsinhvien]);
}


    // Phương thức hiển thị form chỉnh sửa thông tin sinh viên
    public function vtdEdit($masv)
    {
        // Lấy thông tin sinh viên theo mã sinh viên
        $vtdsinhvien = vtdSinhvien::where('VTDMASINHVIEN', $masv)->first();

        // Kiểm tra nếu không có sinh viên, trả về thông báo lỗi
        if (!$vtdsinhvien) {
            return redirect('/sinhvien')->with('error', 'Sinh viên không tồn tại.');
        }

        // Lấy tất cả các khoa để hiển thị trong dropdown
        $khoas = vtdKhoa::all(); // Lấy tất cả dữ liệu khoa

        // Trả về view với dữ liệu sinh viên và danh sách khoa
        return view('vtdsinhvien.vtdedit', [
            'vtdsinhvien' => $vtdsinhvien,
            'khoas' => $khoas
        ]);
    }

    // Phương thức xử lý khi gửi form và cập nhật thông tin sinh viên
    public function vtdEditSubmit(Request $request, $masv)
    {
        // Kiểm tra dữ liệu nhập vào từ người dùng (validate)
        $request->validate([
            'hosinhvien' => 'required|string|max:255',
            'tensinhvien' => 'required|string|max:255',
            'gioitinh' => 'required|in:0,1', // Giới tính phải là 0 hoặc 1
            'ngaysinh' => 'required|date', // Ngày sinh phải có định dạng đúng
            'noisinh' => 'required|string|max:255',
            'VTDMAKHOA' => 'required|exists:vtdkhoa,VTDMAKHOA', // Kiểm tra mã khoa có tồn tại trong bảng vtdkhoa
            'hocbong' => 'nullable|numeric', // Kiểm tra kiểu dữ liệu học bổng là số
            'diemtrungbinh' => 'nullable|numeric', // Kiểm tra kiểu dữ liệu điểm trung bình là số
        ]);

        // Lấy thông tin sinh viên từ cơ sở dữ liệu
        $vtdsinhvien = vtdSinhvien::where('VTDMASINHVIEN', $masv)->first();

        // Kiểm tra nếu sinh viên không tồn tại
        if (!$vtdsinhvien) {
            return redirect('/sinhvien')->with('error', 'Sinh viên không tồn tại.');
        }

        // Cập nhật thông tin sinh viên
        $vtdsinhvien->VTDHOSV = $request->hosinhvien; // Cập nhật họ sinh viên
        $vtdsinhvien->VTDTENSV = $request->tensinhvien; // Cập nhật tên sinh viên

        // Xử lý giới tính: chuyển đổi giá trị từ 0 hoặc 1 sang kiểu BIT (1 hoặc 0)
        $vtdsinhvien->VTDPHAI = $request->gioitinh == '1' ? 1 : 0;

        // Cập nhật ngày sinh và nơi sinh
        $vtdsinhvien->VTDNGAYSINH = $request->ngaysinh;
        $vtdsinhvien->VTDNOISINH = $request->noisinh;

        // Cập nhật mã khoa
        $vtdsinhvien->VTDMAKHOA = $request->VTDMAKHOA;

        // Cập nhật học bổng và điểm trung bình
        $vtdsinhvien->VTDHOCBONG = (float)$request->hocbong; // Lưu học bổng dưới dạng số thực
        $vtdsinhvien->VTDDIEMTRUNGBINH = (float)$request->diemtrungbinh; // Lưu điểm trung bình dưới dạng số thực

        // Lưu lại thông tin sinh viên vào cơ sở dữ liệu
        $vtdsinhvien->save();

        // Chuyển hướng và thông báo thành công
        return redirect('/sinhvien')->with('success', 'Thông tin sinh viên đã được cập nhật.');
    }

    // Phương thức hiển thị form tạo mới sinh viên
    public function vtdCreate()
    {
        // Lấy danh sách tất cả các khoa từ bảng vtdkhoa
        $khoas = vtdkhoa::all(); 

        // Trả về view và truyền dữ liệu danh sách khoa
        return view('vtdsinhvien.vtdcreate', ['khoas' => $khoas]);
    }

    // Phương thức xử lý khi thêm sinh viên mới vào cơ sở dữ liệu
    public function vtdCreateSubmit(Request $request)
    {
        // Kiểm tra xem mã khoa có được chọn không
        if (empty($request->VTDMAKHOA)) {
            return back()->with('error', 'Vui lòng chọn mã khoa!');
        }

        // Kiểm tra mã khoa có tồn tại trong bảng vtdkhoa không
        $khoa = vtdkhoa::where('VTDMAKHOA', $request->VTDMAKHOA)->first();
        if (!$khoa) {
            return back()->with('error', 'Mã khoa không tồn tại!');
        }

        // Tiến hành lưu sinh viên mới
        $vtdsinhvien = new vtdSinhvien;
        $vtdsinhvien->VTDMASINHVIEN = $request->VTDMASINHVIEN;
        $vtdsinhvien->VTDHOSV = $request->VTDHOSV;
        $vtdsinhvien->VTDTENSV = $request->VTDTENSV;

        // Kiểm tra và lưu giới tính, chuyển đổi sang kiểu BIT (1 hoặc 0)
        $vtdsinhvien->VTDPHAI = $request->VTDPHAI == '1' ? 1 : 0;

        // Lưu ngày sinh và nơi sinh
        $vtdsinhvien->VTDNGAYSINH = $request->VTDNGAYSINH;
        $vtdsinhvien->VTDNOISINH = $request->VTDNOISINH;
        $vtdsinhvien->VTDMAKHOA = $request->VTDMAKHOA;

        // Lưu học bổng và điểm trung bình, kiểm tra kiểu dữ liệu float
        $vtdsinhvien->VTDHOCBONG = (float)$request->VTDHOCBONG;
        $vtdsinhvien->VTDDIEMTRUNGBINH = (float)$request->VTDDIEMTRUNGBINH;

        // Lưu sinh viên vào cơ sở dữ liệu
        $vtdsinhvien->save();

        // Thông báo thành công khi thêm sinh viên mới
        return back()->with('sinhVien_created', 'Đã thêm mới một sinh viên thành công!');
    }
    public function vtddelete($masv)
    {
    vtdSinhVien::where('VTDMASINHVIEN',$masv)->delete();
    return back()->with('sinhVien_deleted','Đã xóa sinh viên thành công!');
    }
    
}
