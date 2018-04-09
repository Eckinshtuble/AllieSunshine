<?php
/**
 * Created by PhpStorm.
 * User: Michael
 * Date: 2018-01-16
 * Time: 4:25 AM
 */
?>
@extends('master')

@section('main-body')

    <h1>New Blog Post Form</h1>

    <form method="POST" action="{{action ('BlogPostController@store')}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <label for="title">Title:</label>
        <input name="title" type="text"><br/>
        <label for="body">Body:</label>
        <input name="body" type="text"><br/>
        <label for="images">Images:</label>
        <input name="images" type="image"><br/>
        <br/>
        <button type="submit">Create</button><br/>
    </form>

    @include('partials.errors')

@stop
