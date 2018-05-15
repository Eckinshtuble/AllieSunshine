@extends('master')

<link href="{{ asset('/css/userprofile.css') }}" rel="stylesheet">

@section('main-body')
    <div class="profile-body">
        <br />
        <h2>{{ Auth::user()->first_name . "'s Profile" }}</h2>
        <br />
        <br/>
        <br/>
        <a href="{{ action('HomeController@edit', $user_info->id) }}" class="btn btn-full read-btn">Edit</a>
        <p id="hr"><hr class="hrtag"/></p>
        <br/>
        <p class="profile-show">{{$user_info->first_name}}</p>
        <br />
        <p class="profile-show">{{$user_info->last_name}}</p>
        <br />
        <p class="profile-show">{{$user_info->email}}</p>
        <br />
        <p class="profile-show">{{$user_info->title}}</p>
        <br />
        <p class="profile-show">{{$user_info->address}}</p>
        <br />
        <p class="profile-show">{{$user_info->city}}</p>
        <br />
        <p class="profile-show">{{$user_info->phone}}</p>
        <br />
    </div>
@endsection