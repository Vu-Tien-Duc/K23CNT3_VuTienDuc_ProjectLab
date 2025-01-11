@extends('_layouts.frontend.user1')

@section('title', 'Trang Chủ')

@section('content-body')
    <div class="container mt-6 px-4">
     
        <!-- Danh sách sản phẩm -->
        <div class="row g-4">
            @foreach ($sanPhams as $sanPham)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg rounded-lg overflow-hidden transform transition-all hover:scale-105 hover:shadow-xl">
                        <!-- Product Image with adjusted height -->
                        <div class="image-container">
                            <img src="{{ asset('storage/' . $sanPham->vtdHinhAnh) }}" class="card-img-top product-img" alt="{{ $sanPham->vtdTenSanPham }}">
                        </div>

                        <div class="card-body text-center">
                            <h5 class="card-title text-lg font-semibold text-gray-800">{{ $sanPham->vtdTenSanPham }}</h5>
                            <p class="card-text text-red-500 font-bold">{{ number_format($sanPham->vtdDonGia, 0, ',', '.') }} VND</p>
                            <p class="card-text text-sm text-gray-600"><small>Số lượng còn lại: {{ $sanPham->vtdSoLuong }}</small></p>

                            <!-- Xem chi tiết button -->
                            <a href="{{ route('vtduser.show', $sanPham->id) }}" class="btn btn-primary btn-sm w-full mt-2">Xem Chi Tiết</a>

                            <!-- Mua button -->
                            <a href="{{ route('sanpham.show', ['sanPham' => $sanPham->id]) }}" class="btn btn-primary btn-sm w-full mt-2">
                                <i class="fa fa-shopping-cart"></i> Mua
                            </a>

                            <!-- Thêm vào giỏ hàng button -->
                            <button type="button" class="btn btn-warning btn-sm w-full mt-2 add-to-cart-btn" data-id="{{ $sanPham->id }}" data-name="{{ $sanPham->vtdTenSanPham }}">
                                <i class="fa fa-cart-plus"></i> Thêm vào giỏ
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-3">
        {{ $sanPhams->links('pagination::bootstrap-5') }}
    </div>
@endsection

<!-- Additional Styling for Product Cards -->
<style>
    .product-img {
        width: 100%;
        height: 350px; /* Adjusted height for better display */
        object-fit: cover; /* Ensures the image maintains its aspect ratio */
        transition: transform 0.3s ease, opacity 0.3s ease;
        border-radius: 10px; /* Rounded corners for images */
    }

    .image-container {
        position: relative;
        overflow: hidden;
    }

    /* Hover effect: zoom on image */
    .product-img:hover {
        transform: scale(1.05); /* Slight zoom effect on hover */
        opacity: 0.85;
    }

    .card-body {
        padding: 1rem;
    }

    .btn-primary, .btn-success, .btn-warning {
        margin-top: 10px;
        transition: background-color 0.3s ease;
        width: 100%;
    }

    .btn-primary:hover, .btn-success:hover, .btn-warning:hover {
        opacity: 0.8;
    }

    .card {
        border: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
    }

    /* Responsive Styling */
    @media (max-width: 767px) {
        .product-img {
            height: 250px; /* Slightly smaller image height for mobile devices */
        }
    }

    /* Custom Styling for "Add to Cart" button */
    .add-to-cart-btn {
        background-color: #ff9800;
        color: white;
        border-radius: 5px;
    }

    .add-to-cart-btn:hover {
        background-color: #f57c00;
        cursor: pointer;
    }

    /* Pagination Styling */
    .pagination {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .pagination .page-item {
        margin: 0 5px;
    }

    .pagination .page-link {
        border-radius: 5px;
        padding: 10px 20px;
        background-color: #f4f4f4;
        color: #333;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .pagination .page-link:hover {
        background-color: #007bff;
        color: white;
    }
</style>

<!-- JavaScript to handle confirmation and AJAX -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Lắng nghe sự kiện click vào nút "Thêm vào giỏ hàng"
        $('.add-to-cart-btn').click(function() {
            // Lấy id và tên sản phẩm từ thuộc tính data của nút
            var productId = $(this).data('id');
            var productName = $(this).data('name');

            // Gửi yêu cầu AJAX để thêm sản phẩm vào giỏ
            $.ajax({
                url: '{{ route('cart.add') }}', // Đảm bảo route này đúng với route đã tạo ở trên
                method: 'POST',
                data: {
                    product_id: productId,
                    product_name: productName,
                    _token: '{{ csrf_token() }}' // Đừng quên gửi token CSRF
                },
                success: function(response) {
                    // Cập nhật số lượng giỏ hàng
                    $('#cart-count').text(response.cart_count);
                },
                error: function(xhr, status, error) {
                    alert('Đã có lỗi xảy ra! Hãy thử lại sau.');
                }
            });
        });
    });
</script>
