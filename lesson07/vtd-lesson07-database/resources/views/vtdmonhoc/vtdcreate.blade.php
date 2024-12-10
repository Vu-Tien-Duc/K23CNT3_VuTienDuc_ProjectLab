<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông tin chi tiết monhoc</title>
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h3>Thêm mới thông tin monhoc</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('monhoc.vtdCreateSubmit') }}" method="POST">
                    @csrf
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="mamonhoc">Mã monhoc</span>
                        <!-- Đảm bảo trường này có tên "mamonhoc" để controller nhận đúng -->
                        <input type="text" class="form-control" aria-describedby="mamonhoc" name="mamonhoc" value="" required>
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="tenmonhoc">Tên monhoc</span>
                        <!-- Đảm bảo trường này có tên "tenmonhoc" để controller nhận đúng -->
                        <input type="text" class="form-control" aria-describedby="tenmonhoc" name="tenmonhoc" value="" required>
                    </div>

                    
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="sotiet">Số Tiết</span>
                        <!-- Đảm bảo trường này có tên "tenmonhoc" để controller nhận đúng -->
                        <input type="number" class="form-control" aria-describedby="sotiet" name="sotiet" value="" required>
                    </div>

                    <div class="card-footer">
                        <input type="submit" class="btn btn-primary" name="btnSubmit" value="Thêm mới">
                        <a href="/monhoc" class="btn btn-secondary">Trở lại</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
