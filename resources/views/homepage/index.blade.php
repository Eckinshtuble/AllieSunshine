@extends('master')
@section('content')
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>You have Successfully Logged In!</p>
        </div>

    </div>
    <div class="header-image">
    </div>
    <div class="header-background">
        <h1>Become a Ray of Sunshine Today!</h1>
        <a class="btn btn-full js--scroll-to-plans" href="#">Get Involved</a>
        <a class="btn btn-full js--scroll-to-start" href="#">Donate</a>
    </div>
@endsection

@section('main-body')
<section class="section-features" id="features">
    <div class="row wrap">
        <h2>Who We Are</h2>
        <p class="long-copy">
            Allison "Allie Sunshine" Hayes was a beautiful, generous, loving, caring, giving,
            woman who was taken too soon by leukemia. She loved to help others and our objective
            with the Allie Sunshine Project is to carry on her legacy.
        </p>
        <p class="long-copy">We are Allie's parents (Susan and Terry Chartrand), her mother-in-law and father-in-law
            (Lynn and Dan Hayes), her husband (Jeremy Hayes), her brother (Adam Chartrand), and her
            sister-in-law (Katie Chartrand).
        </p>
        <p class="long-copy">Beginning when Allison passed away, we have been collecting donations for the Allie Sunshine
            Project, and with those donations we intend to give back to our community of Windsor Essex
            county. Our hope is that we can continue to spead Allie's sunshine by inspiring a network of
            wellness explorers through creating and participating in projects in our community that nurture
            self healing and capture learning opportunities for our minds, bodies, and spirits.
        </p>
        <a class="btn btn-full js--scroll-to-plans" href="{{ url('legacy') }}">Learn More</a>
    </div>
</section>

<section class="section-features section-get-involved" id="features">
    <div class="row wrap">
        <h2>How to Get Involved</h2>
        <p class="long-copy">
            We are always looking new people to be apart of the Allie Sunshine Project!
            Whether you are interested in donating money, your time at one of our events
            or if you have a wonderful idea that you would like to share with the Allie
            Sunshine Project.
        </p>
    </div>
</section>
@endsection

