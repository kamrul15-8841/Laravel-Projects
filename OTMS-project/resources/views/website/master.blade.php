<!Doctype html>
<html>

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,minimum-"/>

    <title> OTMS @yield('title')</title>

    <link rel="stylesheet" href="{{asset('/')}}website/css/all.css"/>
    <link rel="stylesheet" href="{{asset('/')}}website/css/bootstrap.css"/>
    <link rel="stylesheet" href="{{asset('/')}}website/css/style.css"/>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">OTMS</a>
            <ul class="navbar-nav">
                <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
                <li><a href="{{route('about')}}" class="nav-link">About</a></li>
                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Training category</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('training.category')}}" class="dropdown-item">Web Design</a></li>
                        <li><a href="{{route('training.category')}}" class="dropdown-item">Web Development</a></li>
                    </ul>
                </li>
                <li><a href="{{route('training.all')}}" class="nav-link">All Training</a></li>
                <li><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
                <li><a href="{{route('login-registration')}}" class="nav-link">Login/Registration</a></li>
            </ul>
        </div>
    </nav>

    @yield('body')

    <footer class="py-5 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-body h-100">
                        <h1>OTMS</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque
                            consequuntur dolor ducimus impedit incidunt laboriosam laborum libero
                            maxime necessitatibus non nostrum numquam odio,
                            officia quaerat quam reiciendis tenetur ut velit.</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card card-body h-100">
                        <h3>Populer Training</h3>
                        <ul class="navbar-nav">
                            <li><a href="" class="nav-link">PHP With Laravel Framework</a></li>
                            <li><a href="" class="nav-link">Mobile App Development</a></li>
                            <li><a href="" class="nav-link">Responsive Web Design</a></li>
                            <li><a href="" class="nav-link">Professional Digital Marketing</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card card-body h-100">
                        <h1>Contact With Us</h1>
                        <address>
                            House No - 420, Road No - 520, Dhanmondi, Dhaka-1200
                        </address>
                        <h3>Follow Us</h3>
                        <ul class="nav">
                            <li><a href="nav-link"><i class="fa-brands fa-square-facebook"></i></a></li>
                            <li><a href="nav-link"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="nav-link"><i class="fa-brands fa-square-twitter"></i></a></li>
                            <li><a href="nav-link"><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr class="text-white"/>
        <div class="row">
            <div class="col">
                <p class="text-white text-center">copyright @ all right reserved by sarker majid</p>
            </div>
        </div>
    </footer>

<script src="{{asset('/')}}website/js/jquery-3.6.1.js"></script>
<script src="{{asset('/')}}website/js/bootstrap.bundle.js"></script>
</body>
</html>
