<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm Mới Sinh viên</title>
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h3>Thêm mới thông tin Sinh Viên</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('sinhvien.vtdCreateSubmit') }}" method="POST">
                    @csrf
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="masinhvien">Mã Sinh Viên</span>
                        <input type="text" class="form-control" aria-describedby="masinhvien" name="masinhvien" value="" >
                        @error('masinhvien')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="hosinhvien">Họ Sinh Viên</span>
                        <input type="text" class="form-control" aria-describedby="hosinhvien" name="hosinhvien" value="" >
                        @error('hosinhvien')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="tensinhvien">Tên Sinh Viên</span>
                        <input type="text" class="form-control" aria-describedby="tensinhvien" name="tensinhvien" value="" >
                        @error('tensinhvien')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="gioitinh">Giới Tính</span>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gioitinh" value="1" id="gioitinhNam" required>
                            <label class="form-check-label" for="gioitinhNam">Nam</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gioitinh" value="0" id="gioitinhNu" required>
                            <label class="form-check-label" for="gioitinhNu">Nữ</label>
                        </div>
                        @error('gioitinh')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="ngaysinh">Ngày Sinh</span>
                        <input type="date" class="form-control" aria-describedby="ngaysinh" name="ngaysinh" value="" >
                        @error('ngaysinh')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="noisinh">Nơi Sinh</span>
                        <input type="text" class="form-control" aria-describedby="noisinh" name="noisinh" value="" >
                        @error('noisinh')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="makhoa">Mã Khoa</span>
                        <input type="text" class="form-control" aria-describedby="makhoa" name="makhoa" value="" >
                        @error('makhoa')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="hocbong">Học Bổng</span>
                        <input type="number" class="form-control" aria-describedby="hocbong" name="hocbong" value="" step="0.01">
                        @error('hocbong')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="diemtrungbinh">Điểm Trung Bình</span>
                        <input type="number" class="form-control" aria-describedby="diemtrungbinh" name="diemtrungbinh" value="" step="0.01">
                        @error('diemtrungbinh')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>

                    <div class="card-footer">
                        <input type="submit" class="btn btn-primary" name="btnSubmit" value="Thêm mới">
                        <a href="/sinhvien" class="btn btn-secondary">Trở lại</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
