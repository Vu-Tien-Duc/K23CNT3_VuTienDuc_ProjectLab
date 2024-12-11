<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sửa thông tin môn học</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h3>Sửa thông tin môn học: <b class="text-danger">{{ $vtdmonhoc->VTDMAMONHOC }}</b></h3>
            </div>
            <div class="card-body">
                <form action="{{ route('monhoc.vtdeditSubmit') }}" method="POST">
                    @csrf

                    <!-- Mã môn học (readonly) -->
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="VTDMAMONHOC">Mã môn học</span>
                        <input type="text" class="form-control" aria-describedby="VTDMAMONHOC" name="VTDMAMONHOC" value="{{ $vtdmonhoc->VTDMAMONHOC }}" readonly>
                    </div>

                    <!-- Tên môn học -->
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="VTDTENMONHOC">Tên môn học</span>
                        <input type="text" class="form-control" aria-describedby="VTDTENMONHOC" name="VTDTENMONHOC" value="{{ old('VTDTENMONHOC', $vtdmonhoc->VTDTENMONHOC) }}">
                        @error('VTDTENMONHOC')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Số tiết -->
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="VTDSOTIET">Số tiết</span>
                        <input type="number" class="form-control" aria-describedby="VTDSOTIET" name="VTDSOTIET" value="{{ old('VTDSOTIET', $vtdmonhoc->VTDSOTIET) }}">
                        @error('VTDSOTIET')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Nút submit và quay lại -->
                    <div class="card-footer">
                        <input type="submit" class="btn btn-primary" name="btnSubmit" value="Cập nhật">
                        <a href="/monhoc" class="btn btn-secondary">Trở lại</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
