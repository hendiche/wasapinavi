@extends('layouts.app')

@section('content')
<div class="fluid-container hendi-background">
    <div class="seemore-padding">
        <div class="d-flex flex-row" style="margin: 0.5rem; cursor: pointer" onclick="onClick()">
            <div class="seemore-margin seemore-border" style="flex: 2; text-align: center;">
                <a href="#">
                    <img class="seemore-picture" src="https://compathy-magazine-assets.compathy.net/uploads/2016/11/Mount-Mitake-640x480.jpg">
                </a>
            </div>
            <div class="seemore-margin seemore-border" style="flex: 4; text-indent: 50px;">
                <p style="padding-left: 1.5rem; ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies sapien sed sollicitudin fermentum. Aenean sit amet scelerisque erat, sagittis mollis odio. Sed sagittis venenatis ligula ac volutpat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque eleifend nisi nec dictum luctus.</p>
            </div>
        </div>
        <div class="d-flex flex-row" style="margin: 0.5rem; cursor: pointer">
            <div class="seemore-margin seemore-border" style="flex: 2; text-align: center;">
                <a href="https://compathy-magazine-assets.compathy.net/uploads/2016/11/Mount-Mitake-640x480.jpg">
                    <img class="seemore-picture" src="https://compathy-magazine-assets.compathy.net/uploads/2016/11/Mount-Mitake-640x480.jpg">
                </a>
            </div>
            <div class="seemore-margin seemore-border" style="flex: 4; text-indent: 50px;">
                <p style="padding-left: 1.5rem; ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies sapien sed sollicitudin fermentum. Aenean sit amet scelerisque erat, sagittis mollis odio. Sed sagittis venenatis ligula ac volutpat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque eleifend nisi nec dictum luctus.</p>
            </div>
        </div>
        <div class="d-flex flex-row" style="margin: 0.5rem; cursor: pointer">
            <div class="seemore-margin seemore-border" style="flex: 2; text-align: center;">
                <a href="https://compathy-magazine-assets.compathy.net/uploads/2016/11/Mount-Mitake-640x480.jpg">
                    <img class="seemore-picture" src="https://compathy-magazine-assets.compathy.net/uploads/2016/11/Mount-Mitake-640x480.jpg">
                </a>
            </div>
            <div class="seemore-margin seemore-border" style="flex: 4; text-indent: 50px;">
                <p style="padding-left: 1.5rem; ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies sapien sed sollicitudin fermentum. Aenean sit amet scelerisque erat, sagittis mollis odio. Sed sagittis venenatis ligula ac volutpat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque eleifend nisi nec dictum luctus.</p>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function onClick() {
        console.log("asdsad");
    }
</script>
@endsection
