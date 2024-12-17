<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vtdVattu; 
class vtdVatTuControler extends Controller
{
    //
    public function vtdlist()
    {
          $vtdvattu = vtdVattu::all();
          $vtdvattu = vtdVattu::paginate(10);  // Thay 10 bằng số lượng bạn muốn trên mỗi trang
          return view('vtdvattu.list',['vtdvattu'=>$vtdvattu]);
    }

    public function vtddetail($mavattu)
    {
        $vtdvattu = vtdVattu::where('vtdMaVTu',$mavattu)->first();
        return view('vtdvattu.detail',['vtdvattu'=>$vtdvattu]);
    }
    public function vtdedit($mavattu)
    {
        // Lấy bản ghi vtdvattu dựa vào mã vật tư
        $vtdvattu = vtdVattu::where('vtdMaVTu', $mavattu)->first();

        // Kiểm tra nếu vật tư không tồn tại, chuyển hướng về trang danh sách với thông báo lỗi
        if (!$vtdvattu) {
            return redirect('/vtdvattu')->with('error', 'Vật tư không tồn tại.');
        }

        return view('vtdvattu.edit', ['vtdvattu' => $vtdvattu]);
    }

    public function vtdeditsubmit(Request $request, $mavattu)
    {
        // Kiểm tra dữ liệu nhập vào từ người dùng (validate)
        $request->validate([
            'tenvattu' => 'required|string|max:255',
            'donvitinh' => 'required|string|max:255',
            'phantram' => 'required|numeric|min:0|max:100', // Kiểm tra phần trăm hợp lệ từ 0 đến 100
        ]);

        // Lấy thông tin vật tư từ cơ sở dữ liệu
        $vtdvattu = vtdVattu::where('vtdMaVTu', $mavattu)->first();

        // Kiểm tra nếu vật tư không tồn tại
        if (!$vtdvattu) {
            return redirect('/vtdvattu')->with('error', 'Vật tư không tồn tại.');
        }

        // Cập nhật thông tin vật tư
        $vtdvattu->vtdTenVTu = $request->tenvattu;
        $vtdvattu->vtdDVTinh = $request->donvitinh;
        $vtdvattu->vtdPhanTram = $request->phantram; // Cập nhật phần trăm

        // Lưu lại thông tin vật tư vào cơ sở dữ liệu
        $vtdvattu->save();

        // Chuyển hướng và thông báo thành công
        return redirect('/vtdvattu')->with('success', 'Thông tin vật tư đã được cập nhật.');
    }

    public function vtdcreate()
    {
        // Trả về view và truyền dữ liệu danh mục nếu cần
        return view('vtdvattu.create');
    }
    
    public function vtdcreatesubmit(Request $request)
    {
        // Validate dữ liệu đầu vào
        $request->validate([
            'mavattu' => 'required|unique:vtdvattu,vtdMaVTu', // Mã vật tư phải duy nhất
            'tenvattu' => 'required|string|max:255',
            'donvitinh' => 'required|string|max:255',
            'phantram' => 'required|numeric|min:0|max:100', // Kiểm tra phần trăm hợp lệ từ 0 đến 100
        ]);
    
        // Tạo một đối tượng mới của model vtdVattu
        $vtdvattu = new vtdVattu;
        $vtdvattu->vtdMaVTu = $request->mavattu;
        $vtdvattu->vtdTenVTu = $request->tenvattu;
        $vtdvattu->vtdDVTinh = $request->donvitinh;
        $vtdvattu->vtdPhanTram = $request->phantram; // Cập nhật phần trăm
    
        // Lưu vật tư vào cơ sở dữ liệu
        $vtdvattu->save();
    
        // Thông báo thành công khi thêm vật tư mới
        return redirect('/vtdvattu')->with('success', 'Thông tin vật tư đã được thêm thành công.');
    }
    

    public function vtddelete($mavattu)
    {
    vtdVattu::where('vtdMaVTu',$mavattu)->delete();
    return back()->with('vattu_deleted','Đã xóa sinh viên thành công!');
    }
}
