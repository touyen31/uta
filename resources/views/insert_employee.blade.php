@extends('layout')

@section('content')
    <h2 style="margin-left: 300px">Insert form</h2>

    <form style="margin-left: 300px"action="insert_employee" method="post">

        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <div class="form-group">
            <label for="name">Name:</label>
            <input style="width: 500px"type="name" name="name" class="form-control" id="name" placeholder="Enter name" >
            <div style="color: red">
                @if($errors->has('name'))<p>{{$errors->first('name')}}</p>@endif
            </div>

        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input style="width: 500px"type="email" name="email" class="form-control" id="email" placeholder="Enter email" >
            <div style="color: red">
                @if($errors->has('email'))<p>{{$errors->first('email')}}</p>@endif
            </div>
        </div>

        <div class="form-group">
            <label for="pwd">Phone number:</label>
            <input style="width: 500px"type="phone_number" name="phone_number" class="form-control" id="pwd" placeholder="Enter phone number" >
            <div style="color: red">
                @if($errors->has('phone_number'))<p>{{$errors->first('phone_number')}}</p>@endif
            </div>
        </div>

        <div class="form-group">
            <label for="pwd">Address:</label>
            <input style="width: 500px"type="address" name="address" class="form-control" id="pwd" placeholder="Enter address" >
            <div style="color: red">
                @if($errors->has('address'))<p>{{$errors->first('address')}}</p>@endif
            </div>
        </div>

        <div class="form-group">
            <label for="pwd">Start day:</label>
            <input style="width: 500px"type="start_day" name="start_day" class="form-control" id="pwd" placeholder="Enter start day" >
            <div style="color: red">
                @if($errors->has('start_day'))<p>{{$errors->first('start_day')}}</p>@endif
            </div>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>

@endsection
