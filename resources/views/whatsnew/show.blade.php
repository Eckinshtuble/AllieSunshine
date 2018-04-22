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
        <br />
        <br />
        <div id="comments">
            @foreach($blog_post->comments as $comment)
                Body: {{$comment->comment_body}}<br/>
          @endforeach
            <br/>
        </div>
        <br />
        <form method="POST" action="{{action ('CommentController@store')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <label for="comment_body">Body:</label>
            <input name="comment_body" type="text"><br>
            <br/>
            <button type="submit">Create</button><br>
        </form>

        @include('partials.errors')
</div>
@endsection