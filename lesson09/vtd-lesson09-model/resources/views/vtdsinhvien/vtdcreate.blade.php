<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm mới</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container border my-3">
         <!-- Kiểm tra thông báo lỗi hoặc thành công -->
         @if(session('error'))
         <div class="alert alert-danger">
             {{ session('error') }}
         </div>
     @endif
     @if(session('sinhVien_created'))
         <div class="alert alert-success">
             {{ session('sinhVien_created') }}
         </div>
     @endif
     @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

        <form action="{{ route('sinhvien.vtdCreateSubmit') }}" method="POST">
            @csrf
            <div class="card">
                <h1>Thêm mới</h1>
            </div>
            <div class="card-body">
                <!-- Mã Sinh Viên -->
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="VTDMASINHVIEN">Mã Sinh Viên</span>
                    <input type="text" class="form-control" aria-describedby="VTDMASINHVIEN" name="VTDMASINHVIEN" value="" required>
                    @error('VTDMASINHVIEN')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Họ Sinh Viên -->
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="VTDHOSV">Họ Sinh Viên</span>
                    <input type="text" class="form-control" aria-describedby="VTDHOSV" name="VTDHOSV" value="" >
                    @error('VTDHOSV')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Tên Sinh Viên -->
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="VTDTENSV">Tên Sinh Viên</span>
                    <input type="text" class="form-control" aria-describedby="VTDTENSV" name="VTDTENSV" value="" >
                    @error('VTDTENSV')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                 <!-- Giới Tính -->
                 <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="VTDPHAI">Giới Tính</span>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="VTDPHAI" value="1" id="gioitinhNam" required>
                        <label class="form-check-label" for="gioitinhNam">Nam</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="VTDPHAI" value="0" id="gioitinhNu" required>
                        <label class="form-check-label" for="gioitinhNu">Nữ</label>
                    </div>
                    @error('VTDPHAI')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Ngày Sinh -->
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="VTDNGAYSINH">Ngày Sinh</span>
                    <input type="date" class="form-control" aria-describedby="VTDNGAYSINH" name="VTDNGAYSINH" value="" >
                    @error('VTDNGAYSINH')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Nơi Sinh -->
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="VTDNOISINH">Nơi Sinh</span>
                    <input type="text" class="form-control" aria-describedby="VTDNOISINH" name="VTDNOISINH" value="" >
                    @error('VTDNOISINH')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

               <!-- Mã Khoa - Dropdown -->
               <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="VTDMAKHOA">Mã Khoa</span>
                <select class="form-control" name="VTDMAKHOA" required>
                    <option value="">Chọn Mã Khoa</option>
                    @foreach($khoas as $khoa)
                        <!-- Hiển thị mã khoa (AV, BC) và tên khoa (Anh Văn, Block Chain) -->
                        <option value="{{ $khoa->VTDMAKHOA }}">
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
                    <span class="input-group-text" id="VTDHOCBONG">Học Bổng</span>
                    <input type="number" class="form-control" aria-describedby="VTDHOCBONG" name="VTDHOCBONG" value="" step="0.01">
                    @error('VTDHOCBONG')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Điểm Trung Bình -->
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="VTDDIEMTRUNGBINH">Điểm Trung Bình</span>
                    <input type="number" class="form-control" aria-describedby="VTDDIEMTRUNGBINH" name="VTDDIEMTRUNGBINH" value="" step="0.01">
                    @error('VTDDIEMTRUNGBINH')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/sinhvien" class="btn btn-secondary">Back</a>
            </div>
        </form>
    </section>
</body>
</html>
