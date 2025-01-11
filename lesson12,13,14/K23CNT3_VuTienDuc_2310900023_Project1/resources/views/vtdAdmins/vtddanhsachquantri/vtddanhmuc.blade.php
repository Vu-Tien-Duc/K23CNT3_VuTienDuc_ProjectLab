@extends('_layouts.admins._master')

@section('title', 'Danh Mục Quản Trị')

@section('content-body')
    <div class="container mt-5">
        <h1 class="mb-4 text-center text-primary">Danh Mục Quản Trị</h1>

        <!-- Nút dẫn đến các danh mục với số lượng -->
        <div class="row">
            <!-- Loại sản phẩm -->
            <div class="col-md-4 mb-4">
                <div class="card text-center shadow-lg border-0">
                    <div class="card-body bg-primary text-white">
                        <h5 class="card-title mb-3">Sản Phẩm</h5>
                        <p class="card-text mb-4">{{ $productCount }} sản phẩm</p> <!-- Hiển thị số lượng sản phẩm -->
                        <a href="/vtd-admins/vtddanhsachquantri/vtdsanpham" class="btn btn-outline-light rounded-pill">Xem Sản Phẩm</a>
                    </div>
                </div>
            </div>

            <!-- Tin tức -->
            <div class="col-md-4 mb-4">
                <div class="card text-center shadow-lg border-0">
                    <div class="card-body bg-info text-white">
                        <h5 class="card-title mb-3">Tin Tức</h5>
                        <p class="card-text mb-4">Tin Tức New: {{ $ttCount }}</p>
                        <a href="{{route('vtdAdmins.vtddanhsachquantri..danhmuc.tintuc')}}" class="btn btn-outline-light rounded-pill">Xem Tin Tức</a>
                    </div>
                </div>
            </div>

            <!-- Tài khoản người dùng -->
            <div class="col-md-4 mb-4">
                <div class="card text-center shadow-lg border-0">
                    <div class="card-body bg-success text-white">
                        <h5 class="card-title mb-3">Tài Khoản Người Dùng</h5>
                        <p class="card-text mb-4">Số lượng người dùng: {{$userCount}}</p>
                        <a href="/vtd-admins/vtddanhsachquantri/vtdnguoidung" class="btn btn-outline-light rounded-pill">Xem Người Dùng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    /* Tùy chỉnh giao diện */
    .card {
        margin-bottom: 30px;
        border-radius: 10px;
        transition: transform 0.3s ease;
    }

    .card-title {
        font-size: 1.5rem;
        font-weight: bold;
        text-transform: uppercase;
    }

    .card-text {
        font-size: 1.1rem;
        margin-bottom: 20px;
        font-style: italic;
    }

    .btn {
        font-size: 1.1rem;
        border-radius: 20px;
        padding: 10px 20px;
    }

    .btn-outline-light {
        border-color: #fff;
        color: #fff;
    }

    .btn-outline-light:hover {
        background-color: #fff;
        color: #007bff;
        border-color: #007bff;
    }

    /* Hover effect on cards */
    .card:hover {
        transform: scale(1.05);
    }

    /* Ensuring responsive layout */
    @media (max-width: 767px) {
        .card {
            margin-bottom: 20px;
        }

        .card-title {
            font-size: 1.25rem;
        }

        .card-text {
            font-size: 1rem;
        }

        .btn {
            font-size: 1rem;
            padding: 8px 16px;
        }
    }
</style>
