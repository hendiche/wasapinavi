@extends('layouts.app')

@section('content')
<div class="fluid-container">
    <div class="contact-padding">
        <div>
            <h1 class="display-4">Contact Us</h1>
            <br>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In suscipit molestie felis, a porta leo eleifend id. Etiam tortor justo, ultrices sit amet eros at, laoreet interdum tellus. Donec interdum eros varius odio pretium, vel tincidunt tellus iaculis. Cras aliquam ante ut tellus aliquet, sit amet pulvinar magna tincidunt. 
            Sed ipsum tellus, molestie eget molestie sit amet, rutrum eu est. Suspendisse rhoncus diam non vehicula mollis. In hac habitasse platea dictumst. Aenean euismod cursus lectus in finibus. Praesent ligula massa, tincidunt non justo vel, mollis condimentum magna. Donec a accumsan nisl.</p>
        </div>
        <div class="contact-form">
            <h1 class="display-4">Contact Form</h1>
            <form>
                <div class="form-group">
                    <input type="text" name="name" class="form-control form-control-lg" placeholder="Enter Your Name">
                </div>
                <div class="form-group">
                    <input type="text" name="email" class="form-control form-control-lg" placeholder="Enter Your Email">
                </div>
                <div class="form-group">
                    <input type="text" name="subject" class="form-control form-control-lg" placeholder="Enter Your Subject">
                </div>
                <div class="form-group">
                    {{-- <input type="text" name="message" class="form-control form-control-lg" placeholder="Enter Your Message"> --}}
                    <textarea class="form-control form-control-lg" rows="6" placeholder="Enter Your Message"></textarea>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript"></script>
@endsection