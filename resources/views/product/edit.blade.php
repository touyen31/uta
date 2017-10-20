@extends('layout')
@section('content')
<link rel="stylesheet" type="text/css" href="/css/product.css">
<script type="text/javascript" src="/js/product.js"></script>

<div class="main-product">
    <div class="top-menu">
        <div class="product-title">
    		Sửa sản phẩm
        </div>
        <a href="/product/create">

        <div class="btn-add-product">
        	Thêm sản phẩm
        </div>
    </a>
    </div>
    <div class="edit-product-main">
    	<input type="hidden" value="{{$data->id}}" class="edit-id">
    	<div class="form-edit">
			<div class="edit-title-detail">
				Mã điện thoại
			</div>    	
    		<input type="text" value="{{$data->MaDienThoai}}" name="" class="edit-MaDienThoai" placeholder="required" required>
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				Tên điện thoại
			</div>    	
    		<input type="text" value="{{$data->TenDienThoai}}" name="" class="edit-TenDienThoai" placeholder="required" required>
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				Hãng sản xuất
			</div>    	
    		<input type="text" value="{{$data->HangSX}}" name="" class="edit-HangSX" placeholder="required" required>
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				Số lượng
			</div>    	
    		<input type="text" value="{{$data->SoLuongConLai}}" name="" class="edit-SoLuongConLai" placeholder="required" required>
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				Giá bán
			</div>    	
    		<input type="text" value="{{$data->GiaBan}}" name="" class="edit-GiaBan" placeholder="required" required>
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				Màn hình
			</div>    	
    		<input type="text" value="{{$data->ManHinh}}" name="" class="edit-ManHinh">
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				Hệ điều hành
			</div>    	
    		<input type="text" value="{{$data->HeDieuHanh}}" name="" class="edit-HeDieuHanh">
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				Camera trước
			</div>    	
    		<input type="text" value="{{$data->CameraTruoc}}" name="" class="edit-CameraTruoc">
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				Camera sau
			</div>    	
    		<input type="text" value="{{$data->CameraSau}}" name="" class="edit-CameraSau">
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				RAM
			</div>    	
    		<input type="text" value="{{$data->RAM}}" name="" class="edit-RAM">
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				ROM
			</div>    	
    		<input type="text" value="{{$data->ROM}}" name="" class="edit-ROM">
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				CPU
			</div>    	
    		<input type="text" value="{{$data->CPU}}" name="" class="edit-CPU">
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				Pin
			</div>    	
    		<input type="text" value="{{$data->Pin}}" name="" class="edit-Pin">
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				Khác
			</div>    	
    		<input type="text" value="{{$data->Khac}}" name="" class="edit-Khac">
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				Mô tả
			</div>    	
    		<input type="text" value="{{$data->MoTa}}" name="" class="edit-MoTa">
    	</div>
    	<div class="form-edit-submit">
    		<div class="edit-btn-submit">Lưu</div>
    	</div>
    </div>
</div>
@endsection