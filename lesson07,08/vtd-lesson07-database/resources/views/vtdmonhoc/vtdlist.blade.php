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
        <h1>Danh Sách Mon Học</h1>
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
                                <i class="fa-solid fa-eye-low-vision"></i></a>
                            <a href="/monhoc/edit/{{$item->VTDMAMONHOC}}" class="btn btn-primary">
                                <i class="fa-solid fa-pen"></i></a>
                            {{-- Form xóa monhoc --}}
                            <a href="/monhoc/delete/{{$item->VTDMAMONHOC}}" class="btn btn-danger"
                                onclick="return confirm('Bạn muốn xóa môn học không? Mã: ' + '{{$item->VTDMAMONHOC}}');">
                                <i class="fa-regular fa-trash-can"></i> Xóa
                             </a>
                             
                            </td>

                            
    

                    </tr>
                @endforeach
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="5"><h3>Tổng Số Môn Học {{$vtdmonhoc->count()}}</h3></th>
                </tr>
            </tfoot>
        </table>
    </section>
</body>
</html>