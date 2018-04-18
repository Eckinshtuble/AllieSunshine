<link href="{{ asset('/css/blogshow.css') }}" rel="stylesheet">
@extends('master')
@section('main-body')
    <div id="blogPostId">

        <br />
        <h2>{{$blog_post->blog_post_title}}</h2>
       <p id="backarrow"><a id="whatsnewlink" href="{{ url('whatsnew') }}"> &larr; </a></p>
        <br />
        <br/>
        <br/>
        <p id="hr"><hr class="hrtag"/></p>
        <br/>
        <p id="showbody">{{$blog_post->blog_post_body}}</p>
        <br />

    </div>
@endsection