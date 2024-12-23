<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vtd_SAN_PHAM; 
use Illuminate\Support\Facades\Storage;  // Use this for file handling
class VTD_SAN_PHAMController extends Controller
{
    //
     //admin CRUD
    // list
    public function vtdList()
    {
        $vtdsanphams = vtd_SAN_PHAM::all();
        return view('vtdAdmins.vtdsanpham.vtd-list',['vtdsanphams'=>$vtdsanphams]);
    } 
    
    public function vtdDetail($id)
    {
        // Tìm sản phẩm theo ID
        $vtdsanpham = vtd_SAN_PHAM::where('id', $id)->first();

        // Trả về view và truyền thông tin sản phẩm
        return view('vtdAdmins.vtdsanpham.vtd-detail', ['vtdsanpham' => $vtdsanpham]);
    }

      //create
      public function vtdCreate()
      {
          return view('vtdAdmins.vtdsanpham.vtd-create');
      }
     

     // Controller
public function vtdCreateSubmit(Request $request)
{
    // Validate input
    $validatedData = $request->validate([
        'vtdMaSanPham' => 'required|unique:vtd_SAN_PHAM,vtdMaSanPham',
        'vtdTenSanPham' => 'required|string|max:255',
        'vtdHinhAnh' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240', // Kiểm tra hình ảnh và loại định dạng
        'vtdSoLuong' => 'required|numeric|min:1',
        'vtdDonGia' => 'required|numeric',
        'vtdMaLoai' => 'required|exists:vtd_LOAI_SAN_PHAM,id',
        'vtdTrangThai' => 'required|in:0,1',
    ]);

    // Khởi tạo đối tượng vtd_SAN_PHAM và lưu thông tin vào cơ sở dữ liệu
    $vtdsanpham = new vtd_SAN_PHAM;
    $vtdsanpham->vtdMaSanPham = $request->vtdMaSanPham;
    $vtdsanpham->vtdTenSanPham = $request->vtdTenSanPham;

    // Kiểm tra nếu có tệp hình ảnh
    if ($request->hasFile('vtdHinhAnh')) {
        // Lấy tệp hình ảnh
        $file = $request->file('vtdHinhAnh');

        // Kiểm tra nếu tệp hợp lệ
        if ($file->isValid()) {
            // Tạo tên tệp dựa trên mã sản phẩm
            $fileName = $request->vtdMaSanPham . '.' . $file->extension();

            // Lưu tệp vào thư mục public/img/san_pham
            $file->storeAs('public/img/san_pham', $fileName); // Lưu tệp vào thư mục storage/app/public/img/san_pham

            // Lưu đường dẫn vào cơ sở dữ liệu
            $vtdsanpham->vtdHinhAnh = 'img/san_pham/' . $fileName; // Lưu đường dẫn tương đối trong CSDL
        }
    }

    // Lưu các thông tin còn lại vào cơ sở dữ liệu
    $vtdsanpham->vtdSoLuong = $request->vtdSoLuong;
    $vtdsanpham->vtdDonGia = $request->vtdDonGia;
    $vtdsanpham->vtdMaLoai = $request->vtdMaLoai;
    $vtdsanpham->vtdTrangThai = $request->vtdTrangThai;

    // Lưu dữ liệu vào cơ sở dữ liệu
    $vtdsanpham->save();

    // Chuyển hướng người dùng về trang danh sách sản phẩm
    return redirect()->route('vtdadims.vtdsanpham');
}

//delete

public function vtddelete($id)
{
    vtd_SAN_PHAM::where('id',$id)->delete();
return back()->with('sanpham_deleted','Đã xóa sinh viên thành công!');
}

// edit
public function vtdEdit($id)
    {
        // Tìm sản phẩm theo ID
        $vtdsanpham = VTD_SAN_PHAM::findOrFail($id);

        // Trả về view với dữ liệu sản phẩm
        return view('vtdAdmins.vtdsanpham.vtd-edit', ['vtdsanpham'=>$vtdsanpham]);
    }

    // Phương thức xử lý dữ liệu form chỉnh sửa sản phẩm


    public function vtdEditSubmit(Request $request, $id)
{
    // Validate dữ liệu
    $request->validate([
        'vtdMaSanPham' => 'required|max:20',
        'vtdTenSanPham' => 'required|max:255',
        'vtdHinhAnh' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'vtdSoLuong' => 'required|integer',
        'vtdDonGia' => 'required|numeric',
        'vtdMaLoai' => 'required|max:10',
        'vtdTrangThai' => 'required|in:0,1',
    ]);

    // Tìm sản phẩm cần chỉnh sửa
    $vtdsanpham = VTD_SAN_PHAM::findOrFail($id);

    // Cập nhật thông tin sản phẩm
    $vtdsanpham->vtdMaSanPham = $request->vtdMaSanPham;
    $vtdsanpham->vtdTenSanPham = $request->vtdTenSanPham;
    $vtdsanpham->vtdSoLuong = $request->vtdSoLuong;
    $vtdsanpham->vtdDonGia = $request->vtdDonGia;
    $vtdsanpham->vtdMaLoai = $request->vtdMaLoai;
    $vtdsanpham->vtdTrangThai = $request->vtdTrangThai;

    // Kiểm tra nếu có hình ảnh mới
    if ($request->hasFile('vtdHinhAnh')) {
        // Kiểm tra và xóa hình ảnh cũ nếu tồn tại
        if ($vtdsanpham->vtdHinhAnh && Storage::disk('public')->exists('img/san_pham/' . $vtdsanpham->vtdHinhAnh)) {
            // Xóa file cũ nếu tồn tại
            Storage::disk('public')->delete('img/san_pham/' . $vtdsanpham->vtdHinhAnh);
        }
        // Lưu hình ảnh mới
        $imagePath = $request->file('vtdHinhAnh')->store('img/san_pham', 'public');
        $vtdsanpham->vtdHinhAnh = $imagePath;
    }

    // Lưu thông tin sản phẩm đã chỉnh sửa
    $vtdsanpham->save();

    // Redirect về trang danh sách sản phẩm
    return redirect()->route('vtdadims.vtdsanpham')->with('success', 'Sản phẩm đã được cập nhật thành công.');
}

    

}
