<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
	<ul class="nav nav-pills">
  <li role="presentation" class="active"><a href="/">Home</a></li>
  <li role="presentation"><a href="articles">Articles</a></li>
  <li role="presentation"><a href="about">About</a></li>
  <li role="presentation"><a href="contact-us">Contact Us</a></li>
</ul>
		<h1>You have arrived.</h1>
	</div>
	
	
	<ul class="nav nav-pills pull-right">
    <li class="{{ Request::is('/home') ? 'class="active"' : '' }}">
        <a href="{{ url('/') }}">Home</a>
    </li>
    <li {{{ (Request::is('/home') ? 'class=active' : '') }}}><a href="{{{ URL::to('/home')  }}}">Home</a>
    </li>
    <li class="{{ Request::is('auth/login') ? 'active' : '' }}">
        <a href="{{ url('auth/login') }}">Login</a>
    </li>
</ul>


</body>
</html>
