<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Stylesheets -->
    <link href="{{ asset('/css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/grid.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/queries.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,300italic" rel="stylesheet">

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <title>Allie Sunshine Project</title>
</head>
<body>
<header>
    <div class="row row-nav">
        <a class="logo-link" href="{{ url('index') }}"><img src={{ URL::asset('images/logo_opt.png')}} alt="Logo" class="logo-responsive"></a>
        <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon"></i></a>
        <ul class="navigation .js--main-nav">
            <div><a class="logo-link" href="{{ url('index') }}"><img src={{ URL::asset('images/logo_opt.png')}} alt="Logo" class="logo"></a></div>
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
            <ul class="navigation-auth .js--main-nav">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li><a href="#">{{"Welcome, " . Auth::user()->first_name }}</a></li>
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
    </div>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    @if (Session::has('status'))
        <script>
            var modal = document.getElementById('myModal');
            var btn = document.getElementById("myBtn");
            var span = document.getElementsByClassName("close")[0];
            btn.onclick = function() {
                modal.style.display = "block";
            };
            span.onclick = function() {
                modal.style.display = "none";
            };
            window.onclick = function(event) {
                if (event.target === modal) {
                    modal.style.display = "none";
                }
            }
        </script>
    @endif
    @yield('content')
</header>
    @yield('main-body')
<footer>

</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('/js/script.js') }}"></script>
</body>
</html>