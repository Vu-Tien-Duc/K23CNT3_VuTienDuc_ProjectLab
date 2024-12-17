<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh Sách Nhà Cung Cấp</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>
<body>
    <section class="container border my-3">
        <h1 class="mb-4">Danh Sách Nhà Cung Cấp</h1>

        <!-- Thông báo thành công -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã Nhà Cung Cấp</th>
                    <th>Tên Nhà Cung Cấp</th>
                    <th>Địa Chỉ</th>
                    <th>Điện Thoại</th>
                    <th>Trạng Thái</th>
                    <th>Email</th>
                    <th>Chức Năng</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vtdnhacc as $item)
                    <tr>
                        <td>{{ ($vtdnhacc->currentPage() - 1) * $vtdnhacc->perPage() + $loop->index + 1 }}</td>
                        <td>{{ $item->vtdMaNCC }}</td>
                        <td>{{ $item->vtdTenNCC }}</td>
                        <td>{{ $item->vtdDiaChi }}</td>
                        <td>{{ $item->vtdDienThoai }}</td>
                        <td>{{ $item->vtdStatus }}</td>
                        <td>{{ $item->vtdEmail }}</td>

                        <td class="text-center">
                            <!-- Các nút xem, chỉnh sửa, xóa trên cùng 1 dòng -->
                            <div class="btn-group" role="group">
                                <!-- Xem chi tiết -->
                                <a href="/vtdnhacc/detail/{{ $item->vtdMaNCC }}" class="btn btn-success btn-sm">
                                    <i class="fa-solid fa-eye"></i> Xem
                                </a>
                                <!-- Chỉnh sửa -->
                                <a href="/vtdnhacc/edit/{{ $item->vtdMaNCC }}" class="btn btn-primary btn-sm">
                                    <i class="fa-solid fa-pen"></i> Chỉnh sửa
                                </a>
                                <!-- Xóa -->
                                <a href="/vtdnhacc/delete/{{ $item->vtdMaNCC }}" class="btn btn-danger btn-sm"
                                   onclick="return confirm('Bạn muốn xóa nhà cung cấp này không? Mã: {{ $item->vtdMaNCC }}');">
                                    <i class="fa-regular fa-trash-can"></i> Xóa
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Phân trang -->
        <div class="d-flex justify-content-center mt-3">
            {{ $vtdnhacc->links('pagination::bootstrap-5') }}
        </div>

        <!-- Thêm mới nhà cung cấp -->
        <div class="text-end mt-3">
            <a href="/vtdnhacc/create" class="btn btn-success">
                <i class="fa-solid fa-plus"></i> Thêm Mới Nhà Cung Cấp
            </a>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
