@extends('master')

<link href="{{ asset('/css/login.css') }}" rel="stylesheet">

@section('content')
    <div class="wrapper">
        <h2>Login</h2>
        <form class="form-login" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
            <div class="wrapper-inner">
                <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" placeholder="E-mail Address" name="email" value="{{ old('email') }}" required>

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

                <div class="fgt-pw">
                    <div class="buttons">
                        <a class="btn-pw-reset" href="{{ url('/password/reset') }}">
                            Forgot Your Password?
                        </a>
                    </div>
                </div>

                <div class="no-account">
                    <div class="buttons">
                        Don't Have an account? <a class="btn-pw-reset" href="{{ url('/register') }}">Sign Up</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection