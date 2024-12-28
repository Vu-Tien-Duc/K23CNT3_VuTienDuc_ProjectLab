@extends('_layouts.frontend.user')

@section('title', 'Trang Chủ')

@section('content-body')
    <div class="container">
        <h1>Chào mừng đến với Trang Chủ</h1>
        <p>Đây là giao diện người dùng, nơi bạn có thể xem thông tin và tương tác với các tính năng của website.</p>

        <!-- Danh sách sản phẩm -->
        <div class="row">
            @foreach ($sanPhams as $sanPham)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/' . $sanPham->vtdHinhAnh) }}" class="card-img-top product-img" alt="{{ $sanPham->vtdTenSanPham }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $sanPham->vtdTenSanPham }}</h5>
                            <p class="card-text"><strong>{{ number_format($sanPham->vtdDonGia, 0, ',', '.') }} VND</strong></p>
                            <p class="card-text"><small class="text-muted">Số lượng còn lại: {{ $sanPham->vtdSoLuong }}</small></p>
                            
                            <!-- Nút xem chi tiết -->
                            <a href="{{ route('vtduser.show', $sanPham->id) }}" class="btn btn-primary btn-sm">Xem Chi Tiết</a>

                            <!-- Nút Mua và icon giỏ hàng -->
                            <a href="{{ route('vtduser.hoadon', $sanPham->id) }}" 
                               class="btn btn-success btn-sm" 
                               onclick="return confirm('Bạn muốn mua {{ $sanPham->vtdTenSanPham }} này không ?');" 
                               title="Mua">
                                <i class="fa fa-shopping-cart"></i> Mua
                            </a>

                            <!-- Thêm vào giỏ hàng -->
                            <form id="add-to-cart-form-{{ $sanPham->id }}" action="{{ route('vtduser.addToCart', $sanPham->id) }}" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit" class="btn btn-warning btn-sm" title="Thêm vào giỏ" 
                                        onclick="return confirmAddToCart('{{ $sanPham->vtdTenSanPham }}', {{ $sanPham->id }})">
                                    <i class="fa fa-cart-plus"></i> Thêm vào giỏ
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

<!-- Thêm CSS cho layout sản phẩm -->
<style>
    .product-img {
        width: 100%;
        height: 300px;
        object-fit: cover;
    }

    .card-body {
        text-align: center;
    }

    .btn-primary, .btn-success, .btn-warning {
        margin-top: 10px;
    }

    .card {
        border: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    @media (max-width: 767px) {
        .product-img {
            height: 200px;
        }
    }
</style>



<!-- JavaScript to handle confirmation -->
<script>
    function confirmAddToCart(productName, productId) {
        var userConfirmed = confirm('Bạn có muốn thêm "' + productName + '" vào giỏ hàng không?');
        
        if (userConfirmed) {
            // Submit the form if user confirmed
            document.getElementById('add-to-cart-form-' + productId).submit();
        }
        
        return false; // Prevent default form submission behavior
    }
</script>
