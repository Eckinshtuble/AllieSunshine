@extends('master')
@section('main-body')
    <h1>Edit Article</h1>

    <form method="POST" action="{{
    action('BlogPostController@update', $blog_post->blog_post_id) }}">
        {{ method_field('PATCH') }}
        @include('partials.edit_form', ['buttonName' => 'Edit', 'title' => old('title'), 'body' => old('body')])
    </form>
    @include('partials.errors')
@endsection