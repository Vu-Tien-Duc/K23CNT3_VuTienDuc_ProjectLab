@extends('_layouts.frontend.user1')

@section('title', 'Thông Tin Hóa Đơn')

@section('content-body')
<div class="container py-6 px-4 max-w-3xl mx-auto">
    <h1 class="text-3xl font-bold text-center text-blue-600 mb-6">Thông Tin Hóa Đơn</h1>

    <div class="card shadow-lg rounded-lg overflow-hidden">
        <div class="card-header bg-blue-600 text-white p-4">
            <h3 class="text-xl font-semibold">Hóa Đơn ID: {{ $hoaDon->vtdMaHoaDon }}</h3>
        </div>
        <div class="card-body p-6 bg-white">
            <div class="space-y-4">
                <p><strong class="font-semibold text-gray-700">Tên Khách Hàng:</strong> {{ $hoaDon->vtdHoTenKhachHang }}</p>
                <p><strong class="font-semibold text-gray-700">Email:</strong> {{ $hoaDon->vtdEmail }}</p>
                <p><strong class="font-semibold text-gray-700">Số Điện Thoại:</strong> {{ $hoaDon->vtdDienThoai }}</p>
                <p><strong class="font-semibold text-gray-700">Địa Chỉ:</strong> {{ $hoaDon->vtdDiaChi }}</p>
                <p><strong class="font-semibold text-gray-700">Tổng Giá Trị:</strong> {{ number_format($hoaDon->vtdTongGiaTri, 0, ',', '.') }} VND</p>
                <p><strong class="font-semibold text-gray-700">Ngày Hóa Đơn:</strong> {{ $hoaDon->vtdNgayHoaDon }}</p>
                <p><strong class="font-semibold text-gray-700">Ngày Nhận:</strong> {{ $hoaDon->vtdNgayNhan }}</p>
                <p><strong class="font-semibold text-gray-700">Trạng Thái:</strong> 
                    @if ($hoaDon->vtdTrangThai == 0)
                        <span class="text-red-600">Chưa Thanh Toán</span>
                    @elseif ($hoaDon->vtdTrangThai == 1)
                        <span class="text-green-600">Đã Thanh Toán</span>
                    @endif
                </p>

               
                
        </div>
        <div class="card-footer text-center py-4 bg-gray-100">
            <a href="{{ route('cthoadon.create', ['hoaDonId' => $hoaDon->id, 'sanPhamId' => $sanPham->id]) }}" class="btn btn-primary px-6 py-3 font-semibold bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300">
                Tạo Chi Tiết Hóa Đơn
            </a>
        </div>
    </div>
</div>
@endsection

<!-- Additional Styling -->
<style>
    .card {
        border-radius: 8px;
        border: 1px solid #e2e8f0;
    }

    .card-header {
        background-color: #2563eb;
        color: white;
        padding: 16px;
        border-bottom: 1px solid #e2e8f0;
    }

    .card-body {
        padding: 24px;
        background-color: white;
    }

    .card-footer {
        background-color: #f3f4f6;
        padding: 16px;
    }

    .btn {
        display: inline-block;
        padding: 12px 24px;
        font-size: 1rem;
        font-weight: bold;
        border-radius: 8px;
        text-align: center;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        background-color: #1d4ed8;
    }

    .font-semibold {
        font-weight: 600;
    }

    .space-y-4 > * + * {
        margin-top: 16px;
    }
</style>
