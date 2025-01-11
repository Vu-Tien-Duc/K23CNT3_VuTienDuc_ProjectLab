@extends('_layouts.frontend.user1')

@section('title', 'Tạo Chi Tiết Hóa Đơn')

@section('content-body')
<div class="container py-6 max-w-3xl mx-auto">
    <h1 class="text-3xl font-bold text-center text-blue-600 mb-6">Tạo Chi Tiết Hóa Đơn</h1>

    <form action="{{ route('cthoadon.storecthoadon') }}" method="POST" class="space-y-6">
        @csrf

        <!-- Hóa đơn ID -->
        <div class="form-group">
            <label for="vtdHoaDonID" class="text-lg text-gray-700 font-semibold">Hóa Đơn ID</label>
            <input type="number" name="vtdHoaDonID" value="{{ $hoaDon->id }}" class="form-control p-3 border rounded-lg w-full" readonly>
        </div>

        <!-- Sản phẩm ID -->
        <div class="form-group">
            <label for="vtdSanPhamID" class="text-lg text-gray-700 font-semibold">Sản Phẩm ID</label>
            <input type="number" name="vtdSanPhamID" value="{{ $sanPham->id }}" class="form-control p-3 border rounded-lg w-full" readonly>
        </div>

        <!-- Số lượng sản phẩm -->
        <div class="form-group">
            <label for="vtdSoLuong" class="text-lg text-gray-700 font-semibold">Số Lượng</label>
            <input type="number" name="vtdSoLuong" id="vtdSoLuong" value="{{ $soLuong }}" min="1" max="{{ $sanPham->vtdSoLuong }}" class="form-control p-3 border rounded-lg w-full" required>
        </div>

        <!-- Đơn Giá -->
        <div class="form-group">
            <label for="vtdDonGiaMua" class="text-lg text-gray-700 font-semibold">Đơn Giá</label>
            <input type="text" class="form-control p-3 border rounded-lg w-full" value="{{ number_format($sanPham->vtdDonGia, 0, ',', '.') }} VND" disabled>
        </div>

        <!-- Thành Tiền (tính toán từ Số Lượng và Đơn Giá) -->
        <div class="form-group">
            <label for="vtdThanhTien" class="text-lg text-gray-700 font-semibold">Thành Tiền</label>
            <input type="text" class="form-control p-3 border rounded-lg w-full" id="vtdThanhTien" value="{{ number_format($sanPham->vtdDonGia * $soLuong, 0, ',', '.') }} VND" disabled>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="w-full py-3 text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition duration-300">
            Lưu Chi Tiết Hóa Đơn
        </button>
    </form>
</div>

@section('scripts')
<script>
    // Lắng nghe sự thay đổi của số lượng
    document.getElementById('vtdSoLuong').addEventListener('input', function() {
        var soLuong = parseInt(this.value); // Lấy giá trị số lượng
        var donGia = {{ $sanPham->vtdDonGia }}; // Lấy giá trị đơn giá

        // Kiểm tra số lượng hợp lệ (nếu số lượng < 1 thì mặc định là 1)
        if (isNaN(soLuong) || soLuong < 1) {
            soLuong = 1;
            this.value = soLuong;  // Đặt lại giá trị trong input nếu không hợp lệ
        }

        // Tính toán thành tiền (Số Lượng * Đơn Giá)
        var thanhTien = soLuong * donGia;

        // Hiển thị giá trị thành tiền đã tính toán lại
        document.getElementById('vtdThanhTien').value = new Intl.NumberFormat().format(thanhTien) + ' VND';
    });
</script>
@endsection

@endsection
