<!-- master.blade.php -->
@include('_layouts.header') <!-- Kết nối phần header -->

<body>
    @include('_layouts.navbar') <!-- Kết nối phần navbar -->
    <div class="container-fluid">
        <div class="row">
            @include('_layouts.sidebar') <!-- Kết nối phần sidebar -->

            <!-- Nội dung chính của trang sẽ được thay thế ở đây -->
            <div class="col">
                @yield('content') <!-- Phần nội dung thay đổi động -->
            </div>
        </div>
    </div>

    @include('_layouts.footer') <!-- Kết nối phần footer -->
</body>
</html>
