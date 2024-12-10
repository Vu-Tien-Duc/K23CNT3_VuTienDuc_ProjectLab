<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class vtdmonhocController extends Controller
{
    public function vtdGetAllMonhoc()
    {
          // truy vấn dữ liệu từ bảng monhoc
          $vtdmonhoc = DB::select('select * from vtdmonhoc');
          // chuyển dử liệu lên view để hiển thị
          return view('vtdmonhoc.vtdlist',['vtdmonhoc'=>$vtdmonhoc]);
    }

      // chi tiết monhoc
      public function tvcGetMonhoc($mamonhoc)
      {
          $vtdmonhoc = DB::select("select * from vtdmonhoc where vtdmamonhoc=?",[$mamonhoc])[0];
          return view('vtdmonhoc.vtddetail',['vtdmonhoc'=>$vtdmonhoc]);
      }

      // create
      public function vtdCreate()
      {
          return view('vtdmonhoc.vtdcreate'); // Trả về view 'monhoc.create'
      }
  
      // Xử lý form tạo mới monhoc
     // CreateSubmit
     public function vtdCreateSubmit(Request $request)
     {
         // Lấy dữ liệu từ form thông qua request
         $mamonhoc = $request->input('mamonhoc');  // Mã monhoc
         $tenmonhoc = $request->input('tenmonhoc');  // Tên monhoc
        $sotiet = $request->input('sotiet');
         // Chèn dữ liệu vào bảng vtdmonhoc
         DB::insert('insert into vtdmonhoc (VTDMAMONHOC, VTDTENMONHOC,VTDSOTIET) values (?, ?,?)', [$mamonhoc, $tenmonhoc,$sotiet]);
     
         // Sau khi chèn thành công, chuyển hướng về trang monhoc
         return redirect('/monhoc');
     }
  
}
