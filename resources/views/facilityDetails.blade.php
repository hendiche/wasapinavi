@extends('layouts.app')

@section('content')
<div class="fluid-container">
    <div class="facility-padding">
        <h1>Okutama-Machi, Nishitama-Gun, Tokyo : Map - Stations(5)</h1>
        <div id="googleMap"></div>
    </div>
</div>

<script type="text/javascript">
    function initMap() {
        var locations = [
            ['kawai', 35.81377, 139.16412],
            ['kori', 35.81634, 139.151063],
            ['hatonosu', 35.81509, 139.12892],
            ['shiromaru', 35.81187, 139.11472],
            ['okutama', 35.80940, 139.09690]
        ];
        var BITokutama = { lat: 35.81224, lng: 139.15249 };
        var map = new google.maps.Map(document.getElementById('googleMap'), {
            zoom: 13,
            center: BITokutama
        });

        var marker, i, infowindow = new google.maps.InfoWindow();

        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: { lat: locations[i][1], lng: locations[i][2] },
                map: map
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                  infowindow.setContent(locations[i][0]);
                  infowindow.open(map, marker);
                }
            })(marker, i));
        }
    }  
    // var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    // center:new google.maps.LatLng(35.81224,139.15249),
    // var mapProp= {        
    //     center:new google.maps.LatLng(,),
    //     zoom:5,
    // };
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSBFhs_FXJPL8xDs15-fyCkZhq9ZAgIvM&callback=initMap"
  type="text/javascript"></script>
@endsection