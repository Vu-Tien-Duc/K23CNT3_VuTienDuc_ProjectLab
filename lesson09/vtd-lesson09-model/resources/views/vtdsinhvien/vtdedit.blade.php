<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sửa Thông Tin Sinh Viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h3>Sửa thông tin Sinh Viên</h3>
            </div>
            <div class="card-body">
                @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

                <!-- Form Edit Sinh Viên -->
                <form action="{{ route('sinhvien.vtdEditSubmit', $vtdsinhvien->VTDMASINHVIEN) }}" method="POST">
                    @csrf
                    @method('PUT') <!-- Xác định đây là PUT request -->

                    <!-- Mã Sinh Viên (disabled) -->
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="masinhvien">Mã Sinh Viên</span>
                        <input type="text" class="form-control" aria-describedby="masinhvien" name="masinhvien" value="{{ $vtdsinhvien->VTDMASINHVIEN }}" disabled>
                    </div>

                    <!-- Họ Sinh Viên -->
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="hosinhvien">Họ Sinh Viên</span>
                        <input type="text" class="form-control" aria-describedby="hosinhvien" name="hosinhvien" value="{{ old('hosinhvien', $vtdsinhvien->VTDHOSV) }}">
                        @error('hosinhvien')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Tên Sinh Viên -->
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="tensinhvien">Tên Sinh Viên</span>
                        <input type="text" class="form-control" aria-describedby="tensinhvien" name="tensinhvien" value="{{ old('tensinhvien', $vtdsinhvien->VTDTENSV) }}">
                        @error('tensinhvien')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Giới Tính -->
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="gioitinh">Giới Tính</span>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gioitinh" value="1" id="gioitinhNam" {{ old('gioitinh', $vtdsinhvien->VTDPHAI) == 1 ? 'checked' : '' }}>
                            <label class="form-check-label" for="gioitinhNam">Nam</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gioitinh" value="0" id="gioitinhNu" {{ old('gioitinh', $vtdsinhvien->VTDPHAI) == 0 ? 'checked' : '' }}>
                            <label class="form-check-label" for="gioitinhNu">Nữ</label>
                        </div>
                        @error('gioitinh')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Ngày Sinh -->
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="ngaysinh">Ngày Sinh</span>
                        <input type="date" class="form-control" aria-describedby="ngaysinh" name="ngaysinh" value="{{ old('ngaysinh', $vtdsinhvien->VTDNGAYSINH ? \Carbon\Carbon::parse($vtdsinhvien->VTDNGAYSINH)->format('Y-m-d') : '') }}">
                        @error('ngaysinh')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Nơi Sinh -->
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="noisinh">Nơi Sinh</span>
                        <input type="text" class="form-control" aria-describedby="noisinh" name="noisinh" value="{{ old('noisinh', $vtdsinhvien->VTDNOISINH) }}">
                        @error('noisinh')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Mã Khoa -->
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="makhoa">Mã Khoa</span>
                        <select class="form-control" name="VTDMAKHOA" required>
                            <option value="">Chọn Mã Khoa</option>
                            @foreach($khoas as $khoa)
                                <option value="{{ $khoa->VTDMAKHOA }}" {{ old('VTDMAKHOA', $vtdsinhvien->VTDMAKHOA) == $khoa->VTDMAKHOA ? 'selected' : '' }}>
                                    {{ $khoa->VTDMAKHOA }} - {{ $khoa->VTDTENKHOA }}
                                </option>
                            @endforeach
                        </select>
                        @error('VTDMAKHOA')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Học Bổng -->
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="hocbong">Học Bổng</span>
                        <input type="number" class="form-control" aria-describedby="hocbong" name="hocbong" value="{{ old('hocbong', $vtdsinhvien->VTDHOCBONG) }}" step="0.01">
                        @error('hocbong')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Điểm Trung Bình -->
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="diemtrungbinh">Điểm Trung Bình</span>
                        <input type="number" class="form-control" aria-describedby="diemtrungbinh" name="diemtrungbinh" value="{{ old('diemtrungbinh', $vtdsinhvien->VTDDIEMTRUNGBINH) }}" step="0.01">
                        @error('diemtrungbinh')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="card-footer">
                        <input type="submit" class="btn btn-primary" value="Cập nhật">
                        <a href="/sinhvien" class="btn btn-secondary">Trở lại</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
