<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Stylesheets -->
    <link href="{{ asset('/css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/mainStyle.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/mainResponsive.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,300italic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <title>The Allie Sunshine Project</title>
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="{{ url('index') }}"><img src={{ URL::asset('images/logo_opt.png')}} alt="Logo" class="logo"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <img src={{ URL::asset('images/logo_opt.png')}} alt="Logo" class="logo">
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('index') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ url('whatsnew') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">What's New?</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('whatsnew') }}">Blog</a>
                        <a class="dropdown-item" href="{{ url('whatsnew') }}">Calendar</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('legacy') }}">Legacy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('getinvolved') }}">Get Involved</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('gallery') }}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('contact') }}">Contact</a>
                </li>
            </ul>

            <ul class="navbar-nav navbar-auth">
                @if (Auth::guest())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/register') }}">Register</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('userprofile') }}">{{"Welcome, " . Auth::user()->first_name }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                    </li>
                @endif
            </ul>
        </div>
    </nav>

    <!--
    <nav>
        <a class="logo-link" href="{{ url('index') }}"><img src={{ URL::asset('images/logo_opt.png')}} alt="Logo" class="logo-responsive"></a>

        <div id="nav-icon" class="menu-icon">
            <div class="menu-icon-top"></div>
            <div class="menu-icon-middle"></div>
            <div class="menu-icon-bottom"></div>
        </div>

        <ul class="navigation js--main-nav">
            <div>
                <a class="logo-link" href="{{ url('index') }}"><img src={{ URL::asset('images/logo_opt.png')}} alt="Logo" class="logo"></a>
            </div>
            <li><a href="{{ url('index') }}">Home</a></li>
            <li class="dropdown"><a href="{{ url('whatsnew') }}">What's New</a></li>
            <div class="dropdown-content">
                <a href="{{ url('whatsnew') }}">Calendar</a>
                <a href="{{ url('whatsnew') }}">Events</a>
            </div>
            </li>
            <li><a href="{{ url('legacy') }}">Legacy</a></li>
            <li><a href="{{ url('getinvolved') }}">Get Involved</a></li>
            <li><a href="{{ url('gallery') }}">Gallery</a></li>
            <li><a href="{{ url('contact') }}">Contact</a></li>
        </ul>

        <ul class="navigation-auth">
            @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>
            @else
                <li><a href="{{ url('userprofile') }}">{{"Welcome, " . Auth::user()->first_name }}</a></li>
                <li>
                    <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            @endif
        </ul>
    </nav>
        -->

    @yield('content')
</header>
@yield('main-body')

<section class="footer">
    <p>
        <span class="footer-text">Copyright 2018 The Allie Sunshine Project | Developed by Parallax Web Design</span>
        <a href="https://instagram.com"><img src={{ asset('/images/instagram.png')}} width="50" height="50" class="logo-inst" alt="Logo"></a>
        <a href="https://facebook.com"><img src={{ asset('/images/facebook.png')}} width="50" height="50" alt="Logo"></a>
    </p>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/script.js') }}"></script>
</body>
</html>
