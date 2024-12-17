<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
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
                            <i class="fa-solid fa-eye-low-vision"></i></a>
                        <a href="/khoa/edit/{{$item->VTDMAKHOA}}" class="btn btn-primary">
                            <i class="fa-solid fa-pen"></i></a>
                        {{-- Form xóa khoa --}}
                        <a href="/khoa/delete/{{$item->VTDMAKHOA}}" class="btn btn-danger"

                            onclick="return confirm('Bạn muốn xóa không?');">
                            <i class="fa-regular fa-trash-can"></i> </a>
                        </td>

                    </tr>
                @endforeach
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            </tbody>
        </table>
    </section>
</body>
</html>