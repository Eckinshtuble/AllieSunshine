@extends('master')

@section('main-body')
    <h2>Contact</h2>
    <div id="map" style="margin:0 auto;width:960px;height:400px">
        <script>
            function myMap() {
                var myCenter = new google.maps.LatLng(42.057921,-82.58571);
                var mapCanvas = document.getElementById("map");
                var mapOptions = {center: myCenter, zoom: 7};
                var map = new google.maps.Map(mapCanvas, mapOptions);
                var marker = new google.maps.Marker({position:myCenter});
                marker.setMap(map);
            }
        </script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmOVRjfsgBtbaxWUTNnoM5khoSwsYW_WU&callback=myMap"></script>

    </div>

@endsection

