<!-- Hiển thị số lượng trong giỏ hàng (header) -->
<header class="bg-dark text-white py-3 sticky-header">
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Logo Section -->
        <div class="logo">
            <a href="/" class="text-white text-decoration-none">
                <img src="{{ asset('storage/img/san_pham/logoD.jpg') }}" alt="Logo" class="img-fluid" style="max-height: 50px;">
            </a>
        </div>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Trang Chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">Giới Thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/products">Sản Phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Liên Hệ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Đăng Nhập</a>
                    </li>
                    <!-- Cart Icon -->
                    <li class="nav-item">
                        <a class="nav-link" href="/vtd-user/giohang" title="Giỏ hàng">
                            <i class="fa fa-shopping-cart"></i> 
                            <!-- Hiển thị số lượng sản phẩm trong giỏ hàng -->
                            <span class="cart-count badge bg-warning">{{ count(session('cart', [])) }}</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>


<!-- Add custom styles -->
<style>
    /* Header background and padding */
    header {
        background-color: #343a40; /* Dark background color */
        padding-top: 20px;
        padding-bottom: 20px;
        position: sticky; /* Make the header sticky */
        top: 0; /* Stick to the top of the screen */
        z-index: 1000; /* Ensure the header stays on top of other content */
        width: 100%; /* Ensure the header takes up full width */
    }

    /* Logo */
    .logo img {
        max-height: 60px;
    }

    /* Navbar custom styles */
    .navbar-nav .nav-item .nav-link {
        font-size: 1.1rem; /* Increase font size */
        padding-left: 20px;
        padding-right: 20px;
        text-transform: uppercase;
    }

    /* Navbar link hover effect */
    .navbar-nav .nav-item .nav-link:hover {
        color: #ff5733; /* Change text color on hover */
        transition: color 0.3s ease;
    }

    /* Navbar background on small screens */
    .navbar-dark .navbar-toggler-icon {
        background-color: #fff; /* White toggle icon */
    }

    /* Navbar collapse on small screens */
    @media (max-width: 992px) {
        .navbar-nav {
            text-align: center;
        }

        .navbar-nav .nav-item {
            margin-top: 10px;
            margin-bottom: 10px;
        }
    }

    /* Cart Icon */
    .nav-link .fa-shopping-cart {
        font-size: 1.5rem;
    }

    /* Cart count */
    .cart-count {
        font-size: 0.9rem;
        margin-left: 5px;
    }
</style>
