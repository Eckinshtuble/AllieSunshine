@extends('master')

<link href="{{ asset('/css/contact.css') }}" rel="stylesheet">

@section('main-body')
    <div id="map">
        <script>
            function myMap() {
                var myCenter = new google.maps.LatLng(42.3004817,-82.8438871);
                var mapCanvas = document.getElementById("map");
                var mapOptions = {center: myCenter, zoom: 11};
                var map = new google.maps.Map(mapCanvas, mapOptions);
                var marker = new google.maps.Marker({position:myCenter});
                marker.setMap(map);
            }
            $( window ).resize(function(){
                initMap();
            });
        </script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmOVRjfsgBtbaxWUTNnoM5khoSwsYW_WU&callback=myMap"></script>
    </div>

    <section id="mapInfo">
        <h3>Visit The Allie Sunshine Project Healing Garden!</h3>
        <h4>Located just north of 252 West Pike Creek Rd.</h4>
    </section>

    <section class="section-gray">
        <h3>Have a question? Email us!</h3>

        <!-- Form -->
        <div class="emailForm">
            <form id="form" name="contactform" method="post" action="/public/php/emailform.php">
                <div>
                    <label for="first_name">First Name *</label>
                    <input type="text" name="first_name">
                </div>

                <div>
                    <label for="last_name">Last Name *</label>
                    <input type="text" name="last_name">
                </div>

                <div>
                    <label for="email">Email Address *</label>
                    <input type="text" name="email">
                </div>

                <div>
                    <label for="telephone">Telephone Number</label>
                    <input type="text" name="telephone">
                </div>

                <div>
                    <label for="comments">Message *</label>
                    <textarea name="comments" maxlength="1000" rows="6"></textarea>
                </div>

                <div>
                    <input class="btn" type="submit" value="Submit">
                </div>
            </form>
        </div>
        <!-- End of Form -->
    </section>
@endsection
