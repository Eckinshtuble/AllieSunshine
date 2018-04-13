@extends('master')

<link href="{{ asset('/css/login.css') }}" rel="stylesheet">

@section('content')
    <div class="wrapper">
        <h2>Register</h2>
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}

            <div class="{{ $errors->has('first_name') ? ' has-error' : '' }}">
                <input id="first_name" type="text" placeholder="First Name" name="first_name" value="{{ old('first_name') }}" required>

                @if ($errors->has('first_name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('first_name') }}</strong>
                    </span>
                @endif
            </div>

            <br />

            <div class="{{ $errors->has('last_name') ? ' has-error' : '' }}">
                <input id="last_name" type="text" placeholder="Last Name" name="last_name" value="{{ old('last_name') }}" required>

                @if ($errors->has('last_name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('last_name') }}</strong>
                    </span>
                @endif
            </div>

            <br />

            <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" placeholder="E-mail Address" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>

            <br />

            <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" type="password" placeholder="Password" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>

            <br />

            <div class="{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <input id="password" type="password" placeholder="Confirm Password" name="password_confirmation" required>

                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>

            <br />

            <div>
                <button type="submit" class="btn-login">
                    Register
                </button>
            </div>

            <br />
        </form>
    </div>
@endsection

