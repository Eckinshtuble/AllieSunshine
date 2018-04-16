@extends('master')
@section('main-body')
    <h2>Create</h2>

    <form method="POST" action="{{action
    ('BlogPostController@store')}}">
        @include('partials.blog_form', ['buttonName' => 'Create', 'blog_post_title' => old('blog_post_title'), 'blog_post_body' => old('blog_post_body')])
    </form>
    @include('partials.errors')
@endsection