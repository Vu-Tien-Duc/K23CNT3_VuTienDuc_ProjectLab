<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Thông Báo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="styles.css"> <!-- Đảm bảo liên kết với file CSS của bạn -->
    <style>
        /* styles.css */

body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
}

.container {
    max-width: 800px;
}

.notification {
    background-color: #f8f9fa;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-bottom: 15px;
}

.notification h4 {
    font-size: 18px;
    color: #333;
}

.notification p {
    font-size: 16px;
    color: #555;
}

.notification small {
    font-size: 12px;
    color: #888;
}

.notification.mb-3 {
    margin-bottom: 20px;
}

.notification .text-right {
    text-align: right;
}

.notification.bg-light {
    background-color: #f8f9fa;
}

.notification.border {
    border: 1px solid #ddd;
}

.notification.rounded {
    border-radius: 8px;
}

.notification:hover {
    background-color: #f1f1f1;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

h1 {
    font-size: 32px;
    color: #333;
    margin-bottom: 40px;
    font-weight: bold;
}

    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Trang Thông Báo</h1>
        
        <!-- Thông báo khuyến mãi -->
        <div class="notification mb-3 p-4 bg-light border rounded">
            <h4 class="font-weight-bold">Khuyến mãi lớn!</h4>
            <p>Giảm giá 50% cho tất cả sản phẩm tại Phonestore. Hãy đến ngay để tận hưởng ưu đãi.</p>
            <p class="text-right"><small>Ngày bắt đầu: 01/01/2025</small></p>
        </div>

        <!-- Thông báo sản phẩm mới -->
        <div class="notification mb-3 p-4 bg-light border rounded">
            <h4 class="font-weight-bold">Sản phẩm mới</h4>
            <p>Chúng tôi vừa ra mắt mẫu điện thoại iPhone 14. Đặt hàng ngay hôm nay để nhận quà tặng đặc biệt!</p>
            <p class="text-right"><small>Ngày ra mắt: 10/01/2025</small></p>
        </div>

        <!-- Thông báo giao hàng -->
        <div class="notification mb-3 p-4 bg-light border rounded">
            <h4 class="font-weight-bold">Lưu ý giao hàng</h4>
            <p>Thời gian giao hàng sẽ có sự thay đổi trong dịp lễ Tết. Mong quý khách thông cảm.</p>
            <p class="text-right"><small>Ngày hiệu lực: 15/01/2025</small></p>
        </div>

        <!-- Thông báo thay đổi chính sách bảo hành -->
        <div class="notification mb-3 p-4 bg-light border rounded">
            <h4 class="font-weight-bold">Cập nhật chính sách bảo hành</h4>
            <p>Chúng tôi đã cập nhật chính sách bảo hành cho các sản phẩm điện thoại. Quý khách vui lòng tham khảo thông tin chi tiết tại cửa hàng.</p>
            <p class="text-right"><small>Ngày áp dụng: 01/02/2025</small></p>
        </div>

        <!-- Thông báo lịch nghỉ lễ -->
        <div class="notification mb-3 p-4 bg-light border rounded">
            <h4 class="font-weight-bold">Lịch nghỉ lễ</h4>
            <p>Phonestore xin thông báo lịch nghỉ lễ Tết Nguyên Đán từ ngày 25/01/2025 đến hết 03/02/2025. Chúng tôi sẽ tiếp tục hoạt động vào ngày 04/02/2025.</p>
            <p class="text-right"><small>Ngày áp dụng: 25/01/2025</small></p>
        </div>

        <!-- Thông báo sự kiện đặc biệt -->
        <div class="notification mb-3 p-4 bg-light border rounded">
            <h4 class="font-weight-bold">Sự kiện đặc biệt</h4>
            <p>Phonestore sẽ tổ chức một sự kiện đặc biệt vào cuối tuần này, mời quý khách đến tham dự để nhận nhiều phần quà hấp dẫn!</p>
            <p class="text-right"><small>Ngày tổ chức: 20/01/2025</small></p>
        </div>

        <!-- Thông báo thay đổi giờ làm việc -->
        <div class="notification mb-3 p-4 bg-light border rounded">
            <h4 class="font-weight-bold">Thay đổi giờ làm việc</h4>
            <p>Vì lý do đặc biệt, giờ làm việc của Phonestore sẽ thay đổi từ ngày 15/01/2025. Cửa hàng sẽ mở cửa từ 9:00 AM đến 5:00 PM hằng ngày.</p>
            <p class="text-right"><small>Ngày thay đổi: 15/01/2025</small></p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
