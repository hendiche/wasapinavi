@extends('layouts.app')

@section('content')
<div class="fluid-container">
    <div class="home-padding">
        <div id="okutama-hiking">
            <h1 class="display-4 text-center">Okutama Hiking</h1>
            <div class="d-flex flex-row">
                <div><img src="https://compathy-magazine-assets.compathy.net/uploads/2016/11/Mount-Mitake-640x480.jpg"></div>
                <div><img src="https://compathy-magazine-assets.compathy.net/uploads/2016/11/Mount-Odake-640x480.jpg"></div>
                <div><img src="https://compathy-magazine-assets.compathy.net/uploads/2016/11/Mount-Kumotori-640x480.jpg"></div>
                <div><img src="https://compathy-magazine-assets.compathy.net/uploads/2016/11/Mount-Mito-e1477981548336-640x477.jpg"></div>
            </div>
            <div class="text-center">
                <a href="{{ route('seemore') }}" class="btn btn-primary">Seemore</a>
            </div>
        </div>
        <br><br><br>
        <div id="okutama-sightseeing">
            <h1 class="display-4 text-center">Okutama Sightseeing</h1>
            <div class="d-flex flex-row">
                <div><img src="https://compathy-magazine-assets.compathy.net/uploads/2016/11/Lake-Okutama-640x480.jpg"></div>
                <div><img src="https://compathy-magazine-assets.compathy.net/uploads/2016/11/Nipparra-Limestone-Cave-640x360.jpg"></div>
                <div><img src="https://compathy-magazine-assets.compathy.net/uploads/2016/11/Hatonosu-Keikoku-Valley-640x480.jpg"></div>
                <div><img src="https://compathy-magazine-assets.compathy.net/uploads/2016/11/Shiromaru-Dam-Fish-Pass-640x640.jpg"></div>
            </div>
            <div class="text-center">
                <a href="{{ route('seemore') }}" class="btn btn-primary">Seemore</a>
            </div>
        </div>
        <br><br><br>
        <div id="okutama-more-things">
            <h1 class="display-4 text-center">More Things to do in Okutama</h1>
            <div class="d-flex flex-row">
                <div><img src="https://compathy-magazine-assets.compathy.net/uploads/2016/11/Kawai-Camping-Ground-640x640.jpg"></div>
                <div><img src="https://compathy-magazine-assets.compathy.net/uploads/2016/11/Moegi-No-Yu-640x479.jpg"></div>
                <div><img src="https://compathy-magazine-assets.compathy.net/uploads/2016/11/Okutama-Mizuto-Midorino-Fureaikan-640x427.jpg"></div>
                <div><img src="https://www.compathy.net/magazine/wp-content/uploads/2016/11/Okutama-Wasabi-640x480.jpg"></div>
            </div>
            <div class="text-center">
                <a href="{{ route('seemore') }}" class="btn btn-primary">Seemore</a>
            </div>
        </div>
    </div>
</div>
@endsection
