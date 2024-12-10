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
        <button class="btn btn-primary mx-2"><a href="/monhoc/create" class="text-white">Thêm Mới</a></button>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã Môn Học</th>
                    <th>Tên Môn Học</th>
                    <th>Số Tiết</th>
                    <th>Chức Năng</th>
                </tr>
            </thead>
            <tbody>
                @php
                $stt=0;
                @endphp
                @foreach ($vtdmonhoc as $item)
                @php
                    $stt++;   
                @endphp
                    <tr>
                        <td>{{$stt}}</td>
                        <td>{{$item->VTDMAMONHOC}} </td>
                        <td>{{$item->VTDTENMONHOC}}</td>
                        <td>{{$item->VTDSOTIET}}</td>
                        
                        <td class="text-center">
                        <a href="/monhoc/detail/{{$item->VTDMAMONHOC}}" class="btn btn-success">
                        Chi tiết</a>
                        <a href="/monhoc/edit/{{$item->VTDMAMONHOC}}" class="btn btn-primary">
                        Sửa</a>
                        {{-- Form xóa khoa --}}
                        {{-- Form xóa khoa --}}
                       {{-- <form action="{{ route('khoa.vtdDeleteSubmit') }}" method="POST" style="display:inline;">
                            @csrf
                            @method('POST')
                            <input type="hidden" name="VTDMAKHOA" value="{{ $item->VTDMAKHOA }}">
                            <button type="submit" class="btn btn-danger " onclick="return confirm('Bạn có chắc chắn muốn xóa khoa này?')">Xóa</button>
                        </form> --}}

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