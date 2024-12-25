<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\vtd_HOA_DON; 
class VTD_HOA_DONController extends Controller
{
    //
      //admin CRUD
    // list -----------------------------------------------------------------------------------------------------------------------------------------
    public function vtdList()
    {
        $vtdhoadons = vtd_HOA_DON::all();
        return view('vtdAdmins.vtdhoadon.vtd-list',['vtdhoadons'=>$vtdhoadons]);
    }
    // detail -----------------------------------------------------------------------------------------------------------------------------------------
    public function vtdDetail($id)
    {
        // Tìm sản phẩm theo ID
        $vtdhoadon = vtd_HOA_DON::where('id', $id)->first();

        // Trả về view và truyền thông tin sản phẩm
        return view('vtdAdmins.vtdhoadon.vtd-detail', ['vtdhoadon' => $vtdhoadon]);
    }
}
