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
    <Br />
    <hr />
    <br/>
    <Br/>
    <h3>Have a question? Email us!</h3>
        <!--Form-->
    <br/>
        <div class="emailForm">
            <form id="form" name="contactform" method="post" action="public/php/emailform.php">
                <table >
                    <tr>
                        <td valign="top">
                            <label class="regularlabel" for="first_name">First Name *</label>
                        </td>
                        <td valign="top">
                            <label class="secretlabel" for="first_name">First Name *</label>
                            <input  type="text" name="first_name">
                            <br/>
                            <br/>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                        <label class="regularlabel" for="last_name">Last Name *</label>
                        </td>
                        <td valign="top">
                            <label class="secretlabel" for="last_name">Last Name *</label>
                            <input  type="text" name="last_name">
                            <br/>
                            <br/>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label class="regularlabel" for="email">Email Address *</label>
                        </td>
                        <td valign="top">
                            <label class="secretlabel" for="email">Email Address *</label>
                            <input  type="text" name="email">
                            <br/>
                            <br/>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label class="regularlabel" for="telephone">Telephone Number</label>
                        </td>
                        <td valign="top">
                            <label class="secretlabel" for="telephone">Telephone Number</label>
                            <input  type="text" name="telephone">
                            <br/>
                            <br/>
                        </td>
                    </tr>
                    <tr>
                        <td valign="top">
                            <label class="regularlabel" for="comments">Message *</label>
                        </td>
                        <td valign="top">
                            <label class="secretlabel" for="comments">Message *</label>
                            <textarea  name="comments" maxlength="1000" cols="28" rows="6"></textarea>
                            <br/>
                            <br/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align:center">
                            <input type="submit" value="Submit">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <!--end of form-->

@endsection

