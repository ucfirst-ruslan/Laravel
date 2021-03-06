<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>

    </style>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
        <div class="collapse navbar-collapse" id="navbarsExample09">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item {{{ Request::is('home') ? 'active' : '' }}}"><a class="nav-link" href="{{{ URL::to('/home')  }}}">Home</a> </li>

                <li class="nav-item {{{ Request::is('articles') ? 'active' : '' }}}"><a class="nav-link" href="{{{ URL::to('/articles')  }}}">Articles</a> </li>

                <li class="nav-item {{{ Request::is('about') ? 'active' : '' }}}"><a class="nav-link" href="{{{ URL::to('/about')  }}}">About</a> </li>

                <li class="nav-item {{{ Request::is('contact-us') ? 'active' : '' }}}"><a class="nav-link" href="{{{ URL::to('/contact-us')  }}}">Contact Us</a> </li>
            </ul>
        </div>
    </nav>

    @yield('content')


</div>
</body>
</html>
