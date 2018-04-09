@extends('master')
<head>
    <link href="{{ asset('css/whatsnew.css') }}" rel="stylesheet">
</head>
@section('main-body')
    <h2>What's New</h2>
    <section class="section-features" id="features">

        <h1>All Articles</h1>

        @foreach ($blog_posts as $blog_post)
            <div class="wrapper">
                <div class="one">
                    <h3>{{ $blog_post->blog_post_title }}</h3>
                    <br/>
                    <img src="{{ $blog_post->blog_post_images->featured_image }} " class="image">
                </div>
                <div class="two">
                    <hr class="hrtag">
                    <br />
                        <p> {{ $blog_post->blog_post_body }} </p>
                        <br />
                        <button>Read more</button>
                    </div>
                </div>
                <br />
                <br />
                <hr />
                <br />
                <br />

        @endforeach
    </section>
@endsection