CREATE DATABASE ShoppingCart
use ShoppingCart 
GO
CREATE TABLE  vtd_QUAN_TRI(			
  id INT PRIMARY KEY IDENTITY,
  vtdTaiKhoan nVARCHAR(255) UNIQUE ,
  vtdMatKhau nVARCHAR(255)  ,
   vtdTrangThai tinyint  
);
go

CREATE TABLE  vtd_LOAI_SAN_PHAM(
  id INT PRIMARY KEY IDENTITY,
    vtdMaLoai VARCHAR(255) UNIQUE ,
	  vtdTenLoai VARCHAR(255)  ,
	    vtdTrangThai tinyint  
);
go

CREATE TABLE  vtd_SAN_PHAM(
  id INT PRIMARY KEY IDENTITY,
  vtdMaSanPham VARCHAR(255) UNIQUE ,
  vtdTenSanPham VARCHAR(255)  ,
  vtdHinhAnh VARCHAR(255)  ,
  vtdSoLuong int  ,
  vtdDonGia float  ,
  vtdMaLoai int REFERENCES vtd_LOAI_SAN_PHAM(id) ,
  vtdMoTa nvarchar(255),
  vtdTrangThai tinyint  
)
go

CREATE TABLE  vtd_KHACH_HANG(
  id INT PRIMARY KEY IDENTITY,
  vtdMaKhachHang VARCHAR(255) UNIQUE ,
  vtdHoTenKhachHang VARCHAR(255)  ,
  vtdEmail VARCHAR(255) UNIQUE ,
  vtdMatKhau VARCHAR(255)  ,
  vtdDienThoai VARCHAR(10) UNIQUE ,
  vtdDiaChi VARCHAR(255)  ,
  vtdNgayDangKy datetime  ,
  vtdTrangThai tinyint  ,

  )
  go

  CREATE TABLE  vtd_HOA_DON(
  id INT PRIMARY KEY IDENTITY,
  vtdMaHoaDon VARCHAR(255) UNIQUE ,
  vtdMaKhachHang INT REFERENCES vtd_KHACH_HANG(id) ,
  vtdNgayHoaDon datetime  ,
  vtdNgayNhan datetime  ,
  vtdHoTenKhachHang VARCHAR(255)  ,
  vtdEmail VARCHAR(255)  ,
  vtdDienThoai VARCHAR(10)  ,
  vtdDiaChi VARCHAR(255)  ,
  vtdTongTriGia float  ,
  vtdTrangThai tinyint  ,
)
go

CREATE TABLE  vtd_CT_HOA_DON(
  id INT PRIMARY KEY IDENTITY,
  vtdHoaDonID INT REFERENCES vtd_HOA_DON(id) ,
  vtdSanPhamID INT REFERENCES vtd_SAN_PHAM(id) ,
  vtdSoLuongMua INT  ,
  vtdDonGiaMua float  ,
  vtdThanhTien float  ,
  vtdTrangThai tinyint  ,
) 
go

CREATE TABLE  vtd_TIN_TUC(
  id INT PRIMARY KEY IDENTITY,
 vtdMaTT nvarchar(255) unique,
 vtdTieuDe nvarchar(255),
 vtdMoTa nvarchar(255),
 vtdNoiDung nvarchar(255),
 vtdNayDangTin date,
 vtdNgayCapNhap date,
 vtdHinhAnh nvarchar(255),
 vtdTrangThai tinyint,
) 
go