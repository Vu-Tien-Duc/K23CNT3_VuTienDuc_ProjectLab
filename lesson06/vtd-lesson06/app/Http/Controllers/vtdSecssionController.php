<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vtdSecssionController extends Controller
{
    // Đọc dữ liệu từ session
    public function vtdGetsessionData(Request $request)
    {
        if($request->session()->has('K23CNT3_VuTienDuc'))
        {
            echo "<h2> Session Data:". $request->session()->get("K23CNT3_VuTienDuc");
        }
        else{
            echo " <h2> Không có dữ liệu trong session";
        }
    }
    // Ghi dữ liệu vào session
    public function vtdStoreSessionData(Request $request)
    {
        $request->session()->put('K23CNT3_VuTienDuc','K23CNT3 - Vũ Tiến Đức - 2310900023');
        echo "<h2> Dữ liệu đã được lưu và session </h2>";   
    }

    //# Xóa Dữ liệu trong session
    public function vtdDeleteSessionData(Request $request)
    {
        $request->session()->forget('K23CNT3_VuTienDuc');
    echo "<h2> Dữ liệu đã được xóa khỏi session </h2>";
    }
}
