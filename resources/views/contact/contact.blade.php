@extends('master')
<link href="{{ asset('/css/contact.css') }}" rel="stylesheet">
@section('main-body')
    <h2>Contact</h2>
    <div id="map" >
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
        <br />
        <br />

    </div>
    <br />
    <br/>
    <Br/>
    <h3>Have a question? Email us!</h3>
    <!--Form-->
    <br/>
    <div class="wrapper">
        <div id='contact-form'>
            <form name="contactform" method="post" action="public/php/emailform.php">

                <div>
                    <label for='name' class='name'>Name<span>(required)</span></label>
                    <input type='text' name='name' id='name' class='name' required aria-required='true'/>
                </div>

                <div>
                    <label for='email' class='email'>Email<span>(required)</span></label>
                    <input type='email' name='email' id='email' class='email'  required aria-required='true'/>
                </div>

                <div>
                    <label for='message' class='message'>Comment<span>(required)</span></label>
                    <textarea name='message' id='message' rows='10' class='message'  required aria-required='true'></textarea>
                </div>
                <p class='submit'>
                    <input type='submit' value='Submit &#187;' class='btn btn-full'/>
                    <input type="hidden" id="_wpnonce" name="_wpnonce" value="695d7d2d89" /><input type="hidden" name="_wp_http_referer" value="/contact/" />
                    <input type='hidden' name='contact-form-id' value='4' />
                    <input type='hidden' name='action' value='grunion-contact-form' />
                </p>
            </form>
        </div>
    </div>


@endsection