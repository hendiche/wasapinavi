@extends('layouts.app')

@section('content')
<div class="fluid-container">
    <div class="d-flex flex-column details-padding">
        <div class="img" style="flex: 1"></div>
        <div style="margin-top: 2rem; margin-bottom: 2rem">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies sapien sed sollicitudin fermentum. Aenean sit amet scelerisque erat, sagittis mollis odio. Sed sagittis venenatis ligula ac volutpat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque eleifend nisi nec dictum luctus. Morbi ac convallis metus, in sagittis tellus. Quisque sagittis varius arcu sit amet dignissim. Quisque eu dignissim nisl. Integer quis ultrices nisl, sit amet porta ipsum. Nam dignissim condimentum ligula, non accumsan nulla sodales vel. Donec sed magna ultricies, ullamcorper lacus nec, dignissim ex. Nulla porta ac tortor ac ultrices. Aliquam erat volutpat. Ut ultrices urna non ex pretium ultricies.</p>
        </div>
        <div>
            <p>address : Quisque sagittis varius arcu sit amet dignissim. Quisque eu dignissim nisl.</p>
        </div>
        <h1 class="display-4" style="margin-top: 3rem">Review</h1>
        <div class="d-flex flex-row" style="border: 1px solid black; padding: 2rem">
            <div style="flex: 1; text-align: center; margin-left: -2rem;">
                <img src="https://www.vccircle.com/wp-content/uploads/2017/03/default-profile.png" class="img-responsive rounded-circle" style="width: 204px; height: 225px; border: 1px solid black;">
            </div>
            <div style="flex: 4">
                <div class="d-flex flex-column">
                    <div>Name</div>
                    <div class="d-flex flex-row">
                        <div class="rating" style="flex: 1">
                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                        </div>
                        <div style="flex: 4">04/18/2018</div>
                    </div>
                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies sapien sed sollicitudin fermentum. Aenean sit amet scelerisque erat, sagittis mollis odio. Sed sagittis venenatis ligula ac volutpat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque eleifend nisi nec dictum luctus. Morbi ac convallis metus, in sagittis tellus. Quisque sagittis varius arcu sit amet dignissim.</div>
                </div>
            </div>
        </div>
        <h1 class="display-4" style="margin-top: 3rem">Your Review</h1>
        <textarea style="resize: none; height: 225px"></textarea>
        <div class="d-flex flex-row">
            <div class="rating" style="">
                <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
            </div>
            <div class="ml-auto" style="padding-top: 1rem; align-self: flex-end;">
                <button>submit</button>
            </div>
        </div>
    </div>
</div>

@endsection
