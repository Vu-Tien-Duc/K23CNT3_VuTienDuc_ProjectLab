@extends('_layouts.frontend.user1')  <!-- Layout của bạn -->

@section('title', 'Thông Tin Chi Tiết Hóa Đơn')

@section('content-body')
<div class="container">
    <h1>Thông Tin Chi Tiết Hóa Đơn</h1>

    <div class="card">
        <div class="card-header">
            <!-- Tiêu đề của card (nếu cần) -->
        </div>
        <div class="card-body">
            <!-- Kiểm tra xem các trường có tồn tại và có dữ liệu hay không -->
            <p><strong>Hóa Đơn ID:</strong> {{ $chiTietHoaDon->vtdHoaDonID ?? 'Không có thông tin' }}</p>
            <p><strong>Sản Phẩm ID:</strong> {{ $chiTietHoaDon->vtdSanPhamID ?? 'Không có thông tin' }}</p>
            <p><strong>Số Lượng Mua:</strong> {{ $hoaDon->chiTietHoaDon->first()->vtdSoLuongMua ?? 'Không có thông tin' }}</p>
            <p><strong>Đơn Giá Mua:</strong> {{ number_format($hoaDon->chiTietHoaDon->first()->vtdDonGiaMua ?? 0, 0, ',', '.') }} VND</p>
            <p><strong>Thành Tiền:</strong> {{ number_format($hoaDon->chiTietHoaDon->first()->vtdThanhTien ?? 0, 0, ',', '.') }} VND</p>
            <p><strong>Trạng Thái:</strong> 
                @if ($hoaDon->vtdTrangThai == 0)
                    Chưa Thanh Toán
                @elseif ($hoaDon->vtdTrangThai == 1)
                    Đã Thanh Toán
                @else
                    Không xác định
                @endif
            </p>
        </div>
    </div>
</div>

@endsection
