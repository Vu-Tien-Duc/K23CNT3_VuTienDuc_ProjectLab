<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<body>
    <section class="container border my-3">
        <h1>Danh Sách Koa</h1>
        <button class="btn btn-primary mx-2"><a href="/khoa/create" class="text-white">Thêm Mới</a></button>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã Khoa</th>
                    <th>Tên Khoa</th>
                    <th>Chức Năng</th>
                </tr>
            </thead>
            <tbody>
                @php
                $stt=0;
                @endphp
                @foreach ($vtdkhoas as $item)
                @php
                    $stt++;   
                @endphp
                    <tr>
                        <td>{{$stt}}</td>
                        <td>{{$item->VTDMAKHOA}} </td>
                        <td>{{$item->VTDTENKHOA}}</td>
                        
                        <td class="text-center">
                        <a href="/khoa/detail/{{$item->VTDMAKHOA}}" class="btn btn-success">
                        Chi tiết</a>
                        <a href="/khoa/edit/{{$item->VTDMAKHOA}}" class="btn btn-primary">
                        Sửa</a>
                        <a href="/khoa/delete/{{$item->VTDMAKHOA}}" class="btn btn-danger">
                        Xóa </a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</body>
</html>