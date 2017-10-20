@extends('layout')
@section('content')

<link rel="stylesheet" type="text/css" href="/css/product.css">
<script type="text/javascript" src="/js/product.js"></script>


<div class="main-product">
    <div class="top-menu">
        <div class="product-title">
    		Quản lý sản phẩm
        </div>
        <a href="/product/create">
        <div class="btn-add-product">
        	Thêm sản phẩm
        </div>
    </a>
    </div>
    <div class="product-main-contents">
    	<div class="title-product-detail">
    		<div class="MaDienThoai-title">Mã SP</div>
    		<div class="TenDienThoai-title">Tên SP</div>
    		<div class="HangSX-title">Hãng SX</div>
    		<div class="SoLuongConLai-title">Số lượng</div>
    		<div class="GiaBan-title">Giá bán</div>
    		<div class="HeDieuHanh-title">Hệ điều hành</div>
    		<div class="Tools-title">Công cụ</div>
    	</div>
    	@foreach($data as $key)
    	<div class="product-items" id="{{$key->id}}">
    		<div class="product-MaDienThoai">
    			{{$key->MaDienThoai}}
    		</div>
    		<div class="product-TenDienThoai">
    			{{$key->TenDienThoai}}
    		</div>
    		<div class="product-HangSX">
    			{{$key->HangSX}}
    		</div>
    		<div class="product-SoLuongConLai">
    			{{$key->SoLuongConLai}}
    		</div>
    		<div class="product-GiaBan">
    			{{$key->GiaBan}}
    		</div>
    		<div class="product-HeDieuHanh">
    			{{$key->HeDieuHanh}}
    		</div>
    		<div class="product-Tools">
    			<div class="edit-tool">
    			<a href="/product/edit/{{$key->id}}">Edit</a>
    			</div>
    			<div class="delete-item">Delete</div>
    		</div>
		</div>
    	@endforeach
    </div>
</div>

@endsection