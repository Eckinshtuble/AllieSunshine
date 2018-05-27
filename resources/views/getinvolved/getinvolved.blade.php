@extends('master')

@section('main-body')
    <section class="section-gray">
        <h2>How to Get Involved</h2>

        <p>
        We are always looking for new Rays of Sunshine to join our community! The Allie Sunshine Project welcomes
        anyone who would like to spend some time helping in the Healing Garden or volunteering at our events. Just let
        us know what interests you by clicking the button below.
        </p>

        @if (Auth::guest())
            <a class="btn" href="{{ url('/register') }}">Volunteer</a>
        @else
            <a class="btn" href="{{ url('userprofile/' . Auth::user()->id) }}">Volunteer</a>
        @endif

        <p>
        Blood drives are near and dear to us & so easy to do – if you’ve donated in the past or would like more
        information on how to start donating, you can learn more at <a href="https://blood.ca/en" target="_blank">Canadian Blood Services</a> or
        give them at call 1-888-2-DONATE (1-888-236-6283).
        </p>

        <p>
        We host two (2) Blood Drives each year in Allie’s honour – one in June & the other in November to celebrate her
        birthday. We welcome you to join us at the Grand Marais location for these events, details will be posted once
        available on our Calendar & Blog or you can email us at donateforallison@hotmail.com to find out more and
        book an appointment.
        </p>

        <p>
        Monetary donations are appreciated as a way to help us support the Healing Garden and the various programs
        we offer in Windsor – Essex County throughout the year.
        </p>

        <a class="btn" href="{{ url('donate') }}">Donate Now</a>
    </section>
    </div>
@endsection