<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <script defer
            src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
</head>
<body>
<section class="section">
    <div class="container">
        <h1 class="title">
            @yield('title')
        </h1>
        @yield('content')
    </div>
</section>
</body>
</html>