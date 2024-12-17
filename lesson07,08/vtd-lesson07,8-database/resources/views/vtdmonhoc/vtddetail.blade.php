<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh Sách monhoc</title>
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h3>Thông Tin Chi Tiết Môn học</h3>
                <br>
                <h2>Môn Học:    {{$vtdmonhoc->VTDTENMONHOC}}</h2>
            </div>
            <div class="card-body">
            <p class="card-text">
                <b>Mã Môn Học:</b>
                {{$vtdmonhoc->VTDMAMONHOC}}
            </p>
            <p>
                <b>Tên Môn Học:</b>
                {{$vtdmonhoc->VTDTENMONHOC}}
            </p>
            <p>
                <b>Số Tiết:</b>
                {{$vtdmonhoc->VTDSOTIET}}
            </p>
            </div>
            <div class="card-footer">
                <a href="/monhoc" class="btn btn-primary">Back</a>
            </div>
        </div>
    </section>
</body>
</html>