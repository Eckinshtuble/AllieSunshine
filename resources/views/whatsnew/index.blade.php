@extends('master')

@section('main-body')
    <link href="{{ asset('css/whatsnew.css') }}" rel="stylesheet">

    <h2>What's New</h2>

    @if(Auth::check() && Auth::user()->admin())
        <p id="createid"><a href="{{ url('whatsnew/create') }}">Create New</a></p>
    @endif

    <section class="section-features" id="features">
        @foreach ($blog_posts as $blog_post)
            <div class="section">
                <div class="one">
                    Created on: {{ date('F d, Y', strtotime($blog_post->created_at)) }} <br />
                    <br/>

                </div>
                <div class="one">
                    <h3>{{ $blog_post->blog_post_title }}</h3>
                    <br/>

                    <img id="defaultImg" src="{{ asset('images/default.png') }}" />
                </div>
                <div class="two">
                    <hr class="hrtag">
                    
                        <p> {{ substr($blog_post->blog_post_body, 0, 350)}} ...</p>
                        <br />
                    <br />
                    <a class="btn btn-full read-btn" href="{{ url('whatsnew/'. $blog_post->id) }}">Read More</a>
                    <br/>

                    <br/>

                </div>
                </div>
                <br /><br />
            @if(Auth::check() && Auth::user()->admin())
                <a class="btn btn-full edit-btn" href="{{ action('BlogPostController@edit', $blog_post->id) }}">Edit</a>
            @endif

        <br />
        <br />
            <form method="post" action="{{ action('BlogPostController@destroy', $blog_post->id) }}">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                @if(Auth::check() && Auth::user()->admin())
                    <button type="submit" class="adminbutton">Delete</button>
                @endif
            </form>
            <br />
            <br />
                <br />
                <hr />
                <br />
                <br />

        @endforeach

    </section>
    <div class="googleCalendar">
        <iframe src="https://calendar.google.com/calendar/embed?src=mattcipriano61%40gmail.com&ctz=America%2FToronto" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
    </div>
@endsection
