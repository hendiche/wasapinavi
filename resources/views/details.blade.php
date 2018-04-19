@extends('layouts.app')

@section('content')
<div class="fluid-container">
    <div class="d-flex flex-column details-padding">
        <div class="img"></div>
        <div class="details-desc">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies sapien sed sollicitudin fermentum. Aenean sit amet scelerisque erat, sagittis mollis odio. Sed sagittis venenatis ligula ac volutpat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque eleifend nisi nec dictum luctus. Morbi ac convallis metus, in sagittis tellus. Quisque sagittis varius arcu sit amet dignissim. Quisque eu dignissim nisl. Integer quis ultrices nisl, sit amet porta ipsum. Nam dignissim condimentum ligula, non accumsan nulla sodales vel. Donec sed magna ultricies, ullamcorper lacus nec, dignissim ex. Nulla porta ac tortor ac ultrices. Aliquam erat volutpat. Ut ultrices urna non ex pretium ultricies.</p>
        </div>
        <div>
            <p>address : Quisque sagittis varius arcu sit amet dignissim. Quisque eu dignissim nisl.</p>
        </div>
        <h1 class="display-4">Review</h1>
        <div class="d-flex flex-row details-reviews">
            <div class="profile-picture">
                <img src="https://www.vccircle.com/wp-content/uploads/2017/03/default-profile.png" class="img-responsive rounded-circle">
            </div>
            <div class="comment">
                <div class="d-flex flex-column">
                    <div>Name</div>
                    <div class="d-flex flex-row">
                        <div class="rating">
                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                        </div>
                        <div class="date">04/18/2018</div>
                    </div>
                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies sapien sed sollicitudin fermentum. Aenean sit amet scelerisque erat, sagittis mollis odio. Sed sagittis venenatis ligula ac volutpat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque eleifend nisi nec dictum luctus. Morbi ac convallis metus, in sagittis tellus. Quisque sagittis varius arcu sit amet dignissim.</div>
                </div>
            </div>
        </div>
        <h1 class="display-4">Your Review</h1>
        <textarea></textarea>
        <div class="d-flex flex-row">
            <div class="rating">
                <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
            </div>
            <div class="ml-auto">
                <button>submit</button>
            </div>
        </div>
    </div>
</div>

@endsection
