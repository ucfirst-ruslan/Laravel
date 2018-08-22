<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/css/reset.css">
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/css/styles.css">
    <script src="{{URL::to('/')}}/js/main.js"></script>
</head>
<body>

<nav>
    <div class="container">
        <div class="title-nav">
            <a href="{{URL::action('ForumController@getTopicsList')}}">Home</a>
        </div>


        <div class="title-nickname">
            @if(Auth::check())
                Hello, <b>{{Auth::user()->nickname}}</b><br>
                <a href="{{URL::action('AuthController@getLogout')}}">Log Out</a>
            @else
                <a href="{{URL::action('AuthController@getLoginForm')}}">Log In</a><br/>
                <a href="{{URL::action('AuthController@getRegisterForm')}}">Register</a>
                <br/>
            @endif
            @if(Request::is('auth/login-form'))
                <a href="{{URL::action('RemindersController@getReset')}}">Reset Password</a><br />
            @endif
        </div>


        <div class="title">
            <h1>@yield('title')</h1>
        </div>
    </div>

</nav>

@yield('content')
<footer>
    <div class="container">Task #3 (Laravel)</div>
</footer>

</body>
</html>

