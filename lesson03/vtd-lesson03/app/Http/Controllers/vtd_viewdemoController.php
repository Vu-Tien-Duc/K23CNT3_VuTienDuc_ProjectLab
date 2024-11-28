<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View; // Thêm dòng này để sử dụng View

class vtd_viewdemoController extends Controller
{
    public function view4()
    {
        return view('view-4')   // chuyền dữ liệu vào view-4
            ->with('name','Vũ Đức') // với name = Vũ Đức
            ->with('company','Devmaster D');; // company = Devmaster D
    }


    public function view5()
    {
        // Dữ liệu 
        $info = "K23 Công Nghệ Thông Tin 3";    // chuyền thông tin và view-5 
        $emp = array (
            'name'=>'Vũ Tiến Đức',
            'Email'=>'vuduc1298@gmail.com',
            'Phone'=>'0973102163',
        );
        if(View::exists('view-5'))  // kiểm tra xem có view-5 không
        {
            return view('view-5',['tt'=>$info,'empp'=>$emp]); // nếu có chuyền thông tin vào view-5 tt=>$info là $tt ở bên view-5
        }
        else{       // nếu không có view-5 thì báo
            return "<h1> Không Tồn Tại view-5";
        }
    }
}
