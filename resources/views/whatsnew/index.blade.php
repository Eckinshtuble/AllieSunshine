@extends('master')
<head>
    <link href="{{ asset('css/whatsnew.css') }}" rel="stylesheet">
</head>
@section('main-body')
    <h2>What's New</h2>
    <a href="{{ url('whatsnew/create') }}" >&nbsp&nbsp[Create New]</a>
    <section class="section-features" id="features">
        @foreach ($blog_posts as $blog_post)
            <div class="wrapper">
                <div class="one">
                    <h3>{{ $blog_post->blog_post_title }}</h3>
                    <br/>
                   
                </div>
                <div class="two">
                    <hr class="hrtag">
                    <br />
                        <p> {{ $blog_post->blog_post_body }} </p>
                        <br />
                        <button>More</button>
                    &nbsp &nbsp
                    <a href="{{ action('BlogPostController@edit', $blog_post->id) }}">[Edit]</a>


                </div>
                </div>
                <br /><br />

            <form method="post" action="{{ action('BlogPostController@destroy', $blog_post->id) }}">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}

               <button type="submit" id="delete">Delete</button>
            </form>
            <br />
            <br />
                <br />
                <hr />
                <br />
                <br />

        @endforeach

    </section>
@endsection