@extends('_layouts.frontend.user1')

@section('title', 'Trang Chủ')

@section('content-body')
<form action="{{ route('vtduser.tt.vtdEditSubmit', ['id' => $vtduser->id]) }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $vtduser->id }}">

    <div class="card">
        <div class="card-header text-center">
            <h1 class="mb-0">Sửa Thông Tin bản thân</h1>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="vtdMaKhachHang" class="form-label">Mã Khách Hàng</label>
                <input type="text" class="form-control" id="vtdMaKhachHang" name="vtdMaKhachHang" value="{{ $vtduser->vtdMaKhachHang }}" readonly>
                @error('vtdMaKhachHang')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="vtdHoTenKhachHang" class="form-label">Họ Tên </label>
                <input type="text" class="form-control" id="vtdHoTenKhachHang" name="vtdHoTenKhachHang" value="{{ old('vtdHoTenKhachHang', $vtduser->vtdHoTenKhachHang) }}">
                @error('vtdHoTenKhachHang')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="vtdEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="vtdEmail" name="vtdEmail" value="{{ old('vtdEmail', $vtduser->vtdEmail) }}">
                @error('vtdEmail')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="vtdMatKhau" class="form-label">Mật Khẩu</label>
                <input type="password" class="form-control" id="vtdMatKhau" name="vtdMatKhau" value="{{ old('vtdMatKhau', '') }}" >
                @error('vtdMatKhau')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            

            <div class="mb-3">
                <label for="vtdDienThoai" class="form-label">Điện Thoại</label>
                <input type="tel" class="form-control" id="vtdDienThoai" name="vtdDienThoai" value="{{ old('vtdDienThoai', $vtduser->vtdDienThoai) }}">
                @error('vtdDienThoai')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="vtdDiaChi" class="form-label">Địa Chỉ</label>
                <input type="text" class="form-control" id="vtdDiaChi" name="vtdDiaChi" value="{{ old('vtdDiaChi', $vtduser->vtdDiaChi) }}">
                @error('vtdDiaChi')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="vtdNgayDangKy" class="form-label">Ngày Đăng Ký</label>
                <input type="date" class="form-control" id="vtdNgayDangKy" name="vtdNgayDangKy" value="{{ old('vtdNgayDangKy', $vtduser->vtdNgayDangKy) }}">
                @error('vtdNgayDangKy')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="vtdTrangThai" class="form-label">Trạng Thái</label>
                <select name="vtdTrangThai" id="vtdTrangThai" class="form-control" required>
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
            <button class="btn btn-success" type="submit">Cập nhật</button>
            <a href="{{ route('vtduser.home1') }}" class="btn btn-primary">Trở lại</a>
          
        </div>
    </div>
</form>
@endsection 
