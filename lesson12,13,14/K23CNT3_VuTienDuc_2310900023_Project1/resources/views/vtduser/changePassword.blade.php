@extends('_layouts.frontend.user1')

@section('title', 'Đổi Mật Khẩu')

@section('content-body')
<form action="{{ route('vtduser.changePasswordSubmit', ['id' => $vtduser->id]) }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $vtduser->id }}">

    <div class="card shadow-sm border-light">
        <div class="card-header text-center bg-primary text-white">
            <h1 class="mb-0">Đổi Mật Khẩu</h1>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="old_password" class="form-label">Mật Khẩu Cũ</label>
                <input type="password" class="form-control" id="old_password" name="old_password" required>
                @error('old_password')
                    <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="new_password" class="form-label">Mật Khẩu Mới</label>
                <input type="password" class="form-control" id="new_password" name="new_password" required>
                @error('new_password')
                    <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="new_password_confirmation" class="form-label">Xác Nhận Mật Khẩu Mới</label>
                <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" required>
                @error('new_password_confirmation')
                    <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="card-footer text-center">
            <button class="btn btn-success btn-lg" type="submit">
                <i class="fas fa-check-circle"></i> Đổi Mật Khẩu
            </button>
            <a href="{{ route('vtduser.home1') }}" class="btn btn-secondary btn-lg">
                <i class="fas fa-arrow-left"></i> Trở lại
            </a>
        </div>
    </div>
</form>
@endsection
