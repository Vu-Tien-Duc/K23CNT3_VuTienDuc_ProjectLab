@extends('_layouts.frontend.user1')

@section('title', 'Hóa Đơn')

@section('content-body')
<div class="container py-6 px-4 max-w-xl mx-auto">
    <!-- Title -->
    <h1 class="text-3xl font-bold text-center text-blue-600 mb-6">Mua Sản Phẩm: {{ $sanPham->vtdTenSanPham }}</h1>

    <form action="{{ route('hoadon.store', ['sanPham' => $sanPham->id]) }}" method="POST" class="space-y-6">
        @csrf

        <!-- Customer Information -->
        <div class="mb-4">
            <label for="vtdMaKhachHang" class="form-label text-lg font-semibold text-gray-700">Mã Khách Hàng</label>
            <input type="text" name="vtdMaKhachHang" value="{{ Session::get('vtdMaKhachHang', '') }}" class="form-control rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 w-full" required readonly>
        </div>

        <div class="mb-4">
            <label for="vtdHoTenKhachHang" class="form-label text-lg font-semibold text-gray-700">Họ Tên Khách Hàng</label>
            <input type="text" name="vtdHoTenKhachHang" value="{{ Session::get('username1', '') }}" class="form-control rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 w-full" required readonly>
        </div>

        <div class="mb-4">
            <label for="vtdEmail" class="form-label text-lg font-semibold text-gray-700">Email</label>
            <input type="email" name="vtdEmail" value="{{ Session::get('vtdEmail', '') }}" class="form-control rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 w-full" required readonly>
        </div>

        <div class="mb-4">
            <label for="vtdDienThoai" class="form-label text-lg font-semibold text-gray-700">Số Điện Thoại</label>
            <input type="text" name="vtdDienThoai" value="{{ Session::get('vtdDienThoai', '') }}" class="form-control rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 w-full" required readonly>
        </div>

        <div class="mb-4">
            <label for="vtdDiaChi" class="form-label text-lg font-semibold text-gray-700">Địa Chỉ</label>
            <input type="text" name="vtdDiaChi" value="{{ Session::get('vtdDiaChi', '') }}" class="form-control rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 w-full" required readonly>
        </div>

        <!-- Product Quantity -->
        <input type="hidden" name="vtdSanPhamId" value="{{ $sanPham->id }}" required>
        <div class="mb-4">
            <label for="vtdSoLuong" class="form-label text-lg font-semibold text-gray-700">Số Lượng</label>
            <input type="number" name="vtdSoLuong" value="1" min="1" max="{{ $sanPham->vtdSoLuong }}" class="form-control rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 w-full" required>
        </div>

        <!-- Submit Button -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary px-6 py-3 text-lg font-semibold bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300">
                Mua Sản Phẩm
            </button>
        </div>
        
    </form>
</div>
@endsection

<!-- Additional Styling -->
<style>
    .form-control {
        padding: 10px;
        font-size: 1rem;
        border-radius: 8px;
    }

    .btn {
        display: inline-block;
        padding: 12px 24px;
        font-size: 1.1rem;
        font-weight: bold;
        border-radius: 8px;
        text-align: center;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        background-color: #2563EB;
    }

    .form-label {
        font-size: 1.1rem;
    }

    /* Adjusting the input fields */
    .form-control {
        border: 2px solid #ccc;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #3B82F6;
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
    }

    /* Container styling */
    .container {
        max-width: 600px;
    }

    /* Button custom styles */
    .btn-primary {
        background-color: #3B82F6;
    }
</style>
