@extends('master')
<head>
    <link href="{{ asset('css/gallery.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lightbox.css') }}" rel="stylesheet">
</head>
@section('content')
    <h2>Gallery</h2>
    <div class="container">
        <div>
<<<<<<< HEAD
            <a href="{{asset('images/gallery/1.jpg')}}" data-lightbox="box"><img src="{{ asset('images/gallery/1.jpg') }}"  class="galleryimg"></a>
            <a href="{{asset('images/gallery/3.jpg')}}" data-lightbox="box"><img src="{{ asset('images/gallery/3.jpg') }}"  class="galleryimg"></a>
            <a href="{{asset('images/gallery/5.jpg')}}" data-lightbox="box"><img src="{{ asset('images/gallery/5.jpg') }}"  class="galleryimg"></a>
        </div>
        <div>
            <a href="{{ asset('images/gallery/20170723_115228.jpg')}}" data-lightbox="box"><img src="{{ asset('images/gallery/20170723_115228.jpg') }}" class="galleryimg"></a>
            <a href="{{asset('images/gallery/20170727_190448.jpg')}}" data-lightbox="box"><img src="{{ asset('images/gallery/20170727_190448.jpg') }}"  class="galleryimg"></a>
            <a href="{{asset('images/gallery/151.jpg')}}" data-lightbox="box"><img src="{{ asset('images/gallery/151.jpg') }}" class="galleryimg"></a>
            <a href="{{asset('images/gallery/20170727_195837.jpg')}}" data-lightbox="box"><img src="{{ asset('images/gallery/20170727_195837.jpg') }}" class="galleryimg"></a>
        </div>
        <div>
            <a href="{{asset('images/gallery/20170727_201553.jpg')}}" data-lightbox="box"><img src="{{ asset('images/gallery/20170727_201553.jpg') }}" class="galleryimg"></a>
            <a href="{{asset('images/gallery/IMG_5095.jpg')}}" data-lightbox="box"><img src="{{ asset('images/gallery/IMG_5095.jpg') }}" class="galleryimg"></a>
            <a href="{{asset('images/gallery/jeremy 2.jpg')}}" data-lightbox="box"><img src="{{ asset('images/gallery/jeremy 2.jpg') }}"  class="galleryimg"></a>
            <a href="{{asset('images/gallery/Resized_20160927_101207.jpg')}}" data-lightbox="box"><img src="{{ asset('images/gallery/Resized_20160927_101207.jpg') }}"  class="galleryimg"></a>
=======
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
>>>>>>> 398a19e61247b4f190b72aa912a5768590d54a84
        </div>
    </div>
<footer>
    <script src="{{asset('js/lightbox-plus-jquery.js')}}"></script>
</footer>
    @if(Auth::check() && Auth::user()->admin())
        <h2>It works!</h2>
    @endif
@endsection
