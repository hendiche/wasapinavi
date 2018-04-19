@extends('layouts.app')

@section('content')
<div class="fluid-container">
    <div class="facility-padding">
        <h1>Okutama-Machi, Nishitama-Gun, Tokyo : Map</h1>
        <div id="googleMap"></div>
        <hr />
        <h1>Facilities in Okutama-Machi, Nishitama-Gun, Tokyo</h1>
        <div class="facility row">
            <div class="col-xl-3">
                <a class="facility-link" href="#">Station(5)</a>
            </div>
            <div class="col-xl-3">
                <a class="facility-link" href="#">Town, Village Office(1)</a>
            </div>
            <div class="col-xl-3">
                <a class="facility-link" href="#">Hospital(5)</a>
            </div>
            <div class="col-xl-3">
                <a class="facility-link" href="#">JA Bank(1)</a>
            </div>
            <div class="w-100"></div>
            <div class="col-xl-3">
                <a class="facility-link" href="#">Historical Museum(1)</a>
            </div>
            <div class="col-xl-3">
                <a class="facility-link" href="#">Pension, Petit Hotel(1)</a>
            </div>
            <div class="col-xl-3">
                <a class="facility-link" href="#">Public Accommodation(2)</a>
            </div>
            <div class="col-xl-3">
                <a class="facility-link" href="#">Post Office (Financxe)(4)</a>
            </div>
            <div class="w-100"></div>
            <div class="col-xl-3">
                <a class="facility-link" href="#">Hot Spring(2)</a>
            </div>
            <div class="col-xl-3">
                <a class="facility-link" href="#">Hot Spring (One-day Trip)(1)</a>
            </div>
            <div class="col-xl-3">
                <a class="facility-link" href="#">Camp Site(7)</a>
            </div>
        </div>
        <hr />
        <h1>Shops in Okutama-Machi, Nishitama-Gun, Tokyo</h1>
        <div class="shop row">
            <div class="col-xl-3">
                <a class="facility-link" href="#">Convenience Store(2)</a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function initMap() {
        var BITokutama = { lat: 35.81224, lng: 139.15249 };
        var map = new google.maps.Map(document.getElementById('googleMap'), {
            zoom: 15,
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
  