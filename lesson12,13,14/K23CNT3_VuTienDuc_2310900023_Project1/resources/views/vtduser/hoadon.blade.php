@extends('_layouts.frontend.user')

@section('title', 'Hóa Đơn')

@section('content-body')
    <div class="container">
        <h1>Thông Tin Hóa Đơn</h1>

        @if ($invoice)  <!-- Kiểm tra xem hóa đơn có tồn tại không -->
            <h3>Mã Hóa Đơn: {{ $invoice->vtdMaHoaDon }}</h3>
            <p><strong>Khách Hàng:</strong> {{ $invoice->vtdHoTenKhachHang }}</p>
            <p><strong>Email:</strong> {{ $invoice->vtdEmail }}</p>
            <p><strong>Số Điện Thoại:</strong> {{ $invoice->vtdDienThoai }}</p>
            <p><strong>Địa Chỉ:</strong> {{ $invoice->vtdDiaChi }}</p>
            <p><strong>Ngày Hóa Đơn:</strong> {{ $invoice->vtdNgayHoaDon->format('d/m/Y') }}</p>
            <p><strong>Ngày Nhận:</strong> {{ $invoice->vtdNgayNhan->format('d/m/Y') }}</p>

            <h4>Danh Sách Sản Phẩm:</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tên Sản Phẩm</th>
                        <th>Số Lượng</th>
                        <th>Giá</th>
                        <th>Tổng</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($invoice->products as $item)  <!-- Duyệt qua các sản phẩm trong hóa đơn -->
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ number_format($item->price, 0, ',', '.') }} VND</td>
                            <td>{{ number_format($item->price * $item->quantity, 0, ',', '.') }} VND</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <h3>Tổng Tiền: {{ number_format($invoice->vtdTongGiaTri, 0, ',', '.') }} VND</h3>

            <div class="mt-4">
                <!-- Nút thanh toán -->
                <button class="btn btn-success">Thanh Toán</button>
            </div>
        @else
            <p>Không tìm thấy hóa đơn này.</p>
        @endif
    </div>
@endsection
<script>
    // Xác nhận mua sản phẩm
    function confirmPurchase(productName, productId) {
        // Kiểm tra xem $invoice có tồn tại không
        if (typeof invoice !== 'undefined' && invoice !== null) {
            // Cập nhật tên sản phẩm trong modal
            document.getElementById('purchase-product-name').innerText = productName;

            // Hiển thị modal
            $('#purchaseModal').modal('show');

            // Lắng nghe sự kiện xác nhận mua sản phẩm
            document.getElementById('confirm-purchase-btn').onclick = function() {
                // Điều hướng tới trang hóa đơn với invoiceId
                window.location.href = "{{ route('vtduser.hoadon', ['invoiceId' => $invoice->id]) }}";
            };

            // Lắng nghe sự kiện hủy mua sản phẩm
            document.querySelector('#purchaseModal .btn-secondary').onclick = function() {
                $('#purchaseModal').modal('hide');
            };
        } else {
            alert('Hóa đơn không tồn tại.');
        }
    }
</script>
