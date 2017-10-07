/*create database QuanLyDienThoai;*/
create table LOAITAIKHOAN(
	MaLoaiTK int not null primary key,
	TenLoaiTK varchar(50) not null
);
create table TAIKHOAN(
	Email varchar(60) not null primary key,
	MatKhau varchar(40) not null,
	LoaiTK int
);
create table KHACHHANG(
	MaKhachHang int not null primary key auto_increment,
	HoTenKH varchar(100) not null,
	GioiTinhKH varchar(5) NOT NULL check(GioiTinh in('Nam','Nữ')),
	NgaySinhKH date not null,
	SDTKH varchar(12) not null,
    DiaChiKH varchar(200) ,
	TaiKhoanKH varchar(60)
);

create table NHANVIEN(
	MaNhanVien int not null auto_increment primary key,
    HoTenNV varchar(100) not null,
    GioiTinhNV varchar(5) NOT NULL check(GioiTinh in('Nam','Nữ')),
	NgaySinhNV date not null,
	SDTNV varchar(12) not null,
    DiaChiNV varchar(200),
    ChucVu varchar(100),
    TaiKhoanNV varchar(60)
);
create table ADMIN(
	MaAdmin int not null auto_increment primary key,
    HoTenAdmin varchar(100) not null,
    GioiTinhAdmin varchar(5) NOT NULL check(GioiTinh in('Nam','Nữ')),
	NgaySinhAdmin date not null,
	SDTAdmin varchar(12) not null,
    DiaChiAdmin varchar(200),
    TaiKhoanAdmin varchar(60)
);
create table HOADON(
	SoHoaDon int not null auto_increment primary key,
    NgayLapHD date not null,
    TongTien int not null check(TongTien>0),
    DiaChiNhan varchar(200) not null,
    MaLoaiThanhToan int,
    KhachHang int not null
);

create table LOAITHANHTOAN(
	MaLoaiThanhToan int not null primary key,
    TenLoaiThanhToan varchar(100)
);

create table THANHTOANCOD(
	MaThanhToanCOD int not null auto_increment primary key,
    SoHoaDonCod int not null,
    NgayThanhToan date ,
    TinhTrang varchar(50) not null default'Chưa Thanh Toán' check(TinhTrang in ('Chưa Thanh Toán','Đã Thanh Toán'))
);
create table THANHTOANTRUCTUYEN(
	MaThanhToanTT int not null auto_increment primary key,
    SoHoaDonTT int not null,
    SoThe varchar(20) not null,
    TenChuThe varchar(100) not null,
    SoCVV varchar(5) not null,
    NgayHetHan date not null
);
create table DIENTHOAI(
	MaDienThoai int auto_increment not null primary key,
    TenDienThoai varchar(100)not null,
    HangSX int not null,
    SoLuongConLai int,
    GiaBan int not null check(GiaBan>=0),
    ManHinh varchar(50),
    HeDieuHanh varchar(50),
    CameraTruoc varchar(30),
    CameraSau varchar(30),
    RAM TINYINT check(RAM>0),
    ROM TINYINT check(ROM>0), 
    CPU varchar(50),
    Pin int check(Pin>0),
    Khac varchar(100),
    MoTa varchar(300)
);

create table CHITIETHOADON(
	SoHoaDon int not null,
    MaDienThoai int not null,
    SoLuong int not null check(SoLuong>0),
    DonGia int not null check(DonGia>=0),
    primary key(SoHoaDon,MaDienThoai)
);
create table HANGSANXUAT(
	MaHangSX int not null primary key,
    TenHangSX varchar(50) not null
);


ALTER TABLE TAIKHOAN
ADD CONSTRAINT FK_LoaiTK
FOREIGN KEY (LoaiTK) REFERENCES LOAITAIKHOAN(MaLoaiTK);



ALTER TABLE NHANVIEN
ADD CONSTRAINT FK_TaiKhoanNV
FOREIGN KEY (TaiKhoanNV) REFERENCES TAIKHOAN(Email);

ALTER TABLE KHACHHANG
ADD CONSTRAINT FK_TaiKhoanKH
FOREIGN KEY (TaiKhoanKH) REFERENCES TAIKHOAN(Email);

ALTER TABLE ADMIN
ADD CONSTRAINT FK_TaiKhoanAdmin
FOREIGN KEY (TaiKhoanAdmin) REFERENCES TAIKHOAN(Email);



ALTER TABLE HOADON
ADD CONSTRAINT FK_KhachHang
FOREIGN KEY (KhachHang) REFERENCES KHACHHANG(MaKhachHang);

ALTER TABLE HOADON
ADD CONSTRAINT FK_MaLoaiThanhToan
FOREIGN KEY (MaLoaiThanhToan) REFERENCES LOAITHANHTOAN(MaLoaiThanhToan);



ALTER TABLE THANHTOANCOD
ADD CONSTRAINT FK_SoHoaDonCod
FOREIGN KEY (SoHoaDonCod) REFERENCES HOADON(SoHoaDon);

ALTER TABLE THANHTOANTRUCTUYEN
ADD CONSTRAINT FK_SoHoaDonTT
FOREIGN KEY (SoHoaDonTT) REFERENCES HOADON(SoHoaDon);



ALTER TABLE CHITIETHOADON
ADD CONSTRAINT FK_SoHoaDon
FOREIGN KEY (SoHoaDon) REFERENCES HOADON(SoHoaDon);

ALTER TABLE CHITIETHOADON
ADD CONSTRAINT FK_MaDienThoai
FOREIGN KEY (MaDienThoai) REFERENCES DIENTHOAI(MaDienThoai);



ALTER TABLE DIENTHOAI
ADD CONSTRAINT FK_HangSX
FOREIGN KEY (HangSX) REFERENCES HANGSANXUAT(MaHangSX);