@extends('master')

<link href="{{ asset('css/whatsnew.css') }}" rel="stylesheet">

@section('main-body')
    <section class="section-features" id="features">
        <h2>All Volunteers</h2>
        <div id="blogPostId">
            @foreach ($users_info as $user_info)
                <h3>User {{ $user_info->id }}</h3>
                <br/>
                <p id="showbody">{{$user_info->first_name}}</p>
                <br />
                <p id="showbody">{{$user_info->last_name}}</p>
                <br />
                <p id="showbody">{{$user_info->email}}</p>
                <br />
                <p id="showbody">{{$user_info->city}}</p>
                <br />
                <p id="showbody">{{$user_info->phone}}</p>
                <br />
            @endforeach
        </div>
    </section>
@endsection