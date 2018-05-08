@extends('master')

<link href="{{ asset('/css/edit-form.css') }}" rel="stylesheet">

@section('main-body')
    <h2>Edit</h2>
    <div class="wrapper">
    <form method="POST" action="{{ action('HomeController@update', $user_info->id) }}">
        {{ method_field('PATCH') }}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <label for="salutation">Salutation</label>
        <select name="salutation" class="select-form">
            <option value="mr">Mr. </option>
            <option value="mrs">Mrs. </option>
            <option value="mr">Ms. </option>
            <option value="dr">Dr. </option>
        </select>

        <label for="address">Address</label>
        <input id="address" type="text" name="address" value="{{ $address or '' }}" required>

        <label for="city">City</label>
        <input name="city" type="text" value="{{ $city or '' }}">

        <label for="province">Province</label>
        <select name="province" class="select-form" value="{{ $province_name or '' }}">
            <option value="alberta">Alberta</option>
            <option value="bc">British Columbia</option>
            <option value="manitoba">Manitoba</option>
            <option value="nb">New Brunswick</option>
            <option value="newfoundland">Newfounland</option>
            <option value="ns">Nova Scotia</option>
            <option value="nt">Northwest Territories</option>
            <option value="nunavut">Nunavut</option>
            <option value="ontario">Ontario</option>
            <option value="pei">Prince Edward Island</option>
            <option value="quebec">Quebec</option>
            <option value="saskatchewan">Saskatchewan</option>
            <option value="yukon">Yukon</option>
        </select>

        <label for="country">Country</label>
        <select name="country" class="select-form" value="{{ $country_name or '' }}">
            <option value="canada">Canada</option>
            <option value="us">United States</option>
        </select>

        <label for="postal">Postal Code</label>
        <input name="postal" type="text">

        <label for="phone">Phone Number</label>
        <input name="phone" type="text">

        <label for="phone_pref">Phone Preference</label>
        <select name="phone_pref" class="select-form" value="{{ $phone_preference or '' }}">
            <option value="home">Home Phone</option>
            <option value="cell">Cell Phone</option>
        </select>

        <label for="contact_pref">Contact Preference</label>
        <select name="contact_pref" class="select-form" value="{{ $contact_preference or '' }}">
            <option value="phone">Phone</option>
            <option value="email">Email</option>
        </select>

        <span>Yes, I would like to receive email updates <input class="casl" type="checkbox" name="casl" value="casl"></span>

        <button class="btn btn-full" type="submit">{{ 'Update' }}</button>
    </form>
    </div>
    @include('partials.errors')
@endsection