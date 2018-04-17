@extends('master')
@section('main-body')
    <div id="blogPostId">
        <h1>Article #: {{$blog_post->id}}</h1>
        <br />
        {{'Name: '.$blog_post->blog_post_title}}
        <br />
        {{'Body: '.$blog_post->blog_post_body}}
        <br />

        <br />
    </div>
    <br/>
    <br/>
  
@endsection