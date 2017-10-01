@extends('layout')

@section('content')

    <link href="css/style.css" media="screen" rel="stylesheet" type="text/css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.1/jquery.min.js"></script>
    @if(Session::has('success'))

        <div class="row">
            <div style="margin-left: 147px;width: 870px;margin-bottom: -2em">
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>

            </div>
        </div>

    @endif

    <form action="insert" method="get">
    <div class="content_container">
        <h2 class="content_title"style="background: #29292b; color: #FFFFFF;width: 870px">👫 Danh sách nhân viên</h2>
        <table class="edit_group">
            <col width="100px">
            <col width="100px">


            <tbody>
            <tr>
                <th> Nhân viên làm toàn thời gian </th>
                <td>10 Nhân viên</td>

            </tr>
            <tr>
                <th> Nhân viên làm bán thời gian </th>
                <td>10 Nhân viên</td>

            </tr>
            </tbody>
        </table>

        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <h2 class="content_title"style="background: #6f7072; color: #FFFFFF;width: 700px">Liệt kê danh sách</h2>
        <ul class="flex_box">
            <li><a style="margin-top: 10px;margin-left: -40px"  href="{{URL::to('/list')}}"><< Trở về trang trước</a></li>
            {{--<li><input type="submit" name="" value="Sữa" class="btn_submit"></li>--}}
            {{--<li><input type="submit" name="" value="Xóa" class="btn_submit"></li>--}}
            <li><button type="submit" style="background: #dbdbdb;width: 150px;margin-bottom: 15px;margin-left: 680px"
                        class="btn btn-default">Thêm Nhân Viên</button></li>
        </ul>


        {{--<form action="javascript:addNtTraining();" >--}}
        <table class="table table-bordered table-condensed">
            <thead>
            <tr>
            <th style="font-size: 13px;width: 5%">STT</th>
            <th style="font-size: 13px;width: 20%">Họ tên</th>
            <th style="font-size: 13px;width: 18%">Email</th>
            <th style="font-size: 13px;width:15%">Số điện thoại</th>
            <th style="font-size: 13px;width: 20%">Địa chỉ</th>
            <th style="font-size: 13px;width: 22%">Ngày vào làm</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                <td style="font-size: 13px">{{ $user->id }}</td>
                <td style="font-size: 13px">{{ $user->name }}</td>
                <td style="font-size: 13px">{{ $user->email }}</td>
                <td style="font-size: 13px">{{ $user->phone_number }}</td>
                <td style="font-size: 13px">{{ $user->address }}</td>
                <td style="font-size: 13px">{{ $user->start_day }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
    </form>

    </div>

@endsection
