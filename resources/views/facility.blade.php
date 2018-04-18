@extends('layouts.app')

@section('content')
<div class="fluid-container">
    <div id="googleMap" style="width:100%;height:400px;"></div>
</div>

<script type="text/javascript">
    function initMap() {
        var BITokutama = { lat: 35.81224, lng: 139.15249 };
        var map = new google.maps.Map(document.getElementById('googleMap'), {
            zoom: 8,
            center: BITokutama
        });
        var marker = new google.maps.Marker({
            position: BITokutama,
            map: map
        });
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
  