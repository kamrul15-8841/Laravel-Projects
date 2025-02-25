<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-info border-bottom shadow sticky-top">
    <div class="container">
        <a href="" class="navbar-brand fw-bold">LOGO</a>
        <ul class="navbar-nav">
            <li><a href="{{route('home')}}" class="nav-link fw-bold text-white">Home</a></li>
            <li><a href="{{route('home')}}" class="nav-link fw-bold text-white">All Course</a></li>
            <li><a href="{{route('user-login')}}" class="nav-link fw-bold text-white">Login</a></li>
            <li><a href="{{route('user-register')}}" class="nav-link fw-bold text-white">Registration</a></li>
        </ul>
    </div>
</nav>

@yield('body')

<script src="{{asset('/')}}js/jquery-3.6.1.min.js"></script>
<script src="{{asset('/')}}js/bootstrap.js"></script>
</body>
</html>
