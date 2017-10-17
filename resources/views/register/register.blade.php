@extends('layout')

@section('content')
<h2 style="margin-left: 300px">Register form</h2>

@if(Session::has('success'))

 <div class="row">
     <div class="col-md-12">
         <div class="alert alert-success">
             {{Session::get('success')}}
         </div>

     </div>
 </div>

@endif
<form action="register_action" method="post" style="margin-left: 300px">

    <input type="hidden" name="_token" value="{{csrf_token()}}">

    <div class="form-group">
        <label for="name">Name:</label>
        <input style="width: 500px"type="name" name="username" class="form-control" id="name" placeholder="Enter name" >
        <div style="color: red">
            @if($errors->has('username'))<p>{{$errors->first('username')}}</p>@endif
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
        <label for="pwd">Password:</label>
        <input style="width: 500px"type="password" name="password" class="form-control" id="pwd" placeholder="Enter password" >
        <div style="color: red">
        @if($errors->has('password'))<p>{{$errors->first('password')}}</p>@endif
        </div>
    </div>

    <div class="form-group">
        <label for="pwd">Confirm Password:</label>
        <input style="width: 500px"type="password" name="cpassword" class="form-control" id="pwd" placeholder="confirm password" >
        <div style="color: red">
        @if($errors->has('cpassword'))<p>{{$errors->first('cpassword')}}</p>@endif
        </div>
    </div>

    <div class="checkbox">
        <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>

@endsection
