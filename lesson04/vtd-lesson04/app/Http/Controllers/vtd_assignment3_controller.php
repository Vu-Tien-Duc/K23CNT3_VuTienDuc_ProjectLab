<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vtd_assignment3_controller extends Controller
{
    public function index()
    {
        return view('vtd-assignment3');
    }

    public function store(Request $request)
    {
        // Xác thực dữ liệu
        $validated = $request->validate([
            'arrival_date' => 'required|date',
            'nights' => 'required|integer|min:1', // Nights phải lớn hơn hoặc bằng 1
            'adults' => 'required|integer|min:1', // Adults phải lớn hơn hoặc bằng 1
            'children' => 'nullable|integer|min:0', // Children có thể bỏ qua, nhưng nếu có thì phải >= 0
            'room_type' => 'required|in:standard,bussiness,suite',
            'bed_type' => 'required|in:king,double double',
            'smoking' => 'nullable|boolean', // Smoking là tùy chọn
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|regex:/^(\+?\d{1,4}[\s\-]?)?(\(?\d{1,3}\)?[\s\-]?)?\d{3,4}[\s\-]?\d{4}$/', // Kiểm tra số điện thoại
        ]);

        $arrival_date = $request->input('arrival_date');
        $nights = $request->input('nights');
        $adults = $request->input('adults');
        $children = $request->input('children');
        $room_type = $request->input('room_type');
        $bed_type = $request->input('bed_type');
        $smoking = $request->input('smoking') ?? false; // Nếu không có giá trị smoking, mặc định là false
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');


        return $request->all();

    }
}
