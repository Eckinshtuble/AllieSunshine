@extends('master')

<link href="{{ asset('/css/carousel.css') }}" rel="stylesheet">
<link href="{{ asset('/css/alert.css') }}" rel="stylesheet">

@section('content')
    @if (\Session::has('fail'))
        <div class="alert alert-danger">
            <ul>
                <li>{!! \Session::get('fail') !!}</li>
            </ul>
        </div>
    @endif

    <div class="carousel slide" data-ride="carousel">
        <a class="first-heading" href="{{ url('getinvolved') }}">Become a Ray of Sunshine Today!</a>
        <!--
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        -->

        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="first-slide"></div>
            </div>
            <div class="carousel-item">
                <div class="second-slide"></div>
            </div>
            <div class="carousel-item">
                <div class="third-slide"></div>
                <!--<img class="third-slide" src="{{ asset('/images/Carousel3_opt.jpg') }}" alt="Third slide">-->
            </div>
        </div>

        <!--
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
        -->
    </div>

    <!--
    <a class="second-heading" href="{{ url('donate') }}">Donate to the Project!</a>
    -->
@endsection

@section('main-body')
    <section>
        <h2>Who We Are</h2>
        <p>Allison "Allie Sunshine" Hayes was a beautiful, generous, loving, caring, giving,
            woman who was taken too soon by leukemia. She loved to help others and our objective
            with the Allie Sunshine Project is to carry on her legacy.
        </p>
        <p>We are Allie's parents (Susan and Terry Chartrand), her mother-in-law and father-in-law
            (Lynn and Dan Hayes), her husband (Jeremy Hayes), her brother (Adam Chartrand), and her
            sister-in-law (Katie Chartrand).
        </p>
        <p>Beginning when Allison passed away, we have been collecting donations for the Allie Sunshine
            Project, and with those donations we intend to give back to our community of Windsor Essex
            county. Our hope is that we can continue to spead Allie's sunshine by inspiring a network of
            wellness explorers through creating and participating in projects in our community that nurture
            self healing and capture learning opportunities for our minds, bodies, and spirits.
        </p>
        <a class="btn" href="{{ url('legacy') }}">Learn More</a>
    </section>

    <section class="section-gray">
        <h2>How to Get Involved</h2>
        <p>
            We are always looking new people to be apart of the Allie Sunshine Project!
            Whether you are interested in donating money, your time at one of our events
            or if you have a wonderful idea that you would like to share with the Allie
            Sunshine Project.
        </p>
        <a class="btn" href="{{ url('getinvolved') }}">Learn More</a>
    </section>
@endsection
