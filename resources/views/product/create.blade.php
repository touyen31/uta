@extends('layout')
@section('content')
<link rel="stylesheet" type="text/css" href="/css/product.css">
<script type="text/javascript" src="/js/product.js"></script>

<div class="main-product">
    <div class="top-menu">
        <div class="product-title">
    		Thêm sản phẩm
        </div>
        <a href="/product/">
        <div class="btn-add-product">
        	Danh sách sản phẩm
        </div></a>
    </div>
    <div class="edit-product-main">
    	<div class="form-edit">
			<div class="edit-title-detail">
				Mã điện thoại
			</div>    	
    		<input type="text" value="" name="" class="edit-MaDienThoai" placeholder="required" required>
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				Tên điện thoại
			</div>    	
    		<input type="text" value="" name="" class="edit-TenDienThoai" placeholder="required" required>
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				Hãng sản xuất
			</div>    	
    		<input type="text" value="" name="" class="edit-HangSX" placeholder="required" required>
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				Số lượng
			</div>    	
    		<input type="text" value="" name="" class="edit-SoLuongConLai" placeholder="required" required>
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				Giá bán
			</div>    	
    		<input type="text" value="" name="" class="edit-GiaBan" placeholder="required" required>
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				Màn hình
			</div>    	
    		<input type="text" value="" name="" class="edit-ManHinh">
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				Hệ điều hành
			</div>    	
    		<input type="text" value="" name="" class="edit-HeDieuHanh">
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				Camera trước
			</div>    	
    		<input type="text" value="" name="" class="edit-CameraTruoc">
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				Camera sau
			</div>    	
    		<input type="text" value="" name="" class="edit-CameraSau">
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				RAM
			</div>    	
    		<input type="text" value="" name="" class="edit-RAM">
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				ROM
			</div>    	
    		<input type="text" value="" name="" class="edit-ROM">
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				CPU
			</div>    	
    		<input type="text" value="" name="" class="edit-CPU">
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				Pin
			</div>    	
    		<input type="text" value="" name="" class="edit-Pin">
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				Khác
			</div>    	
    		<input type="text" value="" name="" class="edit-Khac">
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				Mô tả
			</div>    	
    		<input type="text" value="" name="" class="edit-MoTa">
    	</div>
    	<div class="form-edit-submit">
    		<div class="create-btn-submit">Thêm</div>
    	</div>
    </div>
</div>
@endsection