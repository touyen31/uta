@extends('layout')

@section('content')

    @if(Session::has('success'))

        <div class="row">
            <div style="margin-left: 147px;width: 870px;margin-bottom: -2em">
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>

            </div>
        </div>
    @endif
    <div class="content_container">
        <h2 class="content_title"style="margin-bottom: 30px;background: #29292b; color: #FFFFFF;width: 870px">👫 Danh sách nhân viên</h2>
        {{--<table class="edit_group">--}}
            {{--<col width="100px">--}}
            {{--<col width="100px">--}}


            {{--<tbody>--}}
            {{--<tr>--}}
                {{--<th> Nhân viên làm toàn thời gian </th>--}}
                {{--<td>10 Nhân viên</td>--}}

            {{--</tr>--}}
            {{--<tr>--}}
                {{--<th> Nhân viên làm bán thời gian </th>--}}
                {{--<td>10 Nhân viên</td>--}}

            {{--</tr>--}}
            {{--</tbody>--}}
        {{--</table>--}}
        <form action="insert" method="get">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <ul class="flex_box">
            <li><a style="margin-bottom: 30px;margin-left: -40px;font-size: large"  href="{{URL::to('/list')}}"><< Trở về trang trước</a></li>
            <li><button type="submit" name="btnButton"style="width: 150px;margin-bottom: -65px;margin-right: 490px"
                        class="btn btn-default">Thêm Nhân Viên</button></li>
        </ul>
        </form>

        {{--<form action="javascript:add();" >--}}
        <table id="dataTable5" class="table table-bordered table-condensed">
            <thead>
            <tr>
            <th style="font-size: 13px;background-color:#b8daf9;width: 6%">STT</th>
            <th style="font-size: 13px;background-color:#b8daf9;width: 15%">Họ tên</th>
            <th style="font-size: 13px;background-color:#b8daf9;width: 15%">Email</th>
            <th style="font-size: 13px;background-color:#b8daf9;width:15%">Số điện thoại</th>
            <th style="font-size: 13px;background-color:#b8daf9;width: 18%">Địa chỉ</th>
            <th style="font-size: 13px;background-color:#b8daf9;width: 16%">Ngày vào làm</th>
                <th style="font-size: 13px;background-color:#b8daf9;width: 7%">Edit</th>
                <th style="font-size: 13px;background-color:#b8daf9;width: 8%">Delete</th>

            </tr>
            </thead>
            <tbody>
            <?php $count_stt=1?>
            @foreach($users as $user)
                <tr>
                <td style="font-size: 13px">{{ $count_stt++ }}</td>
                <td style="font-size: 13px">{{ $user->name }}</td>
                <td style="font-size: 13px">{{ $user->email }}</td>
                <td style="font-size: 13px">{{ $user->phone_number }}</td>
                <td style="font-size: 13px">{{ $user->address }}</td>
                <td style="font-size: 13px">{{ $user->start_day }}</td>
                    {{--<td><a href="{{url('edit/'. $user->id)}}">Edit</a></td>--}}
                    <td>
                        <form action="{{url('edit/'. $user->id)}}" method="get">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <button type="submit" name="btnButton" class="btn btn-default">Edit</button>
                        </form>
                    </td>
                    <td>
                    <form action="{{url('Delete/'. $user->id)}}" method="post">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <button type="submit" name="btnButton" class="btn btn-default">Delete</button>
                    </form>
                    </td>
                    {{--<form action="delete_employee" method="post">--}}
                            {{--{{ csrf_field() }}--}}
                            {{--{{ method_field('DELETE') }}--}}
                        {{--<button type="submit" style="background: #dbdbdb;height: 30px;"--}}
                                {{--class="btn btn-default">Delete</button>--}}
                        {{--</form>--}}

                        {{--<form action="{{ action('EmployeeController@delete', $users->id) }}" method="post"--}}
                              {{--onsubmit="return confirm('Do you want remove this employee?');">--}}
                            {{--{{ csrf_field() }}--}}
                            {{--<input name="_method" type="hidden" value="DELETE">--}}
                            {{--<button type="submit" class="btn btn-danger btn-sm">Delete</button>--}}
                        {{--</form>--}
                    {{--<td><a href="javascript:delete({{$user->id}});"--}}
                           {{--onclick="confirm('Bạn có chắc chắn xóa nhân viên này？')">Delete</a></td>--}}
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
    <link href="css/style.css" media="screen" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" ></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="{{asset("/js/datatables.min.js")}}"></script>

    <script>
    $(document).ready(function () {
        $('#dataTable5').dataTable({
            paging: false,
        });
        $('#dataTable5').removeAttr('style');

    });
    function Delete(id) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            }
        });
        $.ajax({
            type: 'POST',
            url: '/Delete/' + id,
            data: null,
            dataType: 'JSON',
            //beforeSend: showLoading()
        }).done(function (response) {
           // hideLoading();
            loadDataTable(response);
        });
    }
    function loadDataTable(response) {
        var table = $('#dataTable5').DataTable();
        table.clear().draw();
        if (response.length != 0) {
            $.each(response, function (i, ntTrangning) {
                var link = '<a href="javascript:Delete(' + user.id + ');" onclick="confirm(\'Delete?\')">Delete</a>';
                var row = [user.id, user.name, user.email,user.phone_number,user.address,user.start_day, link];
                table.row.add(row).draw(false);
            });
        }
    }

    </script>
@endsection