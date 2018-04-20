@extends('master')

<link href="{{ asset('/css/form.css') }}" rel="stylesheet">

@section('main-body')
    <h2>Edit</h2>

    <form method="POST" action="{{ action('HomeController@update', $user_info->id) }}">
        {{ method_field('PATCH') }}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <label for="salutation">Salutation</label>
        <select name="salutation">
            <option value="mr">Mr. </option>
            <option value="mrs">Mrs. </option>
            <option value="mr">Ms. </option>
            <option value="dr">Dr. </option>
        </select><br /><br />

        <label for="address">Address</label><br />
        <input id="address" type="text" name="address" required>

        <br /><br />
        <label for="city">City</label><br />
        <input name="city" type="text"><br /><br />

        <label for="province">Province</label>
        <select name="province">
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
        </select><br /><br />

        <label for="country">Country</label>
        <select name="country">
            <option value="canada">Canada</option>
            <option value="us">United States</option>
        </select><br /><br />

        <label for="postal">Postal Code</label><br />
        <input name="postal" type="text"><br /><br />

        <label for="phone">Phone Number</label><br />
        <input name="phone" type="text"><br /><br />

        <label for="phone_pref">Phone Preference</label>
        <select name="phone_pref">
            <option value="home">Home Phone</option>
            <option value="cell">Cell Phone</option>
        </select><br /><br />

        <label for="contact_pref">Contact Preference</label>
        <select name="contact_pref">
            <option value="phone">Phone</option>
            <option value="email">Email</option>
        </select><br /><br />

        Yes, I would like to receive email updates <input type="checkbox" name="casl" value="casl"><br /><br />

        <button type="submit">{{ 'Update' }}</button><br/>
    </form>
    @include('partials.errors')
@endsection