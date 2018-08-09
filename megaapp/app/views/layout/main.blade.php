<html>
<head>
</head>
<body>
<div class="header">
@if(Auth::check())
Hello, {{Auth::user()->nickname}}
<a href="{{URL::action('AuthController@getLogout')}}">Log Out</a>
@else
<a href="{{URL::action('AuthController@getLoginForm')}}">Log In</a>
<a href="{{URL::action('AuthController@getRegisterForm')}}">Register</a>
@endif
</div>
<div class="content">
@yield('content')
</div>
</body>
</html>

