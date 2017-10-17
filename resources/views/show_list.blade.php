@extends('layout')

@section('content')
    @if(Session::has('success'))

        <div class="row">
            <div class="col-md-9" style="margin-left: 136px">
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            </div>
        </div>
    @endif

    <!-- CSS -->
    <link href="css/datepicker/bootstrap-datepicker3.standalone.min.css" media="screen" rel="stylesheet" type="text/css">
    <link href="css/style.css" media="screen" rel="stylesheet" type="text/css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.cookie.js"></script>

    <div class="content_container">
<div style="margin-top: -2em">
    <h2 class="content_title" style="background: #29292b; color: #FFFFFF">MENU</h2>
</div>


        <table class="list-menu-table" style="font-size: large">
            <tbody>
            <tr>
                <td><a class="list-menu-link" href="{{URL::to('/employee_list')}}">👫 Danh sách nhân viên</a></td>
                <td><a class="list-menu-link" href="{{URL::to('/product_list')}}">📱 Danh sách điện thoại còn trong kho</a></td>
            </tr>
            <tr>
                <td><a class="list-menu-link" href="">📲 Danh sách điện thoại đã bán</a></td>
                <td><a class="list-menu-link" href="">🤵 Thông tin khách hàng</a></td>
            </tr>
            <tr>
                <td><a class="list-menu-link" href="">🏚 Thông tin nhà cung cấp</a></td>
                <td><a class="list-menu-link" href="">📡 Tin tức công nghệ</a></td>
            </tr>
            <tr>
                <td><a class="list-menu-link" href="">💵 Quản lý chi thu</a></td>
            </tr>

            </tbody>
        </table>

    </div><!--content_containerEND-->

@endsection