<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vtd_CT_HOA_DON; 
use App\Models\vtd_SAN_PHAM; 
use App\Models\vtd_HOA_DON; 

class VTD_CT_HOA_DONController extends Controller
{
    //
      //admin CRUD
    // list -----------------------------------------------------------------------------------------------------------------------------------------
    public function vtdList()
    {
        $vtdcthoadons = vtd_CT_HOA_DON::all();
        return view('vtdAdmins.vtdcthoadon.vtd-list',['vtdcthoadons'=>$vtdcthoadons]);
    }
    // detail -----------------------------------------------------------------------------------------------------------------------------------------
    public function vtdDetail($id)
    {
        // Tìm sản phẩm theo ID
        $vtdcthoadon = vtd_CT_HOA_DON::where('id', $id)->first();

        // Trả về view và truyền thông tin sản phẩm
        return view('vtdAdmins.vtdcthoadon.vtd-detail', ['vtdcthoadon' => $vtdcthoadon]);
    }

     // create-----------------------------------------------------------------------------------------------------------------------------------------
     public function vtdCreate()
     {
         $vtdhoadon = vtd_HOA_DON::all();
         $vtdsanpham = VTD_SAN_PHAM::all();
         return view('vtdAdmins.vtdcthoadon.vtd-create',['vtdhoadon'=>$vtdhoadon,'vtdsanpham'=>$vtdsanpham]);
     }
     //post-----------------------------------------------------------------------------------------------------------------------------------------
     public function vtdCreateSubmit(Request $request)
     {
         // Xác thực dữ liệu yêu cầu dựa trên các quy tắc xác thực
         $validate = $request->validate([
             'vtdHoaDonID' => 'required|exists:vtd_hoa_don,id',
             'vtdSanPhamID' => 'required|exists:vtd_san_pham,id',
             'vtdSoLuongMua' => 'required|numeric',  
             'vtdDonGiaMua' => 'required|numeric',
             'vtdThanhTien' => 'required|numeric',  
             'vtdTrangThai' => 'required|in:0,1,2',
         ]);
     
         // Tạo một bản ghi hóa đơn mới
         $vtdcthoadon = new vtd_CT_HOA_DON;
     
         // Gán dữ liệu xác thực vào các thuộc tính của mô hình
         $vtdcthoadon->vtdHoaDonID = $request->vtdHoaDonID;
         $vtdcthoadon->vtdSanPhamID = $request->vtdSanPhamID;  
         $vtdcthoadon->vtdSoLuongMua = $request->vtdSoLuongMua;
         $vtdcthoadon->vtdDonGiaMua = $request->vtdDonGiaMua;
         $vtdcthoadon->vtdThanhTien = $request->vtdThanhTien;
         $vtdcthoadon->vtdTrangThai = $request->vtdTrangThai;
     
        
     
         // Lưu bản ghi mới vào cơ sở dữ liệu
         $vtdcthoadon->save();
     
         // Chuyển hướng đến danh sách hóa đơn
         return redirect()->route('vtdadmins.vtdcthoadon');
     }

      // edit-----------------------------------------------------------------------------------------------------------------------------------------
      public function vtdEdit($id)
{
    $vtdhoadon = vtd_HOA_DON::all(); // Lấy tất cả các hóa đơn
    $vtdsanpham = VTD_SAN_PHAM::all(); // Lấy tất cả các sản phẩm

    // Lấy chi tiết hóa đơn cần chỉnh sửa
    $vtdcthoadon = vtd_CT_HOA_DON::where('id', $id)->first();

    if (!$vtdcthoadon) {
        // Nếu không tìm thấy chi tiết hóa đơn, chuyển hướng với thông báo lỗi
        return redirect()->route('vtdadmins.vtdcthoadon')->with('error', 'Không tìm thấy chi tiết hóa đơn!');
    }

    // Trả về view với dữ liệu
    return view('vtdAdmins.vtdcthoadon.vtd-edit', [
        'vtdhoadon' => $vtdhoadon,
        'vtdsanpham' => $vtdsanpham,
        'vtdcthoadon' => $vtdcthoadon
    ]);
}

      //post-----------------------------------------------------------------------------------------------------------------------------------------
      public function vtdEditSubmit(Request $request,$id)
      {
          // Xác thực dữ liệu yêu cầu dựa trên các quy tắc xác thực
          $validate = $request->validate([
              'vtdHoaDonID' => 'required|exists:vtd_hoa_don,id',
              'vtdSanPhamID' => 'required|exists:vtd_san_pham,id',
              'vtdSoLuongMua' => 'required|numeric',  
              'vtdDonGiaMua' => 'required|numeric',
              'vtdThanhTien' => 'required|numeric',  
              'vtdTrangThai' => 'required|in:0,1,2',
          ]);
         
      
          // Tạo một bản ghi hóa đơn mới
          $vtdcthoadon = vtd_CT_HOA_DON::where('id', $id)->first();
      
          // Gán dữ liệu xác thực vào các thuộc tính của mô hình
          $vtdcthoadon->vtdHoaDonID = $request->vtdHoaDonID;
          $vtdcthoadon->vtdSanPhamID = $request->vtdSanPhamID;  
          $vtdcthoadon->vtdSoLuongMua = $request->vtdSoLuongMua;
          $vtdcthoadon->vtdDonGiaMua = $request->vtdDonGiaMua;
          $vtdcthoadon->vtdThanhTien = $request->vtdThanhTien;
          $vtdcthoadon->vtdTrangThai = $request->vtdTrangThai;
      
         
      
          // Lưu bản ghi mới vào cơ sở dữ liệu
          $vtdcthoadon->save();
      
          // Chuyển hướng đến danh sách hóa đơn
          return redirect()->route('vtdadmins.vtdcthoadon');
      }

        //delete
        public function vtdDelete($id)
        {
            vtd_CT_HOA_DON::where('id',$id)->delete();
            return back()->with('cthoadon_deleted','Đã xóa Khách hàng thành công!');
        }
     
}
