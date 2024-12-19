CREATE DATABASE ShoppingCart
use ShoppingCart 
GO
CREATE TABLE  vtd_QUAN_TRI(			
  vtd_ID INT PRIMARY KEY IDENTITY,
  vtd_TaiKhoan nVARCHAR(255) UNIQUE ,
  vtd_MatKhau nVARCHAR(255)  ,
   vtd_TrangThai tinyint  
);
go

CREATE TABLE  vtd_LOAI_SAN_PHAM(
  vtd_ID INT PRIMARY KEY IDENTITY,
    vtd_MaLoai VARCHAR(255) UNIQUE ,
	  vtd_TenLoai VARCHAR(255)  ,
	    vtd_TrangThai tinyint  
);
go

CREATE TABLE  vtd_SAN_PHAM(
  vtd_ID INT PRIMARY KEY IDENTITY,
  vtd_MaSanPham VARCHAR(255) UNIQUE ,
  vtd_TenSanPham VARCHAR(255)  ,
  vtd_HinhAnh VARCHAR(255)  ,
  vtd_SoLuong int  ,
  vtd_DonGia float  ,
  vtd_MaLoai int REFERENCES vtd_LOAI_SAN_PHAM(vtd_ID) ,
  vtd_TrangThai tinyint  
)
go

CREATE TABLE  vtd_KHACH_HANG(
  vtd_ID INT PRIMARY KEY IDENTITY,
  vtd_MaKhachHang VARCHAR(255) UNIQUE ,
  vtd_HoTenKhachHang VARCHAR(255)  ,
  vtd_Email VARCHAR(255) UNIQUE ,
  vtd_MatKhau VARCHAR(255)  ,
  vtd_DienThoai VARCHAR(10) UNIQUE ,
  vtd_DiaChi VARCHAR(255)  ,
  vtd_NgayDangKy datetime  ,
  vtd_TrangThai tinyint  ,

  )
  go

  CREATE TABLE  vtd_HOA_DON(
  vtd_ID INT PRIMARY KEY IDENTITY,
  vtd_MaHoaDon VARCHAR(255) UNIQUE ,
  vtd_MaKhachHang INT REFERENCES vtd_KHACH_HANG(vtd_ID) ,
  vtd_NgayHoaDon datetime  ,
  vtd_NgayNhan datetime  ,
  vtd_HoTenKhachHang VARCHAR(255)  ,
  vtd_Email VARCHAR(255)  ,
  vtd_DienThoai VARCHAR(10)  ,
  vtd_DiaChi VARCHAR(255)  ,
  vtd_TongTriGia float  ,
  vtd_TrangThai tinyint  ,
)
go

CREATE TABLE  vtd_CT_HOA_DON(
  vtd_ID INT PRIMARY KEY IDENTITY,
  vtd_HoaDonID INT REFERENCES vtd_HOA_DON(vtd_ID) ,
  vtd_SanPhamID INT REFERENCES vtd_SAN_PHAM(vtd_ID) ,
  vtd_SoLuongMua INT  ,
  vtd_DonGiaMua float  ,
  vtd_ThanhTien float  ,
  vtd_TrangThai tinyint  ,
) 
go