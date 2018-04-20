<<<<<<< HEAD
<link href="{{ asset('/css/blogshow.css') }}" rel="stylesheet">
=======
>>>>>>> 0cd7126fa321efb9f2634c1b8c2365f0107f2abe
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
<<<<<<< HEAD
</div>
=======

    </div>
>>>>>>> 0cd7126fa321efb9f2634c1b8c2365f0107f2abe
@endsection