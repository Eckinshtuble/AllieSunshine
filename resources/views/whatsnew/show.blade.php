@extends('master')

<link href="{{ asset('/css/blogshow.css') }}" rel="stylesheet">

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
        <div id="showbody">
            {!!  nl2br(e($blog_post->blog_post_body)) !!}
        </div>

        @foreach($blog_post->comments as $comment)
            {{ $comment->user_id }}
            {{ $comment->comment_body }}
        @endforeach
        <br />
</div>
@endsection