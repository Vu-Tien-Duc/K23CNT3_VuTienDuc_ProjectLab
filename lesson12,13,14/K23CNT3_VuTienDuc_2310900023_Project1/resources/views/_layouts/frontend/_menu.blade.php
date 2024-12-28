<!-- Navbar (Main Navigation Menu) -->
<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">BuyPhone</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Trang Chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/products">Sản Phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Liên Hệ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">Giới Thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Đăng Nhập</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<style>
/* Custom styles for the navbar */
.navbar-custom {
    background-color: #343a40; /* Dark background for navbar */
    padding: 15px 0; /* Padding for a more spacious look */
}

.navbar-custom .navbar-brand {
    font-size: 1.5rem;
    font-weight: bold;
    color: #ff5733; /* Highlight color for brand */
    text-transform: uppercase;
}

.navbar-custom .navbar-toggler {
    border-color: #ff5733; /* Border color for the toggle button */
}

.navbar-custom .navbar-toggler-icon {
    background-color: #ff5733; /* Change color of the toggle icon */
}

.navbar-custom .navbar-nav .nav-item .nav-link {
    font-size: 1.1rem;
    color: #f8f9fa; /* Light text color for nav links */
    padding: 10px 20px;
    text-transform: uppercase;
    transition: color 0.3s ease; /* Smooth transition on hover */
}

/* Navbar links hover effect */
.navbar-custom .navbar-nav .nav-item .nav-link:hover {
    color: #ff5733; /* Change color on hover */
    background-color: #f8f9fa; /* Light background on hover */
    border-radius: 4px;
}

/* Styling for active links */
.navbar-custom .navbar-nav .nav-item .nav-link.active {
    color: #ff5733;
    font-weight: bold;
}

/* For mobile devices */
@media (max-width: 992px) {
    .navbar-custom .navbar-nav {
        text-align: center; /* Center align menu items on mobile */
    }

    .navbar-custom .navbar-nav .nav-item {
        margin-top: 10px;
        margin-bottom: 10px;
    }
}
</style>