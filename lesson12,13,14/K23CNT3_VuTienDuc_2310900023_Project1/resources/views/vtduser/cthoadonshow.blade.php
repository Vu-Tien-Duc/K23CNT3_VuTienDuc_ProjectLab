@extends('_layouts.frontend.user1')  <!-- Layout của bạn -->

@section('title', 'Thông Tin Chi Tiết Hóa Đơn')

@section('content-body')
<div class="container py-6 max-w-4xl mx-auto">
    <h1 class="text-3xl font-bold text-center text-blue-600 mb-6">Thông Tin Chi Tiết Hóa Đơn</h1>

    <div class="card shadow-lg rounded-lg">
        <div class="card-header bg-blue-600 text-white py-4 text-center">
            <h3 class="text-xl font-semibold">Chi Tiết Hóa Đơn #{{ $chiTietHoaDon->vtdHoaDonID ?? 'Không có thông tin' }}</h3>
        </div>
        <div class="card-body bg-white p-6 space-y-4">
            <!-- Kiểm tra xem các trường có tồn tại và có dữ liệu hay không -->
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <p class="text-lg font-semibold text-gray-700">Hóa Đơn ID:</p>
                    <p class="text-lg">{{ $chiTietHoaDon->vtdHoaDonID ?? 'Không có thông tin' }}</p>
                </div>
                <div>
                    <p class="text-lg font-semibold text-gray-700">Sản Phẩm ID:</p>
                    <p class="text-lg">{{ $chiTietHoaDon->vtdSanPhamID ?? 'Không có thông tin' }}</p>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <p class="text-lg font-semibold text-gray-700">Số Lượng Mua:</p>
                    <p class="text-lg">{{ $hoaDon->chiTietHoaDon->first()->vtdSoLuongMua ?? 'Không có thông tin' }}</p>
                </div>
                <div>
                    <p class="text-lg font-semibold text-gray-700">Đơn Giá Mua:</p>
                    <p class="text-lg">{{ number_format($hoaDon->chiTietHoaDon->first()->vtdDonGiaMua ?? 0, 0, ',', '.') }} VND</p>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <p class="text-lg font-semibold text-gray-700">Thành Tiền:</p>
                    <p class="text-lg">{{ number_format($hoaDon->chiTietHoaDon->first()->vtdThanhTien ?? 0, 0, ',', '.') }} VND</p>
                </div>
                <div>
                    <p class="text-lg font-semibold text-gray-700">Trạng Thái:</p>
                    <p class="text-lg">
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

            <!-- Nút Quay Lại -->
            <div class="text-center mt-6">
                <a href="{{ route('vtduser.home1') }}" class="btn btn-secondary py-2 px-6 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition duration-300">
                    Quay Lại
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
