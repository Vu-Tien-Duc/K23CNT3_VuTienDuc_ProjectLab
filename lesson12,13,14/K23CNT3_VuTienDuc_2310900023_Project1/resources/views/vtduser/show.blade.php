
@extends('_layouts.frontend.user')

@section('title', 'Chi Tiết Sản Phẩm')

@section('content-body')
    <div class="container">
        <!-- Phần hiển thị chi tiết sản phẩm -->
        <div class="text-center mb-4">
            <!-- Tên sản phẩm -->
            <h1 class="text-primary">{{ $sanPham->vtdTenSanPham }}</h1>
            
            <!-- Hình ảnh sản phẩm -->
            <img src="{{ asset('storage/' . $sanPham->vtdHinhAnh) }}" class="img-fluid mb-3" alt="{{ $sanPham->vtdTenSanPham }}" style="max-width: 80%; height: auto;">
            
            <!-- Giá -->
            <p class="mt-3 text-success"><strong>Giá: </strong>{{ number_format($sanPham->vtdDonGia, 0, ',', '.') }} VND</p>
            
            <!-- Mô tả sản phẩm -->
            <p><strong>Mô Tả: </strong>{{ $sanPham->vtdMoTa }}</p>
            
            <!-- Số lượng còn lại -->
            <p class="text-warning"><strong>Số Lượng: </strong>{{ $sanPham->vtdSoLuong }}</p>
        </div>

        <!-- Nút quay lại -->
        <div class="text-center mt-4">
            <a href="{{ url()->previous() }}" class="btn btn-secondary btn-lg">Quay Lại</a>
        </div>
    </div>
@endsection
