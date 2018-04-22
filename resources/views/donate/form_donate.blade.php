@extends('master')

@section('main-body')

    <form class="form-horizontal" method="POST" id="payment-form" role="form" action="{!! action('DonatesController@payWithpaypal') !!}" >
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <label for="amount" class="col-md-4 control-label">Amount</label>

        <input id="amount" type="text" class="form-control" name="amount" value="{{ old('amount') }}" autofocus>

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