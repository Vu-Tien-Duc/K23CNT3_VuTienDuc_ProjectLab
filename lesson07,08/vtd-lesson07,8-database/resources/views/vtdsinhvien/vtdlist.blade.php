<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh Sach sinh vien</title>
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>
<body>
    <section class="container border my-3" >
        <h1 style="text-align:center;">Danh sach sinh vien</h1>    
        <button class="btn btn-primary" ><a href="sinhvien/create" style="color:azure;">Thêm Mới</a></button>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã Sinh Viên</th>
                    <th>Họ Sinh Viên</th>
                    <th>Tên Sinh Viên</th>
                    <th>Phái</th>
                    <th>Ngày Sinh</th>
                    <th>Nơi Sinh</th>
                    <th>Mã Khoa</th>
                    <th>Học Bổng</th>
                    <th>Điểm Trung Bình</th>
                    <th>Chức Năng</th>
                </tr>
            </thead>
            <tbody>
                @php
                $stt = 0;
                @endphp
              @foreach($sinhvien as $item)
            
              <tr>
                  @php
                  $stt++;
                  @endphp
                    <td>{{$stt}}</td>
                    <td> {{$item->VTDMASINHVIEN}}</td>
                    <td> {{$item->VTDHOSV}}</td>
                    <td> {{$item->VTDTENSV}}</td>
                    <td> {{$item->VTDPHAI}}</td>
                    <td> {{$item->VTDNGAYSINH}}</td>
                    <td> {{$item->VTDNOISINH}}</td>
                    <td> {{$item->VTDMAKHOA}}</td>
                    <td> {{$item->VTDHOCBONG}}</td>
                    <td> {{$item->VTDDIEMTRUNGBINH}}</td>
                    <td class="text-center">
                        <a href="/sinhvien/detail/{{$item->VTDMASINHVIEN}}" class="btn btn-success">
                            <i class="fa-solid fa-eye-low-vision"></i></a>
                        <a href="/sinhvien/edit/{{$item->VTDMASINHVIEN}}" class="btn btn-primary">
                            <i class="fa-solid fa-pen"></i></a>
                        {{-- Form xóa sinhvien --}}
                        <a href="/sinhvien/delete/{{$item->VTDMASINHVIEN}}" class="btn btn-danger"
                            onclick="return confirm('Bạn muốn xóa môn học không? Mã: ' + '{{$item->VTDMASINHVIEN}}');">
                            <i class="fa-regular fa-trash-can"></i> Xóa
                         </a>
                         
                        </td>

                   
              </tr>
              @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="11"><h3>Tổng Số Sinh viên {{$sinhvien->count()}}</h3></th>
                </tr>
            </tfoot>
        </table>
    </section>    
</body>
</html>