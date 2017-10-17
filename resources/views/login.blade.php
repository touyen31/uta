@extends('layout')

@section('content')

    <h2 style="margin-left: 280px">Login form:</h2>

    @if(Session::has('error'))
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger">
                    {{Session::get('error')}}
                </div>
            </div>
        </div>
    @endif

    <form action="login_check" method="post" style="margin-left: 280px">
        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <div class="form-group ">
            <label for="email">Email:</label>
            <input style="width: 500px"type="email" name="email" class="form-control" id="email" placeholder="Enter email" >
            <div style="color: red">
            @if($errors->has('email'))<p>{{$errors->first('email')}}</p>@endif
            </div>
        </div>

        <div class="form-group">
            <label for="pwd">Password:</label>
            <input style="width: 500px"type="password" name="password" class="form-control" id="pwd" placeholder="Enter password" >
            <div style="color: red">
            @if($errors->has('password'))<p>{{$errors->first('password')}}</p>@endif
            </div>
        </div>

        <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>

@endsection
