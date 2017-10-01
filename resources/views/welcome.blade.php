
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <link href="{{ asset('/css/common.css') }}" rel="stylesheet">
    <script src="{{ asset('/js/common.js') }}"></script>
</head>
<div class="login-page">
    <div class="form">
        <form class="login-form" action="store" method="POST">
            <input type="text" name="TenNV" id="TenNV" placeholder="username"/>
            <input type="password" name="pass" id="pass" placeholder="password"/>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            {{--<input type="submit" name="submit" id="Submit">--}}
            <button>login</button>
            <p class="message">Not registered? <a href="http://127.0.0.1:8000/index">Create an account</a></p>
        </form>
    </div>
</div>
</html>