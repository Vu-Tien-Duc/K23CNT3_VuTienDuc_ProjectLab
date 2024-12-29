<?php

namespace App\Http\Controllers;

use App\Models\vtd_SAN_PHAM;
use App\Models\vtd_HOA_DON;
use App\Models\vtd_CT_HOA_DON;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Trang chủ - hiển thị tất cả sản phẩm
    public function index()
    {
        // Lấy tất cả sản phẩm
        $sanPhams = vtd_SAN_PHAM::all();
        
        // Trả về view và truyền dữ liệu sản phẩm vào
        return view('vtduser.home', compact('sanPhams'));
    }
    public function index1()
    {
        // Lấy tất cả sản phẩm
        $sanPhams = vtd_SAN_PHAM::all();
        
        // Trả về view và truyền dữ liệu sản phẩm vào
        return view('vtduser.home1', compact('sanPhams'));
    }

    // Hiển thị chi tiết sản phẩm
    public function show($id)
    {
        // Lấy sản phẩm theo id
        $sanPham = vtd_SAN_PHAM::findOrFail($id); 
        
        // Trả về view chi tiết sản phẩm
        return view('vtduser.show', compact('sanPham')); 
    }






 


}   