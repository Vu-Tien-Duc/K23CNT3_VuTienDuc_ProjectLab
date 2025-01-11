@extends('_layouts.frontend.user')

@section('title', 'Trang Chủ')

@section('content-body')
    <div class="container mx-auto mt-6 px-4">
        @if(isset($products) && $products->count() > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($products as $sanpham)
                    <div class="bg-white shadow-xl rounded-lg overflow-hidden transform transition-all hover:scale-105 hover:shadow-2xl border border-gray-200">
                        <!-- Product Image -->
                        <img src="{{ asset('storage/' . $sanpham->vtdHinhAnh) }}" class="w-full h-72 sm:h-80 md:h-96 object-cover rounded-t-lg" alt="{{ $sanpham->vtdTenSanPham }}">

                        <div class="p-4">
                            <h5 class="text-lg font-semibold text-gray-800 truncate">{{ $sanpham->vtdTenSanPham }}</h5>
                            <p class="text-red-500 font-bold mt-2">{{ number_format($sanpham->vtdDonGia, 0, ',', '.') }} VND</p>
                            <p class="text-sm text-gray-600 mt-2"><small>Số lượng còn lại: {{ $sanpham->vtdSoLuong }}</small></p>

                            <div class="mt-4">
                                <!-- Xem chi tiết -->
                                <div class="mb-2">
                                    <a href="{{ route('vtduser.show', $sanpham->id) }}" class="bg-blue-500 text-white py-2 px-4 rounded-md text-sm hover:bg-blue-600 transition duration-300 w-full block text-center">
                                        Xem Chi Tiết
                                    </a>
                                </div>

                                <!-- Mua và Thêm vào giỏ hàng -->
                                <div class="flex gap-4 justify-center">
                                    <!-- Mua -->
                                    <a href="{{ route('vtduser.login') }}" class="btn btn-success btn-sm text-white bg-green-500 hover:bg-green-600 rounded-md py-2 px-4 transition duration-300">
                                        <i class="fa fa-shopping-cart"></i> Mua
                                    </a>

                                    <!-- Thêm vào giỏ hàng -->
                                    <a href="{{route('vtduser.login')}}">
                                        <button type="button" class="btn btn-warning btn-sm w-full mt-2 add-to-cart-btn" data-id="{{ $sanpham->id }}" data-name="{{ $sanpham->vtdTenSanPham }}">
                                        <i class="fa fa-cart-plus"></i> Thêm vào giỏ
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination Links -->
            <div class="mt-6 text-center">
                {{ $products->links() }}
            </div>
        @elseif(isset($search))
            <div class="mt-6 text-center text-red-500">
                <p class="text-lg">Không tìm thấy sản phẩm phù hợp với "{{ $search }}".</p>
            </div>
        @endif
    </div>
@endsection

<!-- Additional Styling for the Product Cards -->
<style>
    /* Product Image */
    .product-img {
        width: 100%;
        height: 400px; /* Adjust the height to make it longer */
        object-fit: cover;
        border-radius: 8px;
    }

    /* Hover effect for product cards */
    .hover:scale-105 {
        transition: transform 0.3s ease-in-out;
    }

    .hover:scale-105:hover {
        transform: scale(1.05);
    }

    /* Add to cart button */
    .add-to-cart-btn {
        background-color: #ff9800;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .add-to-cart-btn:hover {
        background-color: #f57c00;
        cursor: pointer;
    }

    /* Style for Pagination */
    .pagination {
        justify-content: center;
        display: flex;
        flex-wrap: wrap;
        margin-top: 1rem;
    }

    .pagination li {
        margin: 0 5px;
    }

    .pagination a {
        padding: 10px 20px;
        background-color: #f4f4f4;
        border-radius: 5px;
        color: #333;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    .pagination a:hover {
        background-color: #007bff;
        color: white;
    }

    /* General Button Styling */
    .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 12px 24px;
        border-radius: 6px;
        text-decoration: none;
        font-weight: 600;
        text-align: center;
        cursor: pointer;
        transition: transform 0.3s ease-in-out;
    }

    .btn:hover {
        transform: scale(1.05);
    }

    /* Responsive Layout */
    @media (max-width: 768px) {
        .grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .product-img {
            height: 300px; /* Adjust for smaller screens */
        }
    }

    @media (max-width: 480px) {
        .grid {
            grid-template-columns: 1fr;
        }

        .product-img {
            height: 250px; /* Adjust for mobile */
        }
    }
</style>

<!-- JavaScript to handle confirmation and AJAX -->
<script>
    // Function to handle adding items to cart
    document.querySelectorAll('.add-to-cart-btn').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var productName = btn.getAttribute('data-name');
            var productId = btn.getAttribute('data-id');

            var userConfirmed = confirm('Bạn có muốn thêm "' + productName + '" vào giỏ hàng không?');
            
            if (userConfirmed) {
                // AJAX request to add product to the cart
                fetch('/add-to-cart/' + productId, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ product_id: productId })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Sản phẩm đã được thêm vào giỏ hàng!');
                        // Update cart count (if needed)
                        document.querySelector('.cart-count').innerText = data.cart_count;
                    } else {
                        alert('Có lỗi xảy ra, vui lòng thử lại!');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Có lỗi xảy ra, vui lòng thử lại!');
                });
            }
        });
    });
</script>
