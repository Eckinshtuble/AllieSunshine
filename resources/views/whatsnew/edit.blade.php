@extends('master')
@section('main-body')
    <h2>Edit</h2>

    <form method="POST" action="{{
    action('BlogPostController@update', $blog_post->id) }}">
        {{ method_field('PATCH') }}
        @include('partials.blog_form', ['buttonName' => 'Edit', 'blog_post_title' => old('blog_post_title'), 'blog_post_body' => old('blog_post_body')])
    </form>
    @include('partials.errors')
@endsection