@extends('master')

@section('main-body')
    <link href="{{ asset('css/whatsnew.css') }}" rel="stylesheet">
    <h2>What's New</h2>
    @if(Auth::check() && Auth::user()->admin())
        <p id="createid"><a href="{{ url('whatsnew/create') }}" >[Create New]</a></p>
    @endif
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
                        <p> {{ substr($blog_post->blog_post_body, 0, 350)}} ...</p>
                        <br />
                    <br />
                    <a id="showlink" href="{{ url('whatsnew/'.$blog_post->id) }}"><button id="readbutton"> Read More</button></a>
                    <br/>

                    <br/>



                </div>
                </div>
                <br /><br />
<<<<<<< HEAD
            <a id="edit" href="{{ action('BlogPostController@edit', $blog_post->id) }}"><button class="adminbutton">Edit</button></a>
=======
            @if(Auth::check() && Auth::user()->admin())
                <button class="adminbutton"><a href="{{ action('BlogPostController@edit', $blog_post->id) }}">Edit</a></button>
            @endif
>>>>>>> 0cd7126fa321efb9f2634c1b8c2365f0107f2abe
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
@endsection