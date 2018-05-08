@extends('master')

<link href="{{ asset('/css/blogshow.css') }}" rel="stylesheet">

@section('main-body')
    <div id="blogPostId">

        <br />
        <h2>HI</h2>
        <br />
        <br/>
        <br/>
        <button class="readbutton"><a href="{{ action('HomeController@edit', $user_info->id) }}">Edit</a></button>
        <p id="hr"><hr class="hrtag"/></p>
        <br/>
        <p id="showbody">{{$user_info->first_name}}</p>
        <br />
        <p id="showbody">{{$user_info->last_name}}</p>
        <br />
        <p id="showbody">{{$user_info->email}}</p>
        <br />
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

    </div>
@endsection