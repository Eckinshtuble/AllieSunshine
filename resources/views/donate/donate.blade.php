@extends('master')

<link href="{{ asset('css/login.css') }}" rel="stylesheet">

@section('main-body')

    <form class="form-horizontal" method="POST" id="payment-form" role="form" action="{!! action('DonatesController@payWithpaypal') !!}" >
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <label for="amount" class="amount">Amount</label>
        <input class="amount" type="text" name="amount" value="{{ old('amount') }}" autofocus>

        <span class="help-block">
            <strong>{{ $errors->first('amount') }}</strong>
        </span>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Paywith Paypal
                </button>
            </div>
        </div>
    </form>

@endsection