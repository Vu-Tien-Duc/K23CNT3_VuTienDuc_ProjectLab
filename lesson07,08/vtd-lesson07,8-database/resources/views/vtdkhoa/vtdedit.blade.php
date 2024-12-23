<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông tin khoa cần sửa</title>
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <form action="{{route('khoa.vtdEditSubmit')}}" method="POST">
            @csrf
        <div class="card">
            <div class="card-header">
                <h3>Thông tin chi tiết khoa</h3>
            </div>
            <div class="card-body">

                <div class="mb-3 row">
                    <label for="VTDMAKHOA" class="col-sm-2 col-form-label">MÃ Khoa</label>
                    <div class="col-sm-10">
                      <input type="text" readonly class="form-control" name="VTDMAKHOA" id="VTDMAKHOA" value=" {{$khoa->VTDMAKHOA}}">
                    </div>

                <div class="mb-3 row">
                    <label for="VTDTENKHOA" class="col-sm-2 col-form-label">Tên Khoa</label>
                        <div class="col-sm-10">
                          <input type="text"  class="form-control" name="VTDTENKHOA" id="VTDTENKHOA" value="{{$khoa->VTDTENKHOA}}">
                        </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary mx-2">SUbmit</button>
                <a href="/khoa" class="btn btn-primary">Back</a>
            </div>
        </div>
        </form>
    </section>

</body>
</html>