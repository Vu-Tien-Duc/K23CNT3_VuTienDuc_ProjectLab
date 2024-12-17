<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class vtdmonhocController extends Controller
{
    // list monhoc
    public function vtdGetAllMonhoc()
    {
    

          $vtdmonhoc = DB::table('vtdmonhoc')->get();
          return view('vtdmonhoc.vtdlist',['vtdmonhoc'=>$vtdmonhoc]);
    }

      // chi tiết monhoc
      public function tvcGetMonhoc($mamonhoc)
      {
         

          $vtdmonhoc = DB::table('vtdmonhoc')->where('vtdmamonhoc',$mamonhoc)->first();
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
         // Xác thực dữ liệu đầu vào
         $validate = $request->validate([
             'mamonhoc' => 'required|max:2',      // Tên trường phải trùng với name trong form
             'tenmonhoc' => 'required|max:50',    // Tên trường phải trùng với name trong form
             'sotiet' => 'required|integer',      // Sử dụng 'integer' thay vì 'number'
         ], [
             'mamonhoc.required' => 'Vui lòng nhập mã môn học',
             'mamonhoc.max' => 'Mã môn học chỉ tối đa 2 ký tự',
             'tenmonhoc.required' => 'Vui lòng nhập tên môn học',
             'tenmonhoc.max' => 'Tên môn học chỉ tối đa 50 ký tự',
             'sotiet.required' => 'Vui lòng nhập số tiết',
             'sotiet.integer' => 'Số tiết phải là một số nguyên',
         ]);
     
         // Lấy dữ liệu từ form và chèn vào cơ sở dữ liệu
         DB::table('vtdmonhoc')->insert([
             'VTDMAMONHOC' => $request->mamonhoc,  // mamonhoc Đảm bảo lấy đúng tên trường từ form
             'VTDTENMONHOC' => $request->tenmonhoc,  // tenmonhoc Đảm bảo lấy đúng tên trường từ form
             'VTDSOTIET' => $request->sotiet,  //  sotiet Đảm bảo lấy đúng tên trường từ form
         ]);
     
         // Sau khi chèn thành công, chuyển hướng về trang danh sách môn học
         return redirect('/monhoc');
     }

            // Edit Form
            public function vtdedit($mamonhoc)
            {
            $vtdmonhoc = DB::table('vtdmonhoc')->where('VTDMAMONHOC',$mamonhoc)->first();
            return view('vtdmonhoc.vtdedit',['vtdmonhoc'=>$vtdmonhoc]);
            }
            
            public function vtdeditSubmit(Request $request)
            {
                    DB::table('vtdmonhoc')
                    ->where('VTDMAMONHOC',$request->VTDMAMONHOC) // naem ở form
                    ->update(
                        [
                        'VTDMAMONHOC' =>$request->VTDMAMONHOC,
                        'VTDTENMONHOC' =>$request->VTDTENMONHOC,
                        'VTDSOTIET' =>$request->VTDSOTIET,
                        ]
                );
                return redirect('/monhoc');
            }

            // delete -> $mamh
                public function vtddelete($mamonhoc)
                {
                DB::table('vtdmonhoc')->where('VTDMAMONHOC','=', $mamonhoc)->delete();
                return redirect('/monhoc');
                }

            
        }
