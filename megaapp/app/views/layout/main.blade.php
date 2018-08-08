<html>
<head>
	<title>Test Page</title>
</head>
<body>

<div class="header">

@if(Auth::check)
	Hello, {{Auth::user()->nickname}}
<a href="{{URL::action('authController@getLogout')}}">LogOut</a>
@else
<a href="{{URL::action('authController@getLoginForm')}}">Login</a>
<a href="{{URL::action('authController@getRegisterForm')}}">Register</a>
@endif

</div>


<div class="content">
@yeild('content')
</div>

</body>
</html>