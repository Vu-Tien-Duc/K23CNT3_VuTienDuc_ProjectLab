@extends('_layouts.frontend.user1')

@section('title', 'Trang Chủ')

@section('content-body')
<form action="{{ route('vtduser.tt.vtdEditSubmit', ['id' => $vtduser->id]) }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $vtduser->id }}">

    <div class="card shadow-lg border-light rounded-3">
        <div class="card-header text-center bg-primary text-white">
            <h2 class="mb-0">Sửa Thông Tin Bản Thân</h2>
        </div>
        <div class="card-body">
            <!-- Mã Khách Hàng -->
            <div class="mb-3">
                <label for="vtdMaKhachHang" class="form-label">Mã Khách Hàng</label>
                <input type="text" class="form-control" id="vtdMaKhachHang" name="vtdMaKhachHang" value="{{ $vtduser->vtdMaKhachHang }}" readonly>
                @error('vtdMaKhachHang')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Họ Tên -->
            <div class="mb-3">
                <label for="vtdHoTenKhachHang" class="form-label">Họ Tên</label>
                <input type="text" class="form-control" id="vtdHoTenKhachHang" name="vtdHoTenKhachHang" value="{{ old('vtdHoTenKhachHang', $vtduser->vtdHoTenKhachHang) }}">
                @error('vtdHoTenKhachHang')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="vtdEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="vtdEmail" name="vtdEmail" value="{{ old('vtdEmail', $vtduser->vtdEmail) }}">
                @error('vtdEmail')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Điện Thoại -->
            <div class="mb-3">
                <label for="vtdDienThoai" class="form-label">Điện Thoại</label>
                <input type="tel" class="form-control" id="vtdDienThoai" name="vtdDienThoai" value="{{ old('vtdDienThoai', $vtduser->vtdDienThoai) }}">
                @error('vtdDienThoai')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Địa Chỉ -->
            <div class="mb-3">
                <label for="vtdDiaChi" class="form-label">Địa Chỉ</label>
                <input type="text" class="form-control" id="vtdDiaChi" name="vtdDiaChi" value="{{ old('vtdDiaChi', $vtduser->vtdDiaChi) }}">
                @error('vtdDiaChi')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Ngày Đăng Ký -->
            <div class="mb-3">
                <label for="vtdNgayDangKy" class="form-label">Ngày Đăng Ký</label>
                <input type="date" class="form-control" id="vtdNgayDangKy" name="vtdNgayDangKy" value="{{ old('vtdNgayDangKy', $vtduser->vtdNgayDangKy) }}" readonly>
                @error('vtdNgayDangKy')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Trạng Thái -->
            <div class="mb-3">
                <label for="vtdTrangThai" class="form-label">Trạng Thái</label>
                <select name="vtdTrangThai" id="vtdTrangThai" class="form-control" required disabled>
                    <option value="" disabled {{ old('vtdTrangThai') == '' ? 'selected' : '' }}>Chọn trạng thái</option>
                    <option value="0" {{ old('vtdTrangThai', $vtduser->vtdTrangThai) == 0 ? 'selected' : '' }}>Hoạt Động</option>
                    <option value="1" {{ old('vtdTrangThai', $vtduser->vtdTrangThai) == 1 ? 'selected' : '' }}>Tạm Khóa</option>
                    <option value="2" {{ old('vtdTrangThai', $vtduser->vtdTrangThai) == 2 ? 'selected' : '' }}>Khóa</option>
                </select>
                @error('vtdTrangThai')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="card-footer text-center">
            <button class="btn btn-success px-4 py-2" type="submit"><i class="fas fa-save"></i> Cập nhật</button>
            <a href="{{ route('vtduser.home1') }}" class="btn btn-primary px-4 py-2"><i class="fas fa-arrow-left"></i> Trở lại</a>
        </div>

        <!-- Nút chuyển qua trang đổi mật khẩu -->
        <div class="mt-3 text-center">
            <a href="{{ route('vtduser.changePassword', ['id' => $vtduser->id]) }}" class="btn btn-warning px-4 py-2"><i class="fas fa-key"></i> Đổi Mật Khẩu</a>
        </div>
    </div>
</form>
@endsection

<style>
    /* Thêm hiệu ứng bo góc cho các phần tử */
.card {
    max-width: 700px;
    margin: 40px auto;
}

.card-header {
    font-size: 1.5rem;
    background-color: #007bff;
    color: white;
    border-radius: 10px 10px 0 0;
}

.card-body {
    padding: 30px;
}

.form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
}

.btn {
    border-radius: 25px;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #0056b3;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.text-danger {
    font-size: 0.875rem;
    color: #e74a3b;
}

.mt-3.text-center {
    margin-top: 20px;
}

</style>