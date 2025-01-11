@extends('_layouts.frontend.user')

@section('title', 'Chi Tiết Sản Phẩm')

@section('content-body')
    <div class="container mx-auto py-8">
        <!-- Phần hiển thị chi tiết sản phẩm -->
        <div class="text-center mb-8">
            <!-- Tên sản phẩm -->
            <h1 class="text-4xl font-bold text-blue-700 mb-5">{{ $sanPham->vtdTenSanPham }}</h1>
            
            <!-- Hình ảnh sản phẩm -->
            <img src="{{ asset('storage/' . $sanPham->vtdHinhAnh) }}" class="mx-auto my-6 rounded-lg shadow-xl transition-transform transform hover:scale-105" alt="{{ $sanPham->vtdTenSanPham }}" style="max-width: 80%; height: auto;">
            
            <!-- Giá -->
            <p class="mt-3 text-2xl text-green-600 font-semibold"><strong>Giá: </strong>{{ number_format($sanPham->vtdDonGia, 0, ',', '.') }} VND</p>
            
            <!-- Mô tả sản phẩm -->
            <p class="mt-5 text-lg text-gray-700 leading-relaxed"><strong>Mô Tả: </strong>{{ $sanPham->vtdMoTa }}</p>
            
            <!-- Số lượng còn lại -->
            <p class="mt-4 text-lg text-yellow-600 font-semibold"><strong>Số Lượng: </strong>{{ $sanPham->vtdSoLuong }} sản phẩm còn lại</p>
        </div>

        <!-- Nút quay lại -->
        <div class="text-center mt-8">
            <a href="{{ url()->previous() }}" class="bg-blue-500 text-white py-3 px-6 rounded-lg hover:bg-blue-600 transition duration-300 text-lg">
                Quay Lại
            </a>
        </div>
    </div>
@endsection

<!-- Additional Styling -->
<style>
    /* Custom styles for product image hover effect */
    .product-img {
        transition: transform 0.3s ease-in-out;
    }

    .product-img:hover {
        transform: scale(1.05); /* Slight zoom effect on hover */
    }

    /* Button Styling */
    .bg-blue-500 {
        background-color: #3B82F6; /* Blue background for buttons */
    }

    .bg-blue-500:hover {
        background-color: #2563EB; /* Darker blue on hover */
    }

    /* Text Styles */
    h1 {
        font-size: 2.5rem; /* Larger title */
        color: #1D4ED8; /* Blue color for the title */
    }

    /* Container */
    .container {
        max-width: 800px;
        margin: 0 auto;
    }
</style>
