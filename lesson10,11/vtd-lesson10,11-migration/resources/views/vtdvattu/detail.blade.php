<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>chi tiết Vật Tư</title>
      <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container border my-3">
        <div class="card">
            <div class="card-header">
                <h1>Chi Tiết Vật Tư</h1>
            </div>
            <div class="card-body">
                <p class="card-text">
                    <b>Mã Vật Tư:</b>
                    {{$vtdvattu->vtdMaVTu}}
                </p>
                <p class="card-text">
                    <b>Tên Vật Tư:</b>
                    {{$vtdvattu->vtdTenVTu}}
                </p>
                <p class="card-text">
                    <b>Đơn Vị Tính:</b>
                    {{$vtdvattu->vtdDVTinh}}
                </p>
                <p class="card-text">
                    <b>Phần Trăm:</b>
                    {{$vtdvattu->vtdPhanTram}}
                </p>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary"><a href="/vtdvattu" style="color: black">back</a></button>
            </div>
        </div>
    </section>
</body>
</html>