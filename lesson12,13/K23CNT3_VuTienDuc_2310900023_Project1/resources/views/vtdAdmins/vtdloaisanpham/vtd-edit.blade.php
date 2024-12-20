@extends('_layouts.admins._master')
@section('title','Create Loại Sản Phẩm')
    
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <form action="{{ route('vtdadmin.vtdloaisanpham.vtdEditSubmit', $vtdloaisanpham->vtdMaLoai) }}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h1>Sửa loại sản phẩm</h1>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="vtdMaLoai" class="form-label">Mã Loại</label>
                                <input type="text" class="form-control" id="vtdMaLoai" name="vtdMaLoai" value="{{$vtdloaisanpham->vtdMaLoai }}" disabled>
                            </div>

                            <div class="mb-3">
                                <label for="vtdTenLoai" class="form-label">Tên Loại</label>
                                <input type="text" class="form-control" id="vtdTenLoai" name="vtdTenLoai" value="{{ old('vtdTenLoai', $vtdloaisanpham->vtdTenLoai) }}" required>
                                @error('vtdTenLoai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label for="vtdTrangThai" class="form-label">Trạng Thái</label>
                                <div class="col-sm-10">
                                    <input type="radio" id="vtdTrangThai1" name="vtdTrangThai" value="1" {{ old('vtdTrangThai', $vtdloaisanpham->vtdTrangThai) == 1 ? 'checked' : '' }} />
                                    <label for="vtdTrangThai1">Khóa</label>
                                    &nbsp;
                                    <input type="radio" id="vtdTrangThai0" name="vtdTrangThai" value="0" {{ old('vtdTrangThai', $vtdloaisanpham->vtdTrangThai) == 0 ? 'checked' : '' }} />
                                    <label for="vtdTrangThai0">Hiển Thị</label>
                                </div>
                                @error('vtdTrangThai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success">Create</button>
                            <a href="{{route('vtdadims.vtdloaisanpham')}}" class="btn btn-primary"> Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection