@extends('master')
<head>
    <link href="{{ asset('css/gallery.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lightbox.css') }}" rel="stylesheet">
</head>
@section('content')
    <h2>Gallery</h2>
    <div class="container">
        <div>
            <a href="{{asset('images/gallery/gallery-1_opt.jpg')}}" data-lightbox="box"><img src="{{ asset('images/gallery/gallery-1_opt.jpg') }}"  class="galleryimg"></a>
            <a href="{{asset('images/gallery/gallery-2_opt.jpg')}}" data-lightbox="box"><img src="{{ asset('images/gallery/gallery-2_opt.jpg') }}"  class="galleryimg"></a>
            <a href="{{asset('images/gallery/gallery-7_opt.jpg')}}" data-lightbox="box"><img src="{{ asset('images/gallery/gallery-7_opt.jpg') }}"  class="galleryimg"></a>
        </div>
        <div>
            <a href="{{asset('images/gallery/gallery-4_opt.jpg')}}" data-lightbox="box"><img src="{{ asset('images/gallery/gallery-4_opt.jpg') }}" class="galleryimg"></a>
            <a href="{{asset('images/gallery/gallery-12_opt.jpg')}}" data-lightbox="box"><img src="{{ asset('images/gallery/gallery-12_opt.jpg') }}"  class="galleryimg"></a>
            <a href="{{asset('images/gallery/gallery-6_opt.jpg')}}" data-lightbox="box"><img src="{{ asset('images/gallery/gallery-6_opt.jpg') }}" class="galleryimg"></a>
            <a href="{{asset('images/gallery/gallery-3_opt.jpg')}}" data-lightbox="box"><img src="{{ asset('images/gallery/gallery-3_opt.jpg') }}" class="galleryimg"></a>
        </div>
        <div>
            <a href="{{asset('images/gallery/gallery-8_opt.jpg')}}" data-lightbox="box"><img src="{{ asset('images/gallery/gallery-8_opt.jpg') }}" class="galleryimg"></a>
            <a href="{{asset('images/gallery/gallery-9_opt.jpg')}}" data-lightbox="box"><img src="{{ asset('images/gallery/gallery-9_opt.jpg') }}" class="galleryimg"></a>
            <a href="{{asset('images/gallery/gallery-10_opt.jpg')}}" data-lightbox="box"><img src="{{ asset('images/gallery/gallery-10_opt.jpg') }}"  class="galleryimg"></a>
            <a href="{{asset('images/gallery/gallery-11_opt.jpg')}}" data-lightbox="box"><img src="{{ asset('images/gallery/gallery-11_opt.jpg') }}"  class="galleryimg"></a>
        </div>
    </div>
    <footer>
        <script src="{{asset('js/lightbox-plus-jquery.js')}}"></script>
    </footer>
@endsection