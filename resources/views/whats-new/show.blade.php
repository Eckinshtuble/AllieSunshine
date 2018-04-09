@extends('master')
@section('main-body')
    <div id="blogPostId">
        <h1>Article #: {{$blog_post->blog_post_id}}</h1>
        <br />
        {{'Name: '.$blog_post->blog_post_title}}
        <br />
        {{'Body: '.$blog_post->blog_post_body}}
        <br />
        {{'Images: ' //all images}}
        <br />
    </div>
    <br/>
    <br/>
    <div id="commentsId">
        <h2>Comments:</h2>
        <br/>
        @foreach ($comments as $comment)
            <h3>{{ $comment->user->first_name }}</h3>
            <br/>
            {{ $comment->user->profile_picture }}
            <br/>
            <p>{{ $comment->comment_body }}</p>
            <br/>
        @endforeach
        <br/>
        <input name="body" type="text"><br/>
        <button type="submit">Comment</button><br/>
    </div>

@endsection
