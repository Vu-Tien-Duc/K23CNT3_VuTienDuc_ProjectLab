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

    // Hiển thị chi tiết sản phẩm
    public function show($id)
    {
        // Lấy sản phẩm theo id
        $sanPham = vtd_SAN_PHAM::findOrFail($id); 
        
        // Trả về view chi tiết sản phẩm
        return view('vtduser.show', compact('sanPham')); 
    }




    //
    public function addToCart($productId)
    {
        // Tìm sản phẩm trong cơ sở dữ liệu
        $sanPham = vtd_SAN_PHAM::findOrFail($productId);
    
        // Lấy giỏ hàng từ session, nếu không có thì khởi tạo một mảng rỗng
        $cart = session()->get('cart', []);
    
        // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
        if(isset($cart[$productId])) {
            // Nếu có rồi thì tăng số lượng lên
            $cart[$productId]['quantity']++;
        } else {
            // Nếu chưa có thì thêm sản phẩm vào giỏ hàng với số lượng là 1
            $cart[$productId] = [
                'name' => $sanPham->vtdTenSanPham,
                'quantity' => 1,
                'price' => $sanPham->vtdDonGia,
                'image' => $sanPham->vtdHinhAnh,
            ];
        }
    
        // Cập nhật lại giỏ hàng vào session
        session()->put('cart', $cart);
    
        // Quay lại trang sản phẩm hoặc đến trang giỏ hàng
        return redirect()->back()->with('success', 'Đã thêm sản phẩm vào giỏ hàng!');
    }
    

    public function cart()
    {
        return view('cart.index');
    }

}   