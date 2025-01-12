-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2025 at 06:12 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `k23cnt3_vutienduc_2310900023_project1_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(30, '2024_12_19_111926_drop_vtd_ct_hoa_don_table', 7),
(72, '2014_10_12_000000_create_users_table', 8),
(73, '2014_10_12_100000_create_password_reset_tokens_table', 8),
(74, '2019_08_19_000000_create_failed_jobs_table', 8),
(75, '2019_12_14_000001_create_personal_access_tokens_table', 8),
(76, '2024_12_18_015805_create_vtd__q_u_a_n__t_r_i__table', 8),
(77, '2024_12_18_022154_create_vtd__l_o_a_i__s_a_n__p_h_a_m__table', 8),
(78, '2024_12_18_023342_create_vtd__s_a_n__p_h_a_m__table', 8),
(79, '2024_12_18_032325_create_vtd__k_h_a_c_h__h_a_n_g__table', 8),
(80, '2024_12_18_033021_create_vtd__h_o_a__d_o_n__table', 8),
(81, '2024_12_18_033741_create_vtd__c_t__h_o_a__d_o_n__table', 8),
(82, '2024_12_27_084029_create_vtd__t_i_n__t_u_c__table', 8),
(83, '2024_12_28_100526_add_vtd_mo_ta_to_vtd_san_pham_table', 9),
(84, '2024_12_29_093229_add_vtd_last_login_to_vtd_khach_hang_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vtd_ct_hoa_don`
--

CREATE TABLE `vtd_ct_hoa_don` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vtdHoaDonID` bigint(20) NOT NULL,
  `vtdSanPhamID` bigint(20) NOT NULL,
  `vtdSoLuongMua` int(11) NOT NULL,
  `vtdDonGiaMua` double(15,3) NOT NULL,
  `vtdThanhTien` double NOT NULL,
  `vtdTrangThai` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vtd_ct_hoa_don`
--

INSERT INTO `vtd_ct_hoa_don` (`id`, `vtdHoaDonID`, `vtdSanPhamID`, `vtdSoLuongMua`, `vtdDonGiaMua`, `vtdThanhTien`, `vtdTrangThai`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 12, 699000.000, 8388000, 0, NULL, NULL),
(2, 2, 2, 20, 550000.000, 11000000, 0, NULL, NULL),
(3, 3, 5, 5, 590000.000, 2950000, 0, NULL, NULL),
(4, 4, 8, 3, 199000.000, 597000, 0, NULL, NULL),
(27, 95, 6, 2, 2900000.000, 5800000, 1, '2025-01-11 09:07:20', '2025-01-11 09:07:20'),
(28, 96, 2, 2, 5500000.000, 11000000, 1, '2025-01-11 09:55:47', '2025-01-11 09:55:47'),
(29, 97, 4, 2, 799000.000, 1598000, 1, '2025-01-11 09:56:32', '2025-01-11 09:56:32');

-- --------------------------------------------------------

--
-- Table structure for table `vtd_hoa_don`
--

CREATE TABLE `vtd_hoa_don` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vtdMaHoaDon` varchar(255) NOT NULL,
  `vtdMaKhachHang` bigint(20) NOT NULL,
  `vtdNgayHoaDon` date NOT NULL,
  `vtdNgayNhan` date NOT NULL,
  `vtdHoTenKhachHang` varchar(255) NOT NULL,
  `vtdEmail` varchar(255) NOT NULL,
  `vtdDienThoai` varchar(255) NOT NULL,
  `vtdDiaChi` varchar(255) NOT NULL,
  `vtdTongGiaTri` double(15,3) NOT NULL,
  `vtdTrangThai` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vtd_hoa_don`
--

INSERT INTO `vtd_hoa_don` (`id`, `vtdMaHoaDon`, `vtdMaKhachHang`, `vtdNgayHoaDon`, `vtdNgayNhan`, `vtdHoTenKhachHang`, `vtdEmail`, `vtdDienThoai`, `vtdDiaChi`, `vtdTongGiaTri`, `vtdTrangThai`, `created_at`, `updated_at`) VALUES
(1, 'HD001', 1, '2024-12-12', '2024-12-12', 'Vũ Tiến Đức', 'vuducc@gmail.com', '012550036', 'Yên Bái-Yên Bình', 790000.000, 2, NULL, NULL),
(2, 'HD002', 2, '2024-12-20', '2024-12-21', 'Trần Tuấn Hưng', 'hungtran@gmail.com', '012588868', 'Phú Thọ', 125000.000, 0, NULL, NULL),
(3, 'HD003', 3, '2024-12-17', '2024-12-17', 'Phan Quang Minh', 'pminh@gmail.com', '0382550508', 'Phú Thọ', 999000.000, 1, NULL, NULL),
(4, 'HD004', 1, '2024-12-12', '2024-12-12', 'Vũ Tiến Đức', 'vuducc@gmail.com', '012550036', 'Yên Bái-Yên Bình', 660000.000, 1, NULL, NULL),
(5, 'HD005', 4, '2024-12-03', '2024-12-04', 'Phạm Tùng Quân', 'quanpham@gmail.com', '094357152', 'Hà Nội', 777999.000, 1, NULL, NULL),
(6, 'HD20241023', 3, '2024-12-31', '2025-01-03', 'Phan Quang Minh', 'pminh@gmail.com', '0382550508', 'Phú Thọ', 699000.000, 0, '2024-12-31 01:53:20', '2024-12-31 01:53:20'),
(7, 'HD20244300', 3, '2024-12-31', '2025-01-03', 'Phan Quang Minh', 'pminh@gmail.com', '0382550508', 'Phú Thọ', 699000.000, 0, '2024-12-31 01:57:22', '2024-12-31 01:57:22'),
(8, 'HD20246793', 3, '2024-12-31', '2025-01-03', 'Phan Quang Minh', 'pminh@gmail.com', '0382550508', 'Phú Thọ', 550000.000, 0, '2024-12-31 02:00:33', '2024-12-31 02:00:33'),
(77, 'HD0968', 14, '2025-01-01', '2025-01-04', 'VŨ Đức', 'ducyb@gmail.com', '0987566618', 'Nam Định', 1598000.000, 0, '2025-01-01 03:02:16', '2025-01-01 03:02:16'),
(78, 'HD9986', 14, '2025-01-01', '2025-01-04', 'Vũ Đức', 'ducyb@gmail.com', '0987566618', 'Nam Định', 799000.000, 0, '2025-01-01 07:08:20', '2025-01-01 07:08:20'),
(79, 'HD9557', 14, '2025-01-03', '2025-01-06', 'Vũ Đức', 'ducyb@gmail.com', '0987566618', 'Nam Định', 250000.000, 0, '2025-01-03 04:51:31', '2025-01-03 04:51:31'),
(80, 'HD0680', 27, '2025-01-10', '2025-01-13', 'nane', 'nane@gmail.com', '09875666122', 'Yên Bái-Yên Bình1', 1598000.000, 0, '2025-01-10 05:20:38', '2025-01-10 05:20:38'),
(95, 'HD9129', 16, '2025-01-11', '2025-01-14', 'Nguyễn Nguyên', 'nn@gmail.com', '0987566619', 'Nam Định', 5800000.000, 0, '2025-01-11 09:07:10', '2025-01-11 09:07:10'),
(96, 'HD1468', 28, '2025-01-11', '2025-01-14', 'Duy Mạnh', 'dmanh@gmail.com', '09875618123', 'Hà Nam', 11000000.000, 0, '2025-01-11 09:55:40', '2025-01-11 09:55:40'),
(97, 'HD3548', 28, '2025-01-11', '2025-01-14', 'Duy Mạnh', 'dmanh@gmail.com', '09875618123', 'Hà Nam', 1598000.000, 0, '2025-01-11 09:56:26', '2025-01-11 09:56:26');

-- --------------------------------------------------------

--
-- Table structure for table `vtd_khach_hang`
--

CREATE TABLE `vtd_khach_hang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vtdMaKhachHang` varchar(255) NOT NULL,
  `vtdHoTenKhachHang` varchar(255) NOT NULL,
  `vtdEmail` varchar(255) NOT NULL,
  `vtdMatKhau` varchar(255) NOT NULL,
  `vtdDienThoai` varchar(255) NOT NULL,
  `vtdDiaChi` varchar(255) NOT NULL,
  `vtdNgayDangKy` date NOT NULL,
  `vtdTrangThai` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vtd_khach_hang`
--

INSERT INTO `vtd_khach_hang` (`id`, `vtdMaKhachHang`, `vtdHoTenKhachHang`, `vtdEmail`, `vtdMatKhau`, `vtdDienThoai`, `vtdDiaChi`, `vtdNgayDangKy`, `vtdTrangThai`, `created_at`, `updated_at`) VALUES
(1, 'KH001', 'Vũ Tiến Đức', 'vuducc1@gmail.com', '$2y$10$zvK.TFECqYK9/vwEQpSPTe.ePaF7zKVlYcwVDDO48Eepj1yuP/UCm', '012550036', 'Yên Bái-Yên Bình', '2024-12-12', 0, NULL, '2024-12-29 03:30:59'),
(2, 'KH002', 'Trần Tuấn Hưng', 'hungtran@gmail.com', '$2y$10$y.stlbNyqMfQ00m.l8sON.kOq1GbEBGF7bXUiZzrxi.E18fobysoW', '012588868', 'Phú Thọ', '2024-12-20', 0, NULL, NULL),
(3, 'KH003', 'Phan Quang Minh', 'pminh@gmail.com', '$2y$10$bs7n8BW.KSFDdQKTNyHwoe6I7iGUhNL7uo6LZx2SYQfKXmYolFcM6', '0382550508', 'Phú Thọ', '2024-12-17', 2, NULL, NULL),
(4, 'KH004', 'Phạm Tùng Quân', 'quanpham@gmail.com', '$2y$10$6npDJ44.kZ8dA6Aa7RAxjuPZ1yfM1Jtf3dV8IZlQF9uA2aB97FsPa', '094357152', 'Hà Nội', '2024-12-03', 0, NULL, NULL),
(9, 'KH005', 'Trần Văn Hoàng', 'tranhoang@gmail.com', '123456', '09875666181', 'Nam Định', '2024-12-29', 0, '2024-12-29 02:52:11', '2025-01-01 02:35:31'),
(14, 'KH006', 'Vũ Đức', 'ducyb@gmail.com', '$2y$10$aRYy6WlLsTh60hzMDQ6RFuvl98p4UL4JzGuSE2hS/.Eab/u5YiEi.', '0987566618', 'Nam Định', '2025-01-01', 0, '2025-01-01 02:55:00', '2025-01-01 02:55:55'),
(16, 'KH007', 'Nguyễn Nguyên', 'nn@gmail.com', '$2y$10$UFDYYS7fIQMXD7ZDH9zNNuLotWzpY3kkWMFJbe/ROG7CwdMM5Fc/6', '0987566619', 'Nam Định', '2025-01-03', 0, '2025-01-03 03:16:55', '2025-01-03 03:19:18'),
(27, 'KH008', 'nane', 'nane@gmail.com', '$2y$10$IQpME015bYpQVkc1qpAvdO8ld99xyVjYwfTeKYrT/E3eRFTD18Ur.', '09875666122', 'Yên Bái-Yên Bình1', '2025-01-10', 0, '2025-01-10 05:17:48', '2025-01-10 05:18:19'),
(28, 'KH009', 'Duy Mạnh', 'dmanh@gmail.com', '$2y$10$d5vNT0CBa4H1iKi2E4gDeezSN4q1VRqhyyhtOhDAgUfE6CZWiUvti', '09875618123', 'Hà Nam1', '2025-01-11', 0, '2025-01-11 09:55:20', '2025-01-11 10:09:00');

-- --------------------------------------------------------

--
-- Table structure for table `vtd_loai_san_pham`
--

CREATE TABLE `vtd_loai_san_pham` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vtdMaLoai` varchar(255) NOT NULL,
  `vtdTenLoai` varchar(255) NOT NULL,
  `vtdTrangThai` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vtd_loai_san_pham`
--

INSERT INTO `vtd_loai_san_pham` (`id`, `vtdMaLoai`, `vtdTenLoai`, `vtdTrangThai`, `created_at`, `updated_at`) VALUES
(1, 'IP', 'Iphone', 0, NULL, '2024-12-28 03:19:51'),
(2, 'SS', 'Samsung', 0, NULL, '2024-12-28 03:20:15'),
(3, 'HW', 'Huawai', 0, NULL, '2024-12-28 03:20:33'),
(4, 'VV', 'ViVo', 0, NULL, '2024-12-28 03:20:51'),
(5, 'OP', 'Oppo', 0, '2024-12-28 03:21:05', '2024-12-28 03:21:05'),
(6, 'XM', 'Xiaomi', 0, '2024-12-28 03:21:42', '2024-12-28 03:21:42');

-- --------------------------------------------------------

--
-- Table structure for table `vtd_quan_tri`
--

CREATE TABLE `vtd_quan_tri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vtdTaiKhoan` varchar(255) NOT NULL,
  `vtdMatKhau` varchar(255) NOT NULL,
  `vtdTrangThai` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vtd_quan_tri`
--

INSERT INTO `vtd_quan_tri` (`id`, `vtdTaiKhoan`, `vtdMatKhau`, `vtdTrangThai`, `created_at`, `updated_at`) VALUES
(1, 'vuduc@gmail.com', '$2y$10$OZcftJWZxYlzL8wPVA36WOxJKc1rK9hnNhvAGJosorbphkvismd8W', 0, NULL, NULL),
(2, '0943572199', '$2y$10$OZcftJWZxYlzL8wPVA36WOxJKc1rK9hnNhvAGJosorbphkvismd8W', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vtd_san_pham`
--

CREATE TABLE `vtd_san_pham` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vtdMaSanPham` varchar(255) NOT NULL,
  `vtdTenSanPham` varchar(255) NOT NULL,
  `vtdHinhAnh` varchar(255) NOT NULL,
  `vtdSoLuong` int(11) NOT NULL,
  `vtdDonGia` double(15,3) NOT NULL,
  `vtdMaLoai` bigint(20) NOT NULL,
  `vtdMoTa` text DEFAULT NULL,
  `vtdTrangThai` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vtd_san_pham`
--

INSERT INTO `vtd_san_pham` (`id`, `vtdMaSanPham`, `vtdTenSanPham`, `vtdHinhAnh`, `vtdSoLuong`, `vtdDonGia`, `vtdMaLoai`, `vtdMoTa`, `vtdTrangThai`, `created_at`, `updated_at`) VALUES
(1, 'SS001', 'SamSung Galaxy S24 Utral', 'img/san_pham/31jxEI2kRMg5xKT4uQ7J6oB6G54du4z4P2oV4Bfe.jpg', 94, 6990000.000, 2, 'Tính năng mới trên siêu phẩm Samsung Galaxy S24 Ultra\r\nsiêu phẩm Samsung Galaxy S24 UltraSau sự ra mắt ấn tượng các phiên bản đàn anh 2023 của Samsung, các đối thủ trong giới smartphone không kém phần sôi động khi chính họ đang chuẩn bị tung ra những sản phẩm mới trong mùa thu năm nay. Tuy nhiên, hiện tại, tất cả ánh đèn đều hướng về Samsung và những gì họ sẽ mang đến trong năm 2024. Trong số các ứng viên, Galaxy S24 Ultra là điện thoại được kỳ vọng sẽ làm nên tên tuổi của Samsung.\r\n\r\nSamsung đối mặt với thách thức lớn khi phải nâng cấp chiếc Galaxy S23 Ultra, một siêu phẩm đã đem lại hiệu suất xuất sắc, thời lượng pin ấn tượng và hệ thống camera đỉnh cao trong năm qua. Mặc dù vậy, ban đầu về Galaxy S24 Ultra đã khẳng định rằng sự chờ đợi đối với phiên bản mới này vẫn rất lớn.\r\n\r\nDưới đây là một tổng hợp toàn diện về những xoay quanh dòng sản phẩm Galaxy S24 Ultra sắp ra mắt của Samsung. Những dự đoán này đưa ra một cái nhìn trước về những tính năng và cải tiến có thể xuất hiện trên chiếc điện thoại thông minh này.\r\n\r\nThiết kế gọn gàng, đẹp mắt hơn\r\nSamsung Galaxy S24 Ultra được kỳ vọng sẽ trình làng nhiều đổi mới về thiết kế so với người tiền nhiệm của mình, Galaxy S23 Ultra. Theo các tín đồ Sambiz, mẫu mới sẽ tích hợp khung bằng titan thay thế cho nhôm cường lực được sử dụng trong các phiên bản trước đó. Điều này không chỉ giúp giảm trọng lượng của điện thoại mà còn tăng cường độ bền.\r\n\r\nmàu sắc trên galaxy s24 ultraĐối với tùy chọn màu sắc, Galaxy S24 Ultra dự kiến sẽ có bốn màu cơ bản: Đen, Xám, Tím, và Vàng. Ngoài ra, nguồn tin còn cho biết có thể có ba màu độc quyền chỉ có sẵn qua cửa hàng Samsung, bao gồm Cam, Xanh nhạt, và Xanh lá.\r\n\r\nNhìn chung, Galaxy S24 Ultra sẽ giữ nguyên hình dáng cơ bản tương tự Galaxy S23 Ultra, nhưng điểm khác biệt đáng chú ý là phần góc cạnh thiết kế vuông vức hơn. Các hình ảnh rò rỉ từ Windows Report cũng xác nhận màn hình phẳng, khung titan, và bốn màu sắc được đề cập từ các nguồn tin khác.\r\n\r\nTuy nhiên, tất cả những thông tin này đều dựa trên sự phán đoán. Về thực tế, thiết kế và tính năng của Galaxy S24 Ultra có thể thay đổi khi Samsung chính thức công bố sản phẩm.\r\n\r\nGalaxy Z\r\n\r\nMàn hình độ phân giải cao, siêu nét\r\nGalaxy S24 Ultra được trang bị một màn hình phẳng với viền bezel siêu mỏng chỉ khoảng ~1,52mm, đánh dấu một bước tiến vững chắc trong thiết kế của Samsung. Đây được coi là chiếc điện thoại với viền mỏng nhất từ trước đến nay của hãng.\r\n\r\nBên cạnh đó, Samsung không ngừng nỗ lực để mang đến trải nghiệm hiển thị tuyệt vời nhất cho người dùng. Màn hình Infinity Pro AMOLED 2X trên Galaxy S24 Ultra không chỉ đẹp mắt với độ phân giải cao, mà còn hỗ trợ tần số làm mới 120Hz, mang lại độ mượt mà chỉ vuốt lướt nhẹ đáng kinh ngạc.\r\n\r\nmàn hình galaxy s24 ultraVới kích thước 6.8 inch và độ phân giải iQuad-HD+, tích hợp công nghệ LTPO với tần số quét thích ứng lên đến 144Hz. Điều này hứa hẹn một trải nghiệm hiển thị nhanh chóng và mượt mà. S24 Ultra cũng được cải tiến từ tấm nền OLED thế hệ thứ 13 (M13), được đồn đoán tiết kiệm điện năng hơn cả màn hình của iPhone 15. Độ sáng của màn hình S24 Ultra đạt khoảng 2500 nits, vượt lên trên dòng S23 Ultra (1.750 nits), mang lại hiển thị sống động và rực rỡ hơn.\r\n\r\n>> Đăng ký mua điện thoại trả góp online tại Điện thoại Giá Kho với lãi suất 0% ngay hôm nay để nhận ngay ưu đãi hấp dẫn!\r\n\r\nHiệu năng xử lý vượt trội\r\nSamsung trang bị Galaxy S24 Ultra với một chipset Qualcomm Snapdragon 8 Gen 3, đánh dấu một bước tiến lớn về hiệu năng . So với phiên bản tiền nhiệm – Galaxy S23 Ultra, sử dụng Snapdragon 8 Gen 2 và chỉ đạt khoảng ~5.077 điểm. Trong khi đó, hiệu suất của S24 Ultra thực sự là một bước nhảy vọt ấn tượng 7.501 điểm, vượt trội hơn hẳn so với Apple A17 Pro (7.237 điểm).\r\n\r\nHiệu năng xử lý vượt trội\r\n\r\nSamsung cũng tăng cường bộ nhớ RAM cho S24 Ultra với 12/16GB, giúp máy xử lý các tác vụ đa nhiệm một cách mượt mà và ổn định. Đồng thời, Galaxy S24 Ultra tiếp tục cải thiện khả năng tiết kiệm pin để đảm bảo trải nghiệm người dùng không bị ảnh hưởng và tối ưu hóa hiệu suất cho các ứng dụng và trò chơi đòi hỏi cao.\r\n\r\nVới ba tùy chọn bộ nhớ trong là 256GB, 512GB và 1TB, S24 Ultra đáp ứng mọi nhu cầu sử dụng của người dùng, từ lưu trữ thông tin cá nhân đến việc chơi game và sử dụng ứng dụng đa nhiệm một cách linh hoạt, mang lại hiệu suất vô song và tiết kiệm năng lượng.\r\n\r\n⇒ Đừng bỏ lỡ cơ hội sở hữu điện thoại mới ngay hôm nay với hình thức trả góp điện thoại hấp dẫn. Nhanh tay liên hệ qua hotline 19008922 để được tư vấn và hỗ trợ.\r\n\r\nHệ thống camera vô song\r\nGalaxy S24 Ultra sở hữu một bản nâng cấp đáng kể trong phần camera, với việc tích hợp cảm biến ISOCELL HPX thế hệ mới, đạt đến độ phân giải lên đến 200MP. Camera telephoto của S24 Ultra được trang bị cảm biến từ LG Innotek, cho phép zoom từ 4x đến 9x mà vẫn giữ nguyên chất lượng hình ảnh.\r\n\r\nĐiều đáng chú ý là nhờ Samsung trang bị một con chip xử lý hình ảnh riêng biệt cho S24 Ultra, mang lại chất lượng hình ảnh tốt hơn trong mọi điều kiện ánh sáng, cung cấp trải nghiệm chụp và quay video tuyệt vời cho người dùng của Galaxy S24 Ultra. Điều này làm tăng tính đa dạng và sáng tạo trong việc sử dụng camera trên chiếc điện thoại thông minh hàng đầu này.\r\n\r\nCông nghệ AI tiên tiến\r\nNhờ tích hợp tính năng AI tiên tiến vào cả phần cứng và phần mềm, giúp thiết bị hiểu biết và đáp ứng mọi nhu cầu một cách thông minh hơn, bao gồm việc tự động dịch tin nhắn và thậm chí là tự động soạn email. Ngoài ra, Samsung cũng tiết lộ rằng ở S24 Ultra được nâng cấp trợ lý ảo Bixby, mang đến khả năng tạo ảnh từ văn bản thông minh và mô phỏng lại thói quen của người dùng. Theo đó mang lại một trải nghiệm người dùng đầy tiện ích và hiệu quả khi tận dụng sức mạnh của trí tuệ nhân tạo.\r\n\r\n\r\n\r\nOrder ngay Samsung Galaxy S24 Ultra tại Điện thoại Giá Kho\r\nĐứng trước những ưu điểm mới mẻ của Samsung Galaxy S24 Ultra thì mức giá sản phẩm bao nhiêu? hiện đang là đề tài nóng của rất nhiều tín đồ Samsung. Một số nguồn tin cho rằng chiếc điện thoại thông minh này có nhiều nâng cấp đáng kể về cấu hình, bao gồm CPU, RAM, ROM, camera và tính năng AI độc đáo. Do đó, giá khởi điểm của S24 Ultra được dự đoán có thể lên đến 35.6 triệu đồng.\r\n\r\nTuy nhiên, một số nguồn khác cho rằng Samsung có thể duy trì giá bán ở mức 1.199 USD (tương đương khoảng 29 triệu đồng) để thu hút người dùng. Sự khác biệt giá này có thể phản ánh các chiến lược tiếp thị và cạnh tranh của Samsung trong thị trường smartphone đầy cạnh tranh. Vì vậy, đừng quên liên hệ Điện Thoại Giá Kho để nhận thông tin chính thức được công bố từ Samsung sớm nhất cũng như biết chính xác về giá bán của Galaxy S24 Ultra.\r\n\r\nVới những thông tin rò rỉ hấp dẫn về tính năng mới trên Galaxy S24 Ultra ở trên, dự kiến các Samfans sẽ trải nghiệm một “siêu phẩm” thực sự từ Samsung. Hãy theo dõi trang Tin Công Nghệ thuộc Điện Thoại Giá Kho để cập nhật mọi thông tin mới nhất về sản phẩm ngay hôm nay nhé!', 0, NULL, '2025-01-11 08:07:52'),
(2, 'OP001', 'Điện Thoại OPPO Find X8', 'img/san_pham/1cuY0JKUoxqGaYZm06R1dutyffqNWzgkgNj7Dx0w.jpg', 98, 5500000.000, 5, 'Khi nào OPPO Find X8 Ultra ra mắt? Giá bao nhiêu?\r\nHiện tại, chúng ta vẫn chưa có ngày ra mắt chính xác của OPPO Find X8 Ultra nhưng theo các rò rỉ xuất hiện thời gian qua, điện thoại này sẽ xuất hiện vào quý 1 năm sau, tức từ tháng 1 đến tháng 3.\r\n\r\nVề giá bán, sẽ không ngạc nhiên khi OPPO Find X8 Ultra sẽ đắt đỏ hơn Find X7 Ultra vì hầu hết các flagship dùng chip Snapdragon 8 Elite đều tăng giá. Để nhớ lại, OPPO Find X7 Ultra đã được giới thiệu với giá khởi điểm là 5,999 Nhân dân tệ (khoảng 20.98 triệu đồng) cho cấu hình 12GB + 256GB.\r\n\r\nOPPO Find X8 Ultra có tính năng gì thú vị?\r\nDưới đây là những gì chúng ta biết cho đến nay về mẫu flagship tiếp theo của OPPO.\r\n\r\nThiết kế cao cấp và sang trọng\r\nCách đây không lâu, hình ảnh mặt trước của OPPO Find X8 Ultra đã được chia sẻ trên mạng. Bức ảnh cho thấy điện thoại thông minh này sẽ tiếp tục sử dụng màn hình đục lỗ hiện đại ở mặt trước, đi kèm màn có kính cong bốn cạnh với độ sâu bằng nhau. Ngoài ra, viền bezel các cạnh của máy cũng cực kỳ mỏng, mang tới trải nghiệm xem không viền cực kỳ hút mắt.\r\n\r\nĐáng tiếc là hiện chúng ta chưa có hình ảnh mặt sau của Find X8 Ultra nhưng sẽ không ngạc nhiên khi nó trông giống với bộ đôi Find X8 và Find X8 Pro mới ra mắt gần đây. Theo đó, mẫu flagship tiếp theo của OPPO được kỳ vọng có mặt lưng bo cong nhẹ về hai cạnh, kết hợp với 4 góc máy được bo tròn khá mạnh để mang đến cảm giác cầm nắm thoải mái hơn cho người dùng.\r\n\r\nThiết kế mặt trước OPPO Find X8 Ultra \r\nThiết kế mặt trước OPPO Find X8 Ultra \r\nĐiểm nhấn của OPPO Find X8 Ultra còn đến từ cụm camera sau hình tròn khá lớn và được thiết kế hầm hố, giúp thu hút được sự chú ý của người dùng ngay từ cái nhìn đầu tiên. Máy dự kiến sẽ có 2 phiên bản mặt lưng để người dùng lựa chọn là kính và da. Cụm camera sau của thiết bị cũng nhiều khả năng có phần viền răng cưa xung quanh tạo cảm giác như một chiếc máy ảnh cơ thực thụ.\r\n\r\nCuối cùng nhưng không kém phần quan trọng, OPPO Find X8 Ultra nhiều khả năng sẽ có chất lượng hoàn thiện tuyệt vời với khung kim loại cứng cáp và hỗ trợ khả năng kháng nước, chống bụi chuẩn IP68 + IP69.\r\n\r\nMàn hình chất lượng cao\r\nCách đây không lâu, leaker nổi tiếng Digital Chat Station tiết lộ thông tin cho biết nguyên mẫu Find X8 Ultra mà OPPO đang phát triển sẽ có màn hình cong bốn cạnh siêu nhỏ. Đó là tấm nền OLED BOE X2 LTPO với kích thước 6.82 inch, hỗ trợ độ phân giải Quad-HD+ và tần số quét 1-120Hz mượt mà.\r\n\r\nThông tin màn hình và camera OPPO Find X8 Ultra\r\nThông tin màn hình và camera OPPO Find X8 Ultra\r\nGiới phân tích cho rằng đó có thể là màn hình mà chúng ta đã thấy trên flagship OnePlus 13 vừa ra mắt cách đây không lâu. Do đó, nhiều khả năng nó sẽ có độ sáng tối đa 4,500 nits và được tích hợp cảm biến vân tay siêu âm bên dưới. OPPO Find X8 Ultra sẽ có chất lượng hiển thị tuyệt vời với câu chữ, hình ảnh được tái tạo với độ chi tiết, sắc nét cao, màu sắc rực rỡ, tươi sáng, độ tương phản tuyệt vời và cho khả năng hiển thị ngoài trời nắng hay dưới nguồn sáng mạnh tốt.\r\n\r\nHiệu mạnh mẽ mẽ với chip Snapdragon 8 Elite\r\nKhông giống như bộ đôi Find X8 và Find X8 Pro dùng chip MediaTek Dimensity 9400, Find X8 Ultra được báo cáo sẽ dùng chip Snapdragon 8 Elite mới, mạnh mẽ nhất của Qualcomm ở thời điểm hiện tại. Con chip này được sản xuất trên tiến trình 3nm tiên tiến, có CPU Oryon với cấu trúc tám lõi tùy chỉnh bao gồm 2 lõi chính có tốc độ 4.32 GHz và 6 lõi hiệu suất hoạt động ở tốc độ lên đến 3.53 GHz. Kết hợp với bộ nhớ đệm L2 24MB hàng đầu trong ngành và hỗ trợ RAM LPDDR5X 5300MHz.\r\n\r\nOPPO Find X8 Ultra sẽ dùng chip Snapdragon 8 Elite mạnh mẽ\r\nOPPO Find X8 Ultra sẽ dùng chip Snapdragon 8 Elite mạnh mẽ\r\nQualcomm cho biết Snapdragon 8 Elite có hiệu suất CPU tăng 45% và được cải thiện hiệu suất năng lượng lên 44% so với thế hệ trước. Về mặt đồ họa, Qualcomm đã ra mắt GPU Adreno cải tiến, mang lại hiệu suất tăng 40% và tiết kiệm điện năng cùng hiệu suất dò tia được cải thiện.\r\n\r\nVề bộ nhớ, OPPO Find X8 Ultra nhiều khả năng sẽ mang đến cho người dùng ít nhất 12GB RAM và 256GB ROM mang tới không gian lưu trữ rộng rãi để người dùng thoải mái tải ứng dụng, phim, game yêu thích về máy để giải trí.\r\n\r\nChạy ColorOS 15 với nhiều tính năng thú vị\r\nGần như chắc chắn OPPO sẽ cài đặt sẵn giao diện người dùng ColorOS 15 dựa trên hệ điều hành Android 15 cho Find X8 Ultra khi ra khỏi hộp. Điện thoại nhiều khả năng cũng nhận được 5 năm cập nhật phần mềm như bộ đôi Find X8 và Find X8 Pro.\r\n\r\nĐược biết, ColorOS 15 mang đến trải nghiệm mượt mà và liền mạch trong từng chi tiết nhỏ nhất. Hiệu ứng chuyển cảnh song song (Parallel Animation) đảm bảo mọi chuyển động đều mượt mà, trong khi loạt công cụ tiện ích cho phép người dùng tương tác thuận tiện và hiệu quả tức thì như: Thanh bên thông minh, Mini Window, Chia đôi màn hình, Screenshot bằng 3 ngón tay,... Find X8 Series còn cho phép cá nhân hóa trải nghiệm với hình nền làm mờ hậu cảnh và đa dạng hình nền có sẵn để lựa chọn. \r\n\r\nHệ sinh thái không còn là rào cản với tính năng Chia sẻ với iPhone, người dùng có thể chuyển đổi tập tin và hình ảnh giữa Android và iPhone chỉ với một thao tác đơn giản, phá bỏ mọi rào cản giữa các nền tảng. \r\n\r\nOPPO ColorOS 15 mang đến nhiều tính năng thú vị\r\nOPPO ColorOS 15 mang đến nhiều tính năng thú vị\r\nSáng tạo và làm việc hiệu quả hơn với: Tăng cường rõ nét AI, Làm nét khuôn mặt AI, Chống loá AI,… Bên cạnh đó Find X8 Series cung cấp bộ công cụ làm việc toàn diện gồm: Soạn thảo AI, Chuyển âm AI, Trợ lý ghi chú AI, Định dạng văn bản, Tóm tắt văn bản, Dịch thuật văn bản, Vẽ biểu đồ… giúp tự động điều chỉnh, tóm tắt và tối ưu hóa nội dung, từ việc trích xuất biểu đồ đến phiên dịch tài liệu. \r\n\r\nHợp tác sâu với Google, Find X8 Series trang bị những tính năng độc đáo như Khoanh để tìm kiếm và Gemini App, cho phép người dùng tương tác với thiết bị một cách thông minh và hiệu quả hơn, giúp thiết bị trở thành trợ lý thông minh, nâng tầm chất lượng cuộc sống hằng ngày.\r\n\r\nHệ thống 4 camera sau cao cấp\r\nVề khả năng nhiếp ảnh, leaker nổi tiếng Digital Chat Station gần đây cho biết OPPO Find X8 Ultra sẽ là một siêu phẩm camera thực thụ, thậm chí còn vượt trội hơn cả người tiền nhiệm Find X7 Ultra.\r\n\r\nCụ thể, điện thoại này sẽ có hệ thống 4 camera sau, bao gồm cảm biến chính Sony LYT 900 50MP với kích thước 1 inch, đi kèm máy ảnh góc siêu rộng Sony IMX 882 50MP với kích thước 1/1.95 inch, ống kính tele Sony LYT 701 50MP với kích thước 1/1.56 inch và tiêu cự tương đương 75 mm, và một ống kính Sony IMX 882 50MP khác với kích thước 1/1.95 inch và tiêu cự tương đương 150 mm.\r\n\r\nOPPO Find X8 Ultra sẽ có hệ thống 4 camera cao cấp\r\nOPPO Find X8 Ultra sẽ có hệ thống 4 camera cao cấp\r\nThiết lập camera này dự kiến sẽ mang lại những cải tiến về chất lượng hình ảnh, đặc biệt là với cảm biến chính và góc siêu rộng. Find X8 Ultra cũng được đồn đoán là sẽ hoạt động tốt với ống kính tele 3x và 7x.', 0, NULL, '2025-01-11 08:08:00'),
(3, 'IP001', 'Điện Thoại Iphone 16', 'img/san_pham/kH77CMPWjfozlB32cVeaHUk138lyJT24lI7ENaV1.jpg', 100, 2500000.000, 1, 'CUPERTINO, CALIFORNIA Hôm nay, Apple công bố iPhone 16 và iPhone 16 Plus, giới thiệu chip A18 tùy chỉnh và những khả năng đáng kinh ngạc mới của camera, nâng tầm những gì iPhone có thể làm. Đồng thời giới thiệu Điều Khiển Camera trên dòng iPhone 16, đem đến những cách mới để tương tác với hệ thống camera tiên tiến, giúp người dùng ghi lại những kỷ niệm một cách dễ dàng và nhanh chóng. Hệ thống camera mạnh mẽ với một camera Fusion 48MP cùng tùy chọn Telephoto 2x, đem đến cho người dùng camera hai trong một, trong khi camera Ultra Wide có khả năng chụp ảnh macro. Phong Cách Nhiếp Ảnh thế hệ tiếp theo giúp người dùng có thể cá nhân hóa hình ảnh, chụp ảnh và quay video không gian, cho phép người dùng trải nghiệm lại những kỷ niệm quý giá trong cuộc đời với chiều sâu ấn tượng trên Apple Vision Pro. Chip A18 mới mang đến một bước nhảy vọt về hiệu năng và khả năng tiết kiệm điện, cho phép người dùng chơi các game AAA có đòi hỏi cao nhất, cũng như đem đến thời lượng pin tăng vượt trội. iPhone 16 và iPhone 16 Plus cũng được thiết kế cho Apple Intelligence7 - hệ thống trí tuệ cá nhân, dễ sử dụng với khả năng hiểu được bối cảnh cá nhân để mang đến thông tin hữu ích và phù hợp, mà vẫn bảo vệ quyền riêng tư của người dùng.\r\niPhone 16 và iPhone 16 Plus màu xanh lưu ly được hiển thị chồng lên nhau.\r\nVới kích thước màn hình 6,1 inch và 6,7 inch, iPhone 16 và iPhone 16 Plus sở hữu một thiết kế tuyệt đẹp, bền bỉ và có thời lượng pin tăng vượt trội.\r\nCả hai phiên bản sẽ có năm màu nổi bật: đen, trắng, hồng, xanh mòng két và xanh lưu ly.\r\nKaiann Drance, Phó Chủ tịch Tiếp thị Sản phẩm iPhone Toàn cầu của Apple chia sẻ: “iPhone 16 và iPhone 16 Plus mang đến những bước tiến vượt trội, tạo ra sự khác biệt thực sự trong cuộc sống hàng ngày của người dùng. Với những cách mới để ghi lại kỷ niệm sử dụng Điều Khiển Camera; camera Fusion 48MP mới với camera hai trong một chất lượng quang học; thời lượng pin tăng vượt trội; và hiệu năng mạnh mẽ, tiết kiệm điện nhờ chip A18, đây là thời điểm hoàn hảo để khách hàng nâng cấp hoặc chuyển sang dùng iPhone.”\r\nCác thiết bị iPhone 16 với các màu đen, trắng, hồng, xanh mòng két và xanh lưu ly.\r\niPhone 16 và iPhone 16 Plus sẽ có năm màu nổi bật: đen, trắng, hồng, xanh mòng két và xanh lưu ly.\r\nMột Thiết Kế Mới Tuyệt Đẹp Với Độ Bền Hàng Đầu Trong Ngành\r\niPhone 16 và iPhone 16 Plus tuyệt đẹp và được chế tạo để bền bỉ dài lâu. iPhone giữ giá trị lâu hơn bất kỳ điện thoại thông minh nào khác nhờ độ bền hàng đầu trong ngành với mặt sau bằng kính bền chắc, thiết kế chống nước và bụi, phần mềm thường xuyên được cập nhật cùng Ceramic Shield thế hệ mới nhất có thành phần vật liệu tiên tiến cứng hơn 50% so với thế hệ đầu tiên và bền hơn gấp 2 lần so với kính trên tất cả các mẫu điện thoại thông minh khác.1 Không gian bên trong iPhone 16 và iPhone 16 Plus cũng đã được thiết kế lại để tạo không gian cho pin lớn hơn và tăng khả năng tản nhiệt, đồng thời giúp việc sửa chữa pin trở nên dễ dàng hơn. Với thiết kế bên trong mới và khả năng quản lý năng lượng tiên tiến của iOS 18, pin được tối ưu để giúp thời lượng pin tăng vượt trội. Với kích thước 6,1 inch và 6,7 inch, màn hình Super Retina XDR cùng công nghệ OLED và Dynamic Island mang đến một trải nghiệm xem ấn tượng.2\r\nTạm dừng phát lại video: Ceramic Shield trên iPhone 16 và iPhone 16 Plus\r\nCeramic Shield thế hệ mới nhất sở hữu thành phần vật liệu tiên tiến bền chắc gấp 2 lần so với kính trên tất cả các mẫu điện thoại thông minh khác.\r\nNút Tác Vụ trên iPhone 16 và iPhone 16 Plus cho phép người dùng dễ dàng truy cập nhiều chức năng khác nhau chỉ bằng một lần nhấn. Người dùng có thể mở nhanh máy ảnh, đèn pin hoặc điều khiển; chuyển đổi giữa chế độ Chuông và Im Lặng; nhận dạng nhạc bằng Shazam; kích hoạt Ghi Âm, Chế Độ Tập Trung, Dịch và các tính năng trợ năng như Kính Lúp; hoặc sử dụng Phím Tắt để có thêm nhiều tùy chọn hơn. Nút Tác Vụ cũng có thể truy cập các chức năng trong ứng dụng, chẳng hạn như giúp người dùng mở và khóa xe với FordPass.3\r\nTạm dừng phát lại video: Nút Tác Vụ trên iPhone 16 và iPhone 16 Plus\r\nNút Tác Vụ giúp nhanh chóng truy cập các tính năng hữu ích. Nút hiện mặc định để chuyển đổi giữa chế độ Chuông và Im Lặng, người dùng cũng có thể tuỳ chọn từ một danh sách các hành động để thêm phần thuận tiện và linh hoạt.\r\nGiới thiệu Điều Khiển Camera\r\nĐiều Khiển Camera là kết quả của sự kết hợp chặt chẽ giữa phần cứng và phần mềm, giúp nâng cao trải nghiệm camera trên dòng sản phẩm iPhone 16. Được trang bị công nghệ tiên tiến, với một công tắc chạm tạo nên trải nghiệm bấm, cảm biến lực có độ chính xác cao hỗ trợ những cử chỉ nhấn nhẹ và cảm biến điện dung dành cho tương tác cảm ứng. Điều Khiển Camera có thể mở máy ảnh, chụp ảnh và bắt đầu quay video một cách nhanh chóng để người dùng không bỏ lỡ bất kỳ khoảnh khắc nào. Giao diện camera mới giúp người dùng căn chỉnh khung hình và điều chỉnh các tùy chọn điều khiển khác, chẳng hạn như thu phóng, độ phơi sáng hoặc độ sâu trường ảnh, để chụp ảnh hoặc quay video tuyệt đẹp bằng cách trượt ngón tay trên Điều Khiển Camera. Ngoài ra, các nhà phát triển sẽ có thể đưa Điều Khiển Camera vào các ứng dụng của bên thứ ba như Snapchat.', 0, NULL, '2025-01-11 08:08:08'),
(4, 'IP002', 'Điện Thoại Iphone 15', 'img/san_pham/v4351vxba8ANDQiI2izkEqcJgmlwcYmcnknuHspp.jpg', 98, 799000.000, 1, 'CUPERTINO, CALIFORNIA Hôm nay, Apple đã ra mắt iPhone 15 và iPhone 15 Plus, với mặt lưng bằng kính pha màu đầu tiên trong ngành cùng bề mặt nhám tuyệt đẹp, và thiết kế cạnh viền bo tròn mới trên vỏ máy làm bằng nhôm. Cả hai dòng máy đều được trang bị Dynamic Island, và hệ thống camera tiên tiến được thiết kế nhằm giúp người dùng chụp được những bức ảnh tuyệt diệu của mọi khoảnh khắc trong cuộc sống. Camera Chính 48MP mạnh mẽ hỗ trợ chụp ảnh với độ phân giải cực kỳ cao và tuỳ chọn Telephoto 2x mới mang đến cho người dùng ba mức thu phóng quang học - như được trang bị camera thứ ba. Dòng sản phẩm iPhone 15 cũng ra mắt chế độ chân dung thế hệ mới, giúp chụp ảnh chân dung dễ dàng hơn với chi tiết rõ nét và khả năng chụp ảnh trong điều kiện ánh sáng yếu. Với chip A16 Bionic mang lại hiệu năng mạnh mẽ đã được chứng minh, cổng kết nối USB‑C, tính năng Tìm Chính Xác dành cho Tìm Bạn, cùng các tính năng về độ bền hàng đầu trong ngành, iPhone 15 và iPhone 15 Plus thể hiện một bước nhảy vọt lớn.\r\niPhone 15 và iPhone 15 Plus sẽ có năm màu mới tuyệt đẹp: hồng, vàng, xanh lá, xanh dương và đen.\r\n“iPhone 15 và iPhone 15 Plus thể hiện một bước nhảy vọt lớn với những cải tiến tuyệt vời về camera mang đến cảm hứng sáng tạo, Dynamic Island trực quan cùng các tính năng như Roadside Assistance thông qua vệ tinh tạo ra sự khác biệt lớn trong cuộc sống của người dùng,” Kaiann Drance, Phó Chủ tịch bộ phận Tiếp thị Sản phẩm iPhone Toàn cầu của Apple chia sẻ. “Trong năm nay, chúng tôi cũng đưa sức mạnh của công nghệ nhiếp ảnh điện toán lên một tầm cao mới với camera Chính 48MP có chế độ mặc định 24MP mới cho ra những tấm ảnh với độ phân giải cực kỳ cao, một tuỳ chọn Telephoto 2x mới, và những chế độ chụp ảnh chân dung thế hệ mới.\"\r\nDòng sản phẩm iPhone 15 có các màu sắc mới: đen, xanh dương, xanh lá, vàng và hồng.\r\niPhone 15 và iPhone 15 Plus sẽ có năm màu mới tuyệt đẹp: đen, xanh dương, xanh lá, vàng và hồng.\r\nMột Thiết Kế Đẹp và Bền Bỉ với Màn Hình Được Nâng Cấp\r\nSở hữu kích thước màn hình 6.1-inch và 6.7-inch,1 iPhone 15 và iPhone 15 Plus được trang bị Dynamic Island, một cách thức sáng tạo nhằm tương tác với các cảnh báo quan trọng và Hoạt Động Trực Tiếp. Trải nghiệm tinh tế sẽ mở rộng và thích ứng một cách linh hoạt để người dùng có thể xem hướng đi tiếp theo trong Bản Đồ, dễ dàng điều khiển âm nhạc, và khi tích hợp với ứng dụng của bên thứ ba, người dùng sẽ nhận được thông tin cập nhật theo thời gian thực về hoạt động giao đồ ăn, chia sẻ chuyến đi, tỷ số thể thao, kế hoạch du lịch, và hơn thế nữa. Màn hình Super Retina XDR rất lý tưởng để xem nội dung, và chơi game. Giờ đây độ sáng HDR cao nhất đã đạt đến 1600 nit, nhờ đó ảnh và video HDR sẽ rõ nét hơn bao giờ hết. Và khi trời nhiều nắng, độ sáng cao nhất ngoài trời sẽ đạt đến 2000 nit — sáng gấp đôi so với thế hệ trước.\r\nTạm dừng phát lại video: Dynamic Island\r\nCả hai mẫu máy này đều được trang bị Dynamic Island, giúp mở rộng và thích ứng một cách linh hoạt theo các cảnh báo và Hoạt Động Trực Tiếp của người dùng, mang đến một trải nghiệm trực quan đầy kỳ diệu.\r\nCả hai mẫu máy này đều có thiết kế mới tinh tế và bền bỉ với thời gian. Lần đầu tiên trên điện thoại thông minh, kính mặt lưng được pha màu, tạo nên năm màu sắc tuyệt đẹp. Kính mặt lưng được gia cố độ bền bằng quy trình trao đổi ion kép tối ưu trước khi được đánh bóng bằng các hạt tinh thể nano và được khắc axit để tạo nên lớp kính mờ sang trọng. Thiết kế cạnh viền bo tròn mới trên vỏ máy làm từ nhôm chuẩn hàng không vũ trụ mang lại cảm giác dễ chịu khi cầm trên tay, và mặt kính Ceramic Shield cứng hơn bất kỳ loại kính trên điện thoại thông minh nào khác. Với thiết kế chống nước và chống bụi2 cùng các tính năng về độ bền hàng đầu trong ngành, iPhone vẫn giữ được giá trị lâu dài hơn bất kỳ dòng điện thoại thông minh nào khác. Thêm vào đó, thiết kế bên trong mang lại hiệu năng bền bỉ mạnh mẽ, đồng thời giúp sửa chữa dễ dàng và tiết kiệm chi phí hơn.\r\nHình ảnh mặt trước và mặt lưng của iPhone 15 màu xanh dương.\r\niPhone 15 và iPhone 15 Plus giới thiệu thiết kế cạnh viền mới cùng mặt lưng bền bỉ làm bằng kính pha màu.\r\nCamera Mạnh Mẽ giúp Ghi Lại Mọi Khoảnh Khắc với Độ Phân Giải Cực Kỳ Cao\r\nHệ thống camera tiên tiến trên iPhone 15 và iPhone 15 Plus giúp người dùng ghi lại mọi khoảnh khắc đời thường cùng những kỷ niệm đáng nhớ. Camera Chính 48MP chụp ảnh và quay video sắc nét, đồng thời ghi lại những chi tiết nhỏ bằng cảm biến quad-pixel và Focus Pixels 100% giúp tự động lấy nét nhanh. Sử dụng sức mạnh của công nghệ nhiếp ảnh điện toán, camera Chính mang đến cho người dùng độ phân giải cực kỳ cao 24MP ở chế độ mặc định, tạo ra chất lượng hình ảnh ấn tượng ở kích thước tệp tiện lợi, phù hợp cho việc lưu trữ và chia sẻ. Bằng cách tích hợp phần cứng và phần mềm một cách thông minh, tùy chọn Telephoto 2x bổ sung mang đến cho người dùng ba mức thu phóng với chất lượng quang học — 0,5x, 1x, 2x — lần đầu tiên có trên hệ thống camera kép của iPhone.\r\nẢnh chụp quang cảnh đồi núi bằng iPhone 15.\r\nẢnh chụp một người đeo khăn quàng cổ màu vàng trải dài khắp khung hình bằng iPhone 15\r\nẢnh chụp một người đang mỉm cười bằng iPhone 15.\r\nẢnh chụp chân dung chú chó đang ngồi và giơ hai chân lên bằng iPhone 15.\r\nẢnh chụp chân dung một người đang tạo dáng đặt bàn tay dưới cằm bằng iPhone 15.\r\nẢnh chụp chân dung một người mặc áo màu xanh lá sáng đang đứng trước nền màu hồng và vàng bằng iPhone 15.\r\nẢnh chụp một người đang nằm ở chế độ Ban đêm bằng iPhone 15.\r\nẢnh chụp quang cảnh đồi núi bằng iPhone 15.', 0, NULL, '2024-12-31 01:34:26'),
(5, 'HW001', 'Điện Thoại Huawei', 'img/san_pham/ZiyWrrK3SgcoBy94uTnupapa8F2C1V7i9OgYZS3p.jpg', 133, 5900000.000, 3, 'Huawei vừa chính thức công bố mẫu điện thoại Mate XT Ultimate Design, đánh dấu một bước đột phá trong công nghệ với thiết kế màn hình gập ba đầu tiên trên thế giới. Điều này không chỉ thể hiện tham vọng của Huawei trong việc dẫn đầu xu hướng công nghệ mà còn mở ra kỷ nguyên mới cho các thiết bị di động thông minh với khả năng biến đổi linh hoạt để phục vụ đa dạng nhu cầu người dùng.\r\n\r\nThiết kế màn hình đột phá\r\nMate XT Ultimate Design gây ấn tượng mạnh mẽ với thiết kế màn hình như một \"tắc kè hoa\" có khả năng chuyển đổi linh hoạt theo các chế độ khác nhau. Khi được gập lại, đây là một chiếc điện thoại thông minh nhỏ gọn với kích thước 6.4 inch, độ phân giải Full-HD+, rất tiện lợi cho việc cầm nắm và sử dụng hàng ngày. Tuy nhiên, khi mở một phần, máy biến thành một thiết bị có màn hình 7.9 inch với độ phân giải 2K, đáp ứng tốt các nhu cầu giải trí như xem phim, chơi game hoặc làm việc cơ bản.\r\n\r\nSự \"biến hình\" chưa dừng lại ở đó, khi mở hoàn toàn, người dùng sẽ trải nghiệm màn hình rộng 10.2 inch với độ phân giải lên đến 3K, tương đương với một máy tính bảng cao cấp, lý tưởng cho các tác vụ công việc, sáng tạo nội dung hoặc thậm chí thay thế cho một laptop trong một số trường hợp.\r\n\r\n \r\n\r\nHuawei Mate X\r\n\r\nHuawei ra mắt Mate XT Ultimate Design\r\nĐộ bền và cải tiến công nghệ gập\r\nĐiểm đáng chú ý của Mate XT Ultimate Design chính là sự mỏng nhẹ đáng kinh ngạc khi ở trạng thái mở hoàn toàn, chỉ dày 3.6mm. Dù có thiết kế màn hình gập phức tạp, nhưng Huawei đã thành công trong việc giữ cho thiết bị có độ mỏng ngang ngửa các mẫu điện thoại thông thường. So với Galaxy Z Fold6, Mate XT chỉ dày hơn một chút khi gập lại, đạt độ dày 12.8mm so với 12.1mm của đối thủ.\r\n\r\nHuawei còn khẳng định rằng cơ chế gập ba của Mate XT Ultimate Design có khả năng chống uốn cong tốt hơn tới 25% so với các mẫu điện thoại gập hiện tại. Điều này có nghĩa là thiết bị không chỉ mang tính thẩm mỹ mà còn được thiết kế để chịu đựng tốt hơn những áp lực trong quá trình sử dụng hàng ngày, từ việc mở, đóng liên tục cho đến việc đối phó với các va chạm.\r\n\r\nHuawei Mate X\r\n\r\nĐiện thoại có thân máy mỏng chỉ 3.6mm\r\nHiệu năng và camera tiên tiến\r\nDù chưa công bố chính thức về cấu hình chi tiết, nhiều tin đồn cho rằng Mate XT Ultimate Design sẽ được trang bị vi xử lý Kirin 9000, một trong những chip mạnh mẽ nhất mà Huawei từng phát triển. Đây cũng là vi xử lý từng xuất hiện trên dòng sản phẩm cao cấp Pura 70, mang lại hiệu suất đáng nể cho các tác vụ đa nhiệm và chơi game nặng.\r\n\r\nHệ thống camera của Mate XT Ultimate Design cũng không kém phần ấn tượng. Máy được trang bị ba camera sau, với cảm biến chính 50MP có khả năng thay đổi khẩu độ từ f/1.4 đến f/4.0, giúp máy thích nghi tốt với các điều kiện ánh sáng khác nhau. Kết hợp với ống kính góc siêu rộng 12MP và ống kính tiềm vọng 12MP, Mate XT hứa hẹn mang lại trải nghiệm chụp ảnh và quay video chuyên nghiệp. Ở mặt trước, Huawei trang bị camera selfie 8MP, đáp ứng tốt nhu cầu chụp ảnh tự sướng và video call với chất lượng rõ nét.\r\n\r\nPin và khả năng sạc vượt trội\r\nMặc dù có thiết kế gập ba phức tạp, Mate XT Ultimate Design vẫn được trang bị một viên pin dung lượng lớn lên đến 5,600mAh. Đây là loại pin silicon carbon, được Huawei khẳng định là mỏng nhất thế giới hiện nay, giúp giữ cho điện thoại vừa nhẹ vừa mỏng nhưng vẫn đảm bảo thời lượng pin dài. Điện thoại hỗ trợ sạc nhanh 66W qua cổng dây và sạc không dây lên đến 50W, giúp người dùng nhanh chóng nạp đầy pin và tiếp tục sử dụng mà không phải chờ đợi lâu.\r\n\r\nPhụ kiện bàn phím cảm ứng gập\r\nMột điểm độc đáo khác mà Huawei giới thiệu cùng với Mate XT Ultimate Design là phụ kiện bàn phím cảm ứng có thể gập lại. Phụ kiện này có khả năng biến chiếc điện thoại thành một thiết bị thay thế máy tính xách tay, đặc biệt hữu ích cho những ai cần một thiết bị vừa di động vừa mạnh mẽ để làm việc. Bàn phím này kết nối liền mạch với Mate XT, cung cấp một giao diện giống như máy tính để bàn, từ đó cải thiện đáng kể hiệu suất làm việc của người dùng di động.\r\n\r\n \r\n\r\nHuawei Mate X\r\n\r\nHuawei Mate XT cho trải nghiệm sử dụng thú vị\r\nGiá bán và phiên bản\r\nHuawei Mate XT Ultimate Design sẽ có hai lựa chọn màu sắc là Đen và Đỏ, mang lại vẻ ngoài sang trọng và nổi bật. Phiên bản tiêu chuẩn với 16GB RAM và 256GB bộ nhớ trong có mức giá 19,999 nhân dân tệ (khoảng 69 triệu đồng). Phiên bản cao cấp hơn với 16GB RAM và 512GB bộ nhớ trong có giá 21,999 nhân dân tệ (khoảng 76.24 triệu đồng), trong khi phiên bản đỉnh cao nhất với dung lượng 1TB có giá 23,999 nhân dân tệ (khoảng 83.17 triệu đồng).\r\n\r\nVới Mate XT Ultimate Design, Huawei không chỉ mang đến một thiết bị công nghệ cao mà còn là một biểu tượng cho sự sáng tạo và tiên phong trong lĩnh vực điện thoại thông minh.', 0, NULL, '2025-01-11 08:08:20'),
(6, 'XM001', 'Điện Thoại Xiaomi', 'img/san_pham/gc8Wt73Zl1UDx1mERrOz3LmGJFcdXkpMAgN8OeW6.jpg', 200, 2900000.000, 6, 'Xiaomi khởi nghiệp từ 2010 bằng việc phát triển phần mềm\r\nNgày 06/04/2010, công ty Xiaomi được thành lập với 8 thành viên, và CEO là ông Lei Jun. Ngay từ những ngày đầu tiên, hãng chỉ tập trung phát triển bản ROM chạy trên Android - chính là ROM MIUI ngày nay.\r\n\r\n\r\n \r\n\r\nBản ROM này có giao diện đơn giản, dễ sử dụng, các icon được làm màu mè, bắt mắt, danh sách các ứng dụng được đẩy ra hết ngoài màn hình chính. Nhiều người cho rằng giao diện của nó có phần hao hao Apple. Tính đến tháng 02/2015, Xiaomi sở hữu hơn 100 triệu người dùng, đánh dấu một trong những thành công lớn của Xiaomi.\r\n\r\n \r\n\r\nĐiện thoại Xiaomi ra đời từ đây\r\nThừa thắng xông lên, Xiaomi nhảy sang cả phát triển phần cứng, cụ thể là điện thoại Xiaomi. Năm 2011 Xiaomi ra mắt mẫu điện thoại Xiaomi Mi 1 đầu tiên, cháy hàng chỉ trong vòng 34 giờ. Mi 1 sở hữu vi xử lý Qualcomm Snapdragon S3, RAM 1GB, màn hình 4 inch (độ phân giải 854 x 480 pixel), camera 8MP/2MP và pin dung lượng 1,930 mAh. Với cấu hình này, Mi 1 đã vượt mặt Samsung Galaxy S2 với mức giá hấp dẫn hơn cả.\r\n\r\n Biểu đồ thể hiện sự vươn lên mạnh mẽ của số lượng smartphone Xiaomi bán ra (đơn vị tính: triệu chiếc)\r\n\r\nSau Xiaomi Mi 1 thì mãi đến năm 2013 Xiaomi mới tung ra tiếp tục 2 sản phẩm Xiaomi MI 3 và Redmi Note đầu năm 2014. Cùng năm, Xiaomi nhảy sang thị trường ngoài Trung Quốc là Singapore, Philippines, Malaysia và hiện tại là Ấn độ.\r\n\r\n \r\n\r\nChiến lược kinh doanh của Xiaomi\r\nĐiện thoại Xiaomi luôn có ngoại hình ưa nhìn, và phần cứng tốt, giá lại rẻ. Mẫu mới vừa tung ra là cháy hàng ngay. Xiaomi không để tồn kho và đó là lý do khiến nguồn tiền của hãng được ổn định. Xiaomi cũng khai thác triệt để sức mạnh internet, mạng xã hội, quảng cáo nhân rộng nhanh chóng. Nhiều hãng điện thoại khác đã bắt chước mô hình của Xiaomi, chẳng hạn như OnePlus Huawei, ZTE, và thậm chí là Lenovo.\r\n\r\n \r\n\r\n \r\n\r\nRedmi Note được bán hết sạch trong vòng 6 giây trên thị trường Ấn Độ\r\n\r\n \r\n\r\n \r\n\r\nXiaomi ở thời điểm hiện tại\r\nNhãn hiệu điện thoại Xiaomi tuy chỉ được biết đến vài năm qua nhưng doanh số bán hàng của hãng tăng 30% trong năm và chỉ trong nửa đầu năm 2015, Xiaomi đã bán ra được 34,7 triệu smartphone. Một số mẫu điện thoại Xiaomi đáng chú ý như Redmi Note 2 và Mi 4i với cấu hình cao cấp nhưng mức giá rất bình dân. Các sản phẩm tiếp theo như Mi Note Pro và Mi 4 cũng đã có những thành công tương tự.\r\n\r\nMi Note Pro cao cấp với cấu hình đỉnh, màn hình 2K, thiết kế đẹp, giá tốt\r\n\r\n \r\n\r\nNgoài ra, Xiaomi còn đang nhắm đến mảng Wearable và nhà thông minh với việc sản xuất TV, pin dự phòng, tai nghe và cả máy lọc không khí. Năm 2013, cựu thành viên phát triển Android của Google đã gia nhập Xiaomi với vị trí phó chủ tịch điều hành mảng sản phẩm. Như hổ thêm cánh, Xiaomi mở rộng thị trường và các hệ thống cửa hàng đã được xuất hiện tại Anh, Mỹ, Đức và Pháp.\r\n\r\nXiaomi đã xác nhận số người sử dụng MIUI đã lên tới hơn 150 triệu người \r\n\r\n \r\n\r\nHãng điện thoại Xiaomi nổi lên như một hiện tượng. Nhiều người cho rằng hãng là \"Apple của Trung Quốc\". Xiaomi có chiến lược kinh doanh độc đáo, các sản phẩm điện thoại Xiaomi của hãng có ngoại hình rất đẹp, phần cứng mạnh mẽ cùng mức giá phải chăng. Xiaomi hiện tại không quan tâm đến lợi nhuận trước mắt. Hãng đang mong muốn xây dựng hệ sinh thái riêng cho mình. Liệu Xiaomi có thành công với con đường mình đã chọn? Chúng ta hãy để thời gian trả lời câu hỏi này.', 0, NULL, '2025-01-11 08:08:28'),
(7, 'VV001', 'Điện Thoai ViVo', 'img/san_pham/bWj0olFsY9x4pdNTDBeWQ40YwFSqWoa2z7dmTNAL.jpg', 200, 2990000.000, 4, 'Vivo được xem là một trong những sản phẩm nổi bật trên thị trường smartphone đã thu hút sự chú ý của người dùng bởi những tính năng độc đáo cùng chất lượng sản phẩm bền bỉ. Ở bài viết hôm nay Alofone sẽ cùng các bạn tìm hiểu sâu về thương hiệu điện thoại Vivo để xem điện thoại của hãng này được nước nào sản xuất. \r\n\r\nNội dung bài viết\r\nGiới thiệu về thương hiệu Vivo \r\nDòng điện thoại Vivo có tốt không \r\nƯu điểm  \r\nNhược điểm \r\nCó nên mua điện thoại Vivo không \r\nHãy cùng nhau đào sâu vào thế giới công nghệ sản xuất điện thoại di động và khám phá điều gì làm nên sức hấp dẫn đặc biệt của điện thoại Vivo! \r\n\r\nGiới thiệu về thương hiệu Vivo \r\nGiới thiệu về thương hiệu Vivo \r\nVivo là một thương hiệu điện thoại di động hàng đầu có nguồn gốc từ Trung Quốc. Thành lập vào năm 2009 Duan Yongping là một doanh nhanh nổi tiếng trong lĩnh vực công nghệ, Vivo đã nhanh chóng trở thành một cái tên quen thuộc được đánh giá cao trên thị trường toàn cầu. \r\n\r\nLà một phần của tập đoàn công nghệ BBK Electronics cùng với thương hiệu nổi tiếng khác như Oppo và OnePlus. Sự quản lý chung này giúp tạo nên một hệ sinh thái đa dạng của các sản phẩm công nghệ đặc biệt là trong lĩnh vực điện thoại di động. \r\n\r\nTuy được thành lập từ năm 2009 Vivo đã trải qua một hành trình ấn tượng và đạt được vị thế cao trên thị trường smartphone. Thương hiệu này chủ yếu sản xuất các mẫu điện thoại tầm trung và cao cấp với thiết kế đẳng cấp, hiệu suất ổn định và tính năng độc đáo. \r\n\r\nĐặc biệt, Vivo ưu tiên vào công nghệ camera và chất lượng âm thanh của sản phẩm. Điều này đã tạo ra những điểm nổi bật đặc trưng đáp ứng nhu cầu ngày càng cao của người tiêu dùng về trải nghiệm sử dụng điện thoại di động. \r\n\r\nVới sự đa dạng trong dòng sản phẩm và sự cam kết nổi mới liên tục, Vivo không chỉ là thương hiệu điện thoại nổi bật của Trung Quốc mà còn là một tối tác đáng tin cậy cho người tiêu dùng toàn cầu muốn trải nghiệm công nghệ di động hàng đầu. \r\n\r\n\r\nDòng điện thoại Vivo có tốt không \r\nĐể đánh giá được giá trị của một thương hiệu lâu năm như Vivo các bạn không thể dựa trên một số dòng máy mà đưa ra nhận xét, tất cả các nhận xét điều được ở nhận định một cách khách quan nhất, bên dưới đây chúng tôi sẽ đưa ra ưu-nhược điểm để bạn có cái nhìn chuẩn xác nhất về thương hiệu này \r\n\r\nƯu điểm  \r\nƯu điểm của hãng Vivo\r\nVivo được biết là dòng máy công nghệ cao với cụm camera chất lượng cung cấp những sản phẩm có khả năng chụp ảnh và quay video ấn tượng. Nếu bạn là người yêu thích nhiếp ảnh và muốn có trải nghiệm chụp ảnh đẹp với mô hình của Vivo có thể là lựa chọn tốt. \r\n\r\nVivo không chỉ chú ý đến camera mà còn đặt nặng vào chất lượng âm thanh. Điều này làm cho các điện thoại của họ trở thành một lựa chọn phù hợp cho những người muốn trải nghiệm âm nhạc kèm hiệu năng giải trí cao. \r\n\r\nSản phẩm cũng sở hữu thiết kế hiện đại với màn hình lớn cùng tỷ lệ màn hình so với thân máy cao, tạo ra một trải nghiệm hiển thị tốt. \r\n\r\nVới sự đa dạng trong phân khúc từ các dòng máy giá rẻ, đến dòng máy cao cấp phủ sóng trên ở nhiều phân khúc người tiêu dùng đáp ứng đầy đủ các nhu cầu và túi tiền khác nhau. \r\n\r\nNhược điểm \r\nNhược điểm của hãng Vivo\r\nỞ số bộ phận người dùng có thể phản ánh về giao diện người dùng và trải nghiệm của Vivo so với một số thương hiệu khác. Ngoài ra quá trình cập nhật phần mềm của Vivo có thể diễn ra chậm hơn so với một số đối thủ.  \r\n\r\nDo sự đa dạng trong dòng sản phẩm nên đại đa số người dùng sẽ có suy nghĩ Vivo là một dòng điện thoại giá rẻ với hiệu suất cùng tính năng không quá mạnh mẽ. \r\n\r\nCó nên mua điện thoại Vivo không \r\nCó nên mua điện thoại Vivo không \r\nViệc quyết định mua điện thoại VIvo không phụ thuộc vào nhu cầu ngân sách và mong muốn cá nhân của bạn. Dưới đây là một số yếu tố bạn có thể xem xét khi đưa ra quyết định \r\n\r\nĐầu tiên, hãy dựa vào nhu cầu cụ thể của bản thân, nếu bạn chú trọng về chất lượng ảnh và video đặc biệt là các khoảnh khắc chụp ảnh trong điều kiện thiếu sáng thì Vivo là một lựa chọn xuất sắc. \r\n\r\nQuan trọng nhất Vivo cung cấp các dòng sản phẩm từ tầm trung đến cao cấp nên có nhiều lựa chọn về mức giá. Đảm bảo rằng bạn chọn một thiết bị phù hợp với ngân sách của mình. ', 0, NULL, '2025-01-11 08:08:37'),
(8, 'VV002', 'Điện Thoại Vivo V27e', 'img/san_pham/pRe5vpuVRcI6EbIRSCnl4G3gAn6KTTl1I4CybUkj.jpg', 300, 1990000.000, 4, 'Vivo được xem là một trong những sản phẩm nổi bật trên thị trường smartphone đã thu hút sự chú ý của người dùng bởi những tính năng độc đáo cùng chất lượng sản phẩm bền bỉ. Ở bài viết hôm nay Alofone sẽ cùng các bạn tìm hiểu sâu về thương hiệu điện thoại Vivo để xem điện thoại của hãng này được nước nào sản xuất. \r\n\r\nNội dung bài viết\r\nGiới thiệu về thương hiệu Vivo \r\nDòng điện thoại Vivo có tốt không \r\nƯu điểm  \r\nNhược điểm \r\nCó nên mua điện thoại Vivo không \r\nHãy cùng nhau đào sâu vào thế giới công nghệ sản xuất điện thoại di động và khám phá điều gì làm nên sức hấp dẫn đặc biệt của điện thoại Vivo! \r\n\r\nGiới thiệu về thương hiệu Vivo \r\nGiới thiệu về thương hiệu Vivo \r\nVivo là một thương hiệu điện thoại di động hàng đầu có nguồn gốc từ Trung Quốc. Thành lập vào năm 2009 Duan Yongping là một doanh nhanh nổi tiếng trong lĩnh vực công nghệ, Vivo đã nhanh chóng trở thành một cái tên quen thuộc được đánh giá cao trên thị trường toàn cầu. \r\n\r\nLà một phần của tập đoàn công nghệ BBK Electronics cùng với thương hiệu nổi tiếng khác như Oppo và OnePlus. Sự quản lý chung này giúp tạo nên một hệ sinh thái đa dạng của các sản phẩm công nghệ đặc biệt là trong lĩnh vực điện thoại di động. \r\n\r\nTuy được thành lập từ năm 2009 Vivo đã trải qua một hành trình ấn tượng và đạt được vị thế cao trên thị trường smartphone. Thương hiệu này chủ yếu sản xuất các mẫu điện thoại tầm trung và cao cấp với thiết kế đẳng cấp, hiệu suất ổn định và tính năng độc đáo. \r\n\r\nĐặc biệt, Vivo ưu tiên vào công nghệ camera và chất lượng âm thanh của sản phẩm. Điều này đã tạo ra những điểm nổi bật đặc trưng đáp ứng nhu cầu ngày càng cao của người tiêu dùng về trải nghiệm sử dụng điện thoại di động. \r\n\r\nVới sự đa dạng trong dòng sản phẩm và sự cam kết nổi mới liên tục, Vivo không chỉ là thương hiệu điện thoại nổi bật của Trung Quốc mà còn là một tối tác đáng tin cậy cho người tiêu dùng toàn cầu muốn trải nghiệm công nghệ di động hàng đầu. \r\n\r\n\r\nDòng điện thoại Vivo có tốt không \r\nĐể đánh giá được giá trị của một thương hiệu lâu năm như Vivo các bạn không thể dựa trên một số dòng máy mà đưa ra nhận xét, tất cả các nhận xét điều được ở nhận định một cách khách quan nhất, bên dưới đây chúng tôi sẽ đưa ra ưu-nhược điểm để bạn có cái nhìn chuẩn xác nhất về thương hiệu này \r\n\r\nƯu điểm  \r\nƯu điểm của hãng Vivo\r\nVivo được biết là dòng máy công nghệ cao với cụm camera chất lượng cung cấp những sản phẩm có khả năng chụp ảnh và quay video ấn tượng. Nếu bạn là người yêu thích nhiếp ảnh và muốn có trải nghiệm chụp ảnh đẹp với mô hình của Vivo có thể là lựa chọn tốt. \r\n\r\nVivo không chỉ chú ý đến camera mà còn đặt nặng vào chất lượng âm thanh. Điều này làm cho các điện thoại của họ trở thành một lựa chọn phù hợp cho những người muốn trải nghiệm âm nhạc kèm hiệu năng giải trí cao. \r\n\r\nSản phẩm cũng sở hữu thiết kế hiện đại với màn hình lớn cùng tỷ lệ màn hình so với thân máy cao, tạo ra một trải nghiệm hiển thị tốt. \r\n\r\nVới sự đa dạng trong phân khúc từ các dòng máy giá rẻ, đến dòng máy cao cấp phủ sóng trên ở nhiều phân khúc người tiêu dùng đáp ứng đầy đủ các nhu cầu và túi tiền khác nhau. \r\n\r\nNhược điểm \r\nNhược điểm của hãng Vivo\r\nỞ số bộ phận người dùng có thể phản ánh về giao diện người dùng và trải nghiệm của Vivo so với một số thương hiệu khác. Ngoài ra quá trình cập nhật phần mềm của Vivo có thể diễn ra chậm hơn so với một số đối thủ.  \r\n\r\nDo sự đa dạng trong dòng sản phẩm nên đại đa số người dùng sẽ có suy nghĩ Vivo là một dòng điện thoại giá rẻ với hiệu suất cùng tính năng không quá mạnh mẽ. \r\n\r\nCó nên mua điện thoại Vivo không \r\nCó nên mua điện thoại Vivo không \r\nViệc quyết định mua điện thoại VIvo không phụ thuộc vào nhu cầu ngân sách và mong muốn cá nhân của bạn. Dưới đây là một số yếu tố bạn có thể xem xét khi đưa ra quyết định \r\n\r\nĐầu tiên, hãy dựa vào nhu cầu cụ thể của bản thân, nếu bạn chú trọng về chất lượng ảnh và video đặc biệt là các khoảnh khắc chụp ảnh trong điều kiện thiếu sáng thì Vivo là một lựa chọn xuất sắc. \r\n\r\nQuan trọng nhất Vivo cung cấp các dòng sản phẩm từ tầm trung đến cao cấp nên có nhiều lựa chọn về mức giá. Đảm bảo rằng bạn chọn một thiết bị phù hợp với ngân sách của mình. ', 0, NULL, '2025-01-11 08:08:43');

-- --------------------------------------------------------

--
-- Table structure for table `vtd_tin_tuc`
--

CREATE TABLE `vtd_tin_tuc` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vtdMaTT` varchar(255) NOT NULL,
  `vtdTieuDe` varchar(255) NOT NULL,
  `vtdMoTa` text NOT NULL,
  `vtdNoiDung` longtext NOT NULL,
  `vtdNgayDangTin` datetime NOT NULL,
  `vtdNgayCapNhap` datetime NOT NULL,
  `vtdHinhAnh` varchar(255) NOT NULL,
  `vtdTrangThai` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vtd_tin_tuc`
--

INSERT INTO `vtd_tin_tuc` (`id`, `vtdMaTT`, `vtdTieuDe`, `vtdMoTa`, `vtdNoiDung`, `vtdNgayDangTin`, `vtdNgayCapNhap`, `vtdHinhAnh`, `vtdTrangThai`, `created_at`, `updated_at`) VALUES
(1, 'TT001', 'Điện Thoại nổi bật trong năm 2024', 'Thị trường di động trong năm 2024 chứng kiến sự ra mắt của rất nhiều sản phẩm mới', 'Smartphone gây bất ngờ và ấn tượng nhất: Huawei Mate XT\nTháng 9 vừa qua, Huawei đã khiến người dùng và giới công nghệ phải bất ngờ khi trình làng Mate XT, chiếc điện thoại màn hình gập 3 đầu tiên trên thế giới. Sản phẩm có thiết kế với hai phần bản lề và một màn hình rộng 6,4 inch ở bên ngoài để người dùng có thể sử dụng như một chiếc smartphone dạng thanh thông thường.\n\nPhát Video\nGiới thiệu Huawei Mate XT - Smartphone gây bất ngờ nhất năm 2024 (Video: Huawei).\n\nNgười dùng có thể mở rộng Mate XT ở dạng màn hình gập đôi, lúc này sản phẩm sẽ trở thành chiếc máy tính bảng cỡ nhỏ với kích thước 7,9 inch và nếu mở rộng toàn bộ, Mate XT sẽ trở thành chiếc máy tính bảng màn hình cỡ lớn kích thước 10,2 inch.\n\nKiểu dáng của Mate XT cho phép người dùng có thể tùy chọn để sử dụng sản phẩm với nhiều kích cỡ màn hình khác nhau, tùy thuộc theo nhu cầu. Tất cả màn hình trên Mate XT đều sử dụng công nghệ OLED với tần số quét 120Hz.\n\nMate XT được trang bị chip Kirin 9010 5G do Huawei tự phát triển, bộ nhớ RAM 16GB đi kèm tùy chọn bộ nhớ lưu trữ 256/512GB hoặc 1TB. Mate XT hoạt động trên nền tảng HarmonyOS 4.2 cũng do Huawei tự xây dựng.\n\nHuawei Mate XT được trang bị thỏi pin dung lượng 5.600mAh, hỗ trợ sạc nhanh 66W. Đáng chú ý, Huawei cho biết hãng sử dụng thỏi pin mỏng nhất từ trước đến nay, với độ dày chỉ 1,9mm. Điều này giúp Mate XT sở hữu độ mỏng ấn tượng khi mở ra cũng như khi gập lại.\n\nMate XT đã nhanh chóng tạo nên một \"cơn sốt\" tại thị trường Trung Quốc, dù sản phẩm có giá khởi điểm lên đến 2.800 USD.\n\nSmartphone tốt nhất về tổng thể: Apple iPhone 16 Pro Max\nTrên thực tế, iPhone 16 Pro Max không phải là một phiên bản \"lột xác\" hoàn toàn so với iPhone 15 Pro Max, nhưng sản phẩm vẫn sở hữu những cải tiến ấn tượng.\n\nPhát Video\nGiới thiệu iPhone 16 Pro Max - Smartphone tốt nhất về tổng thể năm 2024 (Video: Apple).\n\nĐầu tiên đó là việc màn hình iPhone 16 Pro Max được nâng lên thành 6,9 inch, nhưng vẫn sở hữu viền siêu mỏng, điều này giúp kích thước của sản phẩm không bị tăng lên quá nhiều. Bên cạnh đó, nút bấm Camera Control để điều khiển chức năng camera ở cạnh máy cũng được xem là một điểm cải tiến đáng chú ý.\n\nNếu xét về tổng thể, bao gồm cả thiết kế, hiệu suất, tính năng, chất lượng camera… iPhone 16 Pro Max xứng đáng là chiếc smartphone tốt nhất trong năm 2024. Điểm nâng cấp ấn tượng nhất trên chiếc smartphone này đó là trang bị chip xử lý A18 Pro hoàn toàn mới, được xem là chip di động mạnh mẽ nhất hiện nay.\n\nThời lượng sử dụng pin cũng là một điểm nâng cấp ấn tượng trên iPhone 16 Pro Max, khi đây là chiếc iPhone có pin lớn nhất từ trước đến nay của Apple, giúp iPhone 16 Pro Max trở thành một trong những smartphone có thời lượng pin tốt nhất thị trường hiện nay. Đây cũng là chiếc iPhone đầu tiên được trang bị sạc nhanh công suất 25W.\n\nXét về tổng thể, không quá khi nói rằng iPhone 16 Pro Max là chiếc smartphone tốt nhất được ra mắt trong năm qua và điều này được người dùng cũng như nhiều trang công nghệ lớn trên thế giới thừa nhận.\n\nSmartphone chạy Android tốt nhất: Samsung Galaxy S24 Ultra\nKhác với iOS chỉ là \"sân chơi\" độc quyền của Apple, thị trường smartphone chạy Android luôn luôn sôi động với sự xuất hiện thường xuyên của các mẫu sản phẩm mới thuộc mọi phân khúc.\n\nPhát Video\nGiới thiệu Galaxy S24 Ultra - Smartphone chạy Android tốt nhất năm 2024 (Video: Samsung).\n\nNếu xét về tổng thể, bao gồm thiết kế, cấu hình, hiệu suất hoạt động, chất lượng hình ảnh, camera, thời lượng sử dụng pin, các tính năng trí tuệ nhân tạo… thì Galaxy S24 Ultra xứng đáng được chọn là chiếc điện thoại chạy Android tốt nhất ra mắt trong năm qua.\n\nCác điểm nổi bật nhất trên sản phẩm là màn hình siêu sáng, cấu hình mạnh, với chip xử lý Snapdragon 8 Gen 3 for Galaxy được Qualcomm thiết kế dành riêng cho sản phẩm của Samsung. Chip thế hệ mới kết hợp với thỏi pin dung lượng 5.000mAh giúp thời lượng sử dụng pin của Galaxy S24 Ultra được đánh giá cao.\n\nSản phẩm cũng được tích hợp các tính năng trí tuệ nhân tạo hữu ích như khoanh vùng hình ảnh để tìm kiếm, xử lý ảnh bằng AI… Ngoài ra, cây viết S Pen được tích hợp kèm sản phẩm cũng được trang bị các tính năng mới và hữu ích.\n\nSmartphone màn hình gập tốt nhất: Google Pixel 9 Pro Fold\nSmartphone màn hình gập vẫn tiếp tục là phân khúc sôi động trong năm 2024, khi xuất hiện thêm nhiều mẫu sản phẩm mới đến từ những tên tuổi lớn như Samsung, Huawei, Xiaomi, Google hay Oppo…\n\nTạm dừng\nTắt tiếng\nThời gian hiện tại 0:04\n/\nĐộ dài 0:37\n \nToàn màn hình\n\nCài đặt\nGiới thiệu Google Pixel 9 Pro Fold - Smartphone gập tốt nhất năm 2024 (Video: Google).\n\nNổi bật trong số các mẫu smartphone màn hình gập ra mắt năm 2024 đó là Pixel 9 Pro Fold, chiếc smartphone màn hình gập thế hệ thứ 2 của Google.\n\nPixel 9 Pro Fold có thiết kế mỏng hơn và màn hình trong lớn hơn so với phiên bản đầu tiên. Sản phẩm được đánh giá cao về hiệu năng nhờ cấu hình mạnh mẽ, các tính năng trí tuệ nhân tạo hữu ích và camera chất lượng cao của dòng Pixel. Bên cạnh đó, Google thiết kế và tối ưu hệ điều hành để phù hợp với một chiếc điện thoại gập.\n\nThời lượng pin cũng là điểm được đánh giá cao trên Pixel 9 Pro, khi sản phẩm sở hữu thỏi pin dung lượng 4.650mAh, thuộc loại lớn nhất phân khúc smartphone màn hình gập......', '2024-02-22 07:20:37', '2024-11-11 07:25:42', 'vtdtinTuc/7rIty85TBNziuzyBaqNRZA7PUnlYLkSk2pEoHOMK.jpg', 0, '2024-12-28 03:03:29', '2025-01-02 03:53:52'),
(2, 'TT002', 'Điện thoại giá rẻ', 'Xiaomi, Oppo, Realme dựa vào các mẫu giá rẻ trong khi Apple, Samsung bán chạy nhất dòng cao cấp.\r\n\r\nCác hệ thống bán lẻ ước tính thị trường điện thoại năm 2024 tăng trưởng 20% doanh số nhờ đóng góp lớn từ phân khúc tầm trung và giá rẻ. Việc tắt sóng 2G khiến nhu cầu với loạt máy dưới 5 triệu đồng tăng mạnh, thể hiện trong tỷ trọng doanh số của các hãng như Xiaomi, Oppi, Vivo hay Realme.', 'Năm 2024 vẫn chứng kiến nhiều mẫu điện thoại ra mắt. Trong số này có những thiết bị được khen ngợi đúng với giá trị thực, nhưng cũng có các mẫu máy cung cấp các tính năng mạnh mẽ và giá trị tuyệt vời bị đánh thấp, lu mờ bởi những cái tên được quảng cáo nhiều hơn.\r\n\r\nCác chuyên gia đánh giá từ trang Tom Guide\'s đã dành nhiều thời gian thử nghiệm hàng loạt điện thoại để đưa ra dành sách 3 thiết bị tốt nhưng bị đánh giá thấp nhất trong năm qua. Chúng là những sản phẩm xứng đáng được công nhận nhiều hơn.\r\n\r\nSamsung Galaxy S24 FE\r\nLý do bị đánh giá thấp: Điện thoại \'Fan Edition\' trước đây thường mang tiếng là có chất lượng không cao, nhưng Galaxy S24 FE đã chứng minh sự ngang hàng với các sản phẩm còn lại trong dòng S24.\r\n\r\nĐiện thoại \"tốt nhất nhưng bị đánh giá thấp nhất\" năm 2024: Ít được quảng cáo nên không nhiều người biết- Ảnh 1.\r\nCó nhiều lý do khiến Samsung Galaxy S24 FE bị đánh giá thấp nhất năm 2024. Khi lần đầu tiên được công bố, bảng thông số kỹ thuật của máy không thực sự phản ánh đúng những gì FE thực sự cung cấp. Đầu tiên, máy tự hào có màn hình AMOLED chất lượng cao hơn, sáng hơn màn hình trên Galaxy S24 Plus.\r\n\r\nMột trong những khía cạnh thú vị của S24 FE là Samsung không ngần ngại cung cấp các tính năng Galaxy AI giống hệt như các điện thoại hàng đầu khác của hãng. Đây là yếu tố quan trọng vì AI là xu hướng lớn nhất mà chúng ta thấy ở điện thoại vào năm 2024. Không ít người nghĩ Samsung sẽ mở rộng khả năng \"hái ra tiền\" đó ra ngoài phạm vi các mẫu máy hàng đầu (hãy nhìn cách Apple làm với Apple Intelligence).\r\n\r\nĐiều ngạc nhiên hơn về Galaxy S24 FE còn đến từ việc đây là điện thoại Galaxy mới rẻ nhất hỗ trợ Samsung DeX. Trải nghiệm giống như máy tính để bàn này càng củng cố thêm vị thế của S24 FE vì nó thực sự có sức mạnh của một chiếc PC trong túi, chỉ bằng cách kết nối với màn hình ngoài, chuột và bàn phím không dây.', '2024-10-31 19:03:23', '2024-05-10 15:11:17', 'vtdtinTuc/iK5bMIxxgkuLjESDqk8z3JMvizWLnDGdrNfvlRUW.jpg', 0, '2024-12-28 03:03:29', '2024-12-28 03:23:53'),
(3, 'explicabo', 'Quos debitis dolor rerum.', 'Ducimus dignissimos ut dicta qui. Libero et quia animi aut velit et aspernatur. Pariatur nemo quis ad eius itaque qui. Sit nihil natus quia rerum.', 'Enim at in sapiente molestias facere totam. Et sint exercitationem voluptates non vel error praesentium. Tenetur deserunt eum et doloribus consequuntur dolores voluptatem. Rem optio deserunt animi omnis modi dolores. Dignissimos doloribus quaerat optio nihil.', '2024-01-26 03:53:17', '2024-05-20 02:56:45', 'vtdtinTuc/2gLadH5v8OvehEFWABeyyhvzrFatOUo3vy4uE2pX.jpg', 0, '2024-12-28 03:03:29', '2024-12-28 03:24:00'),
(4, 'laudantium', 'Optio quia quaerat voluptas veniam.', 'Ea omnis est rem vero molestias nobis non. Mollitia cumque dolorem cumque occaecati. Quod eaque mollitia quibusdam hic assumenda.', 'Vel cupiditate consequatur debitis consequatur. Quia et reiciendis rem aut qui. Autem laboriosam eaque in rerum. Pariatur rerum consequatur in tempore beatae vitae.', '2024-05-09 21:40:07', '2024-03-06 00:04:55', 'vtdtinTuc/rKS1lfVmzy3tIFyezc6EHi9uvNZC2X4JGnQq0wd2.jpg', 0, '2024-12-28 03:03:29', '2024-12-28 03:24:08'),
(5, 'ut', 'Perferendis aut nobis atque quo rerum aperiam.', 'Qui rerum ea non harum quos. Impedit facere nihil ipsa. Eaque quis rerum ea consequatur quam praesentium et incidunt. Est sunt rerum sint sint.', 'Voluptatum doloribus expedita dolorum deserunt. Dignissimos eos rerum qui tenetur. Esse error consequatur et nisi similique unde facere. Eos nisi iste consequatur ab qui veniam praesentium. Excepturi repellat quae error aut exercitationem similique est recusandae. Eum quam accusantium beatae eaque voluptatem quo.', '2024-06-10 22:18:15', '2024-09-11 21:48:02', 'vtdtinTuc/aEvs4137CNZIVEBYmwA0kfoKkbjicGEcS44g3O5J.jpg', 0, '2024-12-28 03:03:29', '2024-12-28 03:24:19'),
(6, 'sapiente', 'Accusamus voluptatibus sed saepe reprehenderit iste omnis.', 'Illo fugiat consequatur modi qui distinctio adipisci unde cupiditate. Dolor accusamus sint et earum perferendis laudantium non nostrum. Enim omnis quaerat voluptas voluptas ut eius rerum.', 'Est delectus sed qui consequatur. Harum et dolore inventore vitae recusandae mollitia. Vel libero autem unde illo earum temporibus. Aut corporis ut repellat non quia saepe.', '2024-09-15 14:27:56', '2024-01-12 23:22:13', 'vtdtinTuc/uBBpDNLcN8oWdvwMk8AoZaQ8TXyTraOuQR43S3f0.jpg', 0, '2024-12-28 03:03:29', '2024-12-28 03:24:29'),
(7, 'et', 'Aliquid ipsam culpa aliquid possimus odit occaecati.', 'Sed laudantium ex adipisci atque. Aut ducimus deserunt ad quo dicta. Dolor repellendus quia temporibus. In ut vitae perferendis aut atque recusandae.', 'Vitae nesciunt voluptas iure iure. Vero perferendis quia et debitis quia pariatur. Non nihil harum iusto quia. Aut delectus porro maxime voluptatem. Sit occaecati sed quidem distinctio. Qui placeat quisquam laudantium qui. Praesentium aut in eum aliquid.', '2024-11-25 07:02:45', '2024-07-20 10:06:35', 'vtdtinTuc/fDrZmJ0UDqUsOoRXsR1QRw7YBsVfjc0CnKmLXIvN.jpg', 1, '2024-12-28 03:03:29', '2024-12-28 03:24:37'),
(8, 'rerum', 'Sed placeat sed maiores non quas ullam.', 'Fugit sint sit enim. Et voluptatem quidem adipisci similique explicabo doloremque. Reprehenderit tempora dolorum et quos veniam. Odio iusto ullam non quo rerum explicabo ut.', 'At reiciendis labore quia et. Iste placeat id ducimus error ipsa et omnis. Inventore consequatur rerum veritatis temporibus odit a sit. Voluptas ipsum excepturi inventore aut. Quisquam animi deserunt eligendi.', '2024-02-26 02:48:04', '2024-08-21 00:11:49', 'vtdtinTuc/7NfDzXGYhtQi8g7YQPaFsv8BTfbsMrHdWXpJZloG.jpg', 0, '2024-12-28 03:03:29', '2024-12-28 03:24:51'),
(9, 'qui', 'Id explicabo et quam est nemo eius aspernatur.', 'Dolorum et et velit explicabo perferendis quaerat vel. Ut porro adipisci nihil eos facere id. Est et explicabo quam pariatur. Ea perspiciatis dolor perspiciatis nemo quae.', 'Culpa et iusto recusandae dolorem suscipit nisi omnis eligendi. Aut dolorum quae temporibus eligendi sed consectetur occaecati. Aut dolor et quibusdam non voluptates tempore nostrum. Recusandae in illo pariatur similique aliquam in.', '2024-03-06 23:20:48', '2024-12-21 03:06:23', 'vtdtinTuc/QpXB7fc2DPFEoEpXLqQIp9ISCSpNltzSub0ijHHa.jpg', 1, '2024-12-28 03:03:29', '2024-12-28 03:25:02'),
(10, 'adipisci', 'Deleniti modi ab rem mollitia.', 'Qui eius voluptatem in facere aspernatur. Omnis alias voluptate eaque perferendis dicta. Omnis laborum sint voluptatum ut.', 'Veritatis nobis qui provident blanditiis sit est. Incidunt quas nulla tempore voluptatem dignissimos corrupti. Est quos earum consequuntur. Reprehenderit animi quia rerum dolore.', '2024-08-27 06:22:23', '2024-03-26 09:41:01', 'vtdtinTuc/0vX1xPOP26CLVuzUSBuU03yHEPe5jzggVhnu7Kki.jpg', 0, '2024-12-28 03:03:29', '2024-12-28 03:25:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vtd_ct_hoa_don`
--
ALTER TABLE `vtd_ct_hoa_don`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vtd_hoa_don`
--
ALTER TABLE `vtd_hoa_don`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vtd_hoa_don_vtdmahoadon_unique` (`vtdMaHoaDon`);

--
-- Indexes for table `vtd_khach_hang`
--
ALTER TABLE `vtd_khach_hang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vtd_khach_hang_vtdmakhachhang_unique` (`vtdMaKhachHang`),
  ADD UNIQUE KEY `vtdEmail` (`vtdEmail`),
  ADD UNIQUE KEY `vtdDienThoai` (`vtdDienThoai`);

--
-- Indexes for table `vtd_loai_san_pham`
--
ALTER TABLE `vtd_loai_san_pham`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vtd_loai_san_pham_vtdmaloai_unique` (`vtdMaLoai`);

--
-- Indexes for table `vtd_quan_tri`
--
ALTER TABLE `vtd_quan_tri`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vtd_quan_tri_vtdtaikhoan_unique` (`vtdTaiKhoan`);

--
-- Indexes for table `vtd_san_pham`
--
ALTER TABLE `vtd_san_pham`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vtd_san_pham_vtdmasanpham_unique` (`vtdMaSanPham`);

--
-- Indexes for table `vtd_tin_tuc`
--
ALTER TABLE `vtd_tin_tuc`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vtd_tin_tuc_vtdmatt_unique` (`vtdMaTT`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vtd_ct_hoa_don`
--
ALTER TABLE `vtd_ct_hoa_don`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `vtd_hoa_don`
--
ALTER TABLE `vtd_hoa_don`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `vtd_khach_hang`
--
ALTER TABLE `vtd_khach_hang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `vtd_loai_san_pham`
--
ALTER TABLE `vtd_loai_san_pham`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vtd_quan_tri`
--
ALTER TABLE `vtd_quan_tri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vtd_san_pham`
--
ALTER TABLE `vtd_san_pham`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vtd_tin_tuc`
--
ALTER TABLE `vtd_tin_tuc`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
