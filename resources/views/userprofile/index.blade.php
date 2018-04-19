@extends('master')
<head>
    <link href="{{ asset('css/whatsnew.css') }}" rel="stylesheet">
</head>
@section('main-body')
    <h2>My Profile</h2>
    <section class="section-features" id="features">
        <div id="blogPostId">

            <br />
            <h2>All Users</h2>
            <br />
            <br/>
            <br/>
            @foreach ($users_info as $user_info)
                <p id="hr"><hr class="hrtag"/></p>
                <h3>User {{ $user_info->id }}</h3>
                <br/>
                <p id="showbody">{{$user_info->first_name}}</p>
                <br />
                <p id="showbody">{{$user_info->last_name}}</p>
                <br />
                <p id="showbody">{{$user_info->email}}</p>
                <br />
                <p id="showbody">{{$user_info->salutation_id}}</p>
                <br />
                <p id="showbody">{{$user_info->title}}</p>
                <br />
                <p id="showbody">{{$user_info->address}}</p>
                <br />
                <p id="showbody">{{$user_info->city}}</p>
                <br />
                <p id="showbody">{{$user_info->province_id}}</p>
                <br />
                <p id="showbody">{{$user_info->country_id}}</p>
                <br />
                <p id="showbody">{{$user_info->postal_code}}</p>
                <br />
                <p id="showbody">{{$user_info->phone}}</p>
                <br />
                <p id="showbody">{{$user_info->phone_preference_id}}</p>
                <br />
                <p id="showbody">{{$user_info->contact_preference_id}}</p>
                <br />
                <p id="showbody">{{$user_info->casl_agreement}}</p>
                <br />
            @endforeach
        </div>
    </section>
@endsection