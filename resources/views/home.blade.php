@extends('master')

<link href="{{ asset('/css/login.css') }}" rel="stylesheet">

@section('content')
    <form class="form-login" role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}
        <div class="wrapper-inner">
            <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" placeholder="" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
            <br />
            <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" type="password" placeholder="Password" name="password" required>

                @if ($errors->has('password'))
                    <span class="">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
            <br />
            <div>
                <button type="submit" class="btn-login">
                    Login
                </button>
                <a href="{!! url('/login/google') !!}" class="google">Login with Google+</a>
                <a href="{!! url('/login/facebook') !!}" class="facebook">Login with Facebook</a>
            </div>
@endsection
