@extends('layout')
@section('content')
<link rel="stylesheet" type="text/css" href="/css/product.css">
<script type="text/javascript" src="/js/product.js"></script>

<div class="main-product">
    <div class="top-menu">
        <div class="product-title">
    		Chi tiết sản phẩm
        </div>
        <a href="/product/create">
        <div class="btn-add-product">
        	Thêm sản phẩm
        </div>
        </a>
    </div>
    <div class="view-product-main">
    	<div type="div" value="{{$data->id}}" class="edit-id">
    	<div class="form-edit">
			<div class="edit-title-detail">
				Mã điện thoại
			</div>    	
    		<div name="" class="edit-MaDienThoai">{{$data->MaDienThoai}}</div>
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				Tên điện thoại
			</div>    	
    		<div type="text" value="{{$data->TenDienThoai}}" name="" class="edit-TenDienThoai">{{$data->TenDienThoai}}</div>
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				Hãng sản xuất
			</div>    	
    		<div type="text" value="{{$data->HangSX}}" name="" class="edit-HangSX">{{$data->HangSX}}</div>
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				Số lượng
			</div>    	
    		<div type="text" value="{{$data->SoLuongConLai}}" name="" class="edit-SoLuongConLai">{{$data->SoLuongConLai}}</div>
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				Giá bán
			</div>    	
    		<div type="text" value="{{$data->GiaBan}}" name="" class="edit-GiaBan">{{$data->GiaBan}}</div>
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				Màn hình
			</div>    	
    		<div type="text" value="{{$data->ManHinh}}" name="" class="edit-ManHinh">{{$data->ManHinh}}</div>
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				Hệ điều hành
			</div>    	
    		<div type="text" value="{{$data->HeDieuHanh}}" name="" class="edit-HeDieuHanh">{{$data->HeDieuHanh}}</div>
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				Camera trước
			</div>    	
    		<div type="text" value="{{$data->CameraTruoc}}" name="" class="edit-CameraTruoc">{{$data->CameraTruoc}}</div>
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				Camera sau
			</div>    	
    		<div type="text" value="{{$data->CameraSau}}" name="" class="edit-CameraSau">{{$data->CameraSau}}</div>
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				RAM
			</div>    	
    		<div type="text" value="{{$data->RAM}}" name="" class="edit-RAM">{{$data->RAM}}</div>
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				ROM
			</div>    	
    		<div type="text" value="{{$data->ROM}}" name="" class="edit-ROM">{{$data->ROM}}</div>
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				CPU
			</div>    	
    		<div type="text" value="{{$data->CPU}}" name="" class="edit-CPU">{{$data->CPU}}</div>
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				Pin
			</div>    	
    		<div type="text" value="{{$data->Pin}}" name="" class="edit-Pin">{{$data->Pin}}</div>
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				Khác
			</div>    	
    		<div type="text" value="{{$data->Khac}}" name="" class="edit-Khac">{{$data->Khac}}</div>
    	</div>
    	<div class="form-edit">
			<div class="edit-title-detail">
				Mô tả
			</div>    	
    		<div type="text" value="{{$data->MoTa}}" name="" class="edit-MoTa">{{$data->MoTa}}</div>
    	</div>
    	<div class="form-view-submit">
            <a href="/product/edit/{{$data->id}}">
    		<div class="view-btn-submit">Sửa</div>
            </a>
    	</div>
    </div>
</div>
@endsection