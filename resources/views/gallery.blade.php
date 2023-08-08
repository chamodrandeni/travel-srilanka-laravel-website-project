<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>Gallery</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="travelsrilankantours - Experience the enchanting beauty of Sri Lanka with TravelSriLankanTours. Discover breathtaking landscapes, ancient temples, pristine beaches, and vibrant culture. Our expert guides will take you on a journey to explore iconic destinations like Sigiriya, Kandy, and Galle. Immerse yourself in rich history, indulge in mouthwatering cuisine, and create unforgettable memories. Start your adventure today and let TravelSriLankanTours be your gateway to the wonders of Sri Lanka."/>
<meta name="author" content="travel sri lankan tours">
<meta name="keywords" content="sri lankan travel,visiting places in sri lanka,srilankan tour packages,travel agency in sri lanka,sri lankan tour,sri lanka tourism package" />

<link rel="icon" href="{{asset('frontend/assets/images/favicon.png')}}" type="image/gif" sizes="20x20">

<link rel="stylesheet" href="{{asset('frontend/assets/css/select2.min.css')}}">

<link rel="stylesheet" href="{{asset('frontend/assets/css/jquery.fancybox.min.css')}}">

<link href="{{asset('frontend/assets/css/boxicons.min.css')}}" rel="stylesheet">

<link rel="stylesheet" href="{{asset('frontend/assets/css/swiper-bundle.min.css')}}">

<link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('frontend/assets/css/animate.min.css')}}">

<link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">
</head>
<body>

    @include('layouts.sidebar')

    @include('layouts.header')

    <div class="breadcrumb breadcrumb-style-one">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h2 class="breadcrumb-title">Gallery</h2>
                <ul class="d-flex justify-content-center breadcrumb-items">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active">Gallery</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="gallary-wrapper">
        <div class="container">
            <div class="gallary-group pt-80">
                <div class="gallary-group-header">
                <h4 class="gallary-group-title">Tour Gallery</h4>
                    <div class="gallary-arrows text-center d-lg-block d-none">
                        <div class="gallary-button-prev gallary-prev1" tabindex="0" role="button" aria-label="Previous slide">
                            <i class="bi bi-chevron-double-left"></i>
                        </div>
                        <div class="gallary-button-next gallary-next1" tabindex="0" role="button" aria-label="Next slide">
                            <i class="bi bi-chevron-double-right"></i>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="swiper gallary-slider">
                        <div class="swiper-wrapper">
                            @foreach ($imagecategory as $item)
                            <div class="swiper-slide">
                                    <div class="gallary-item">
                                        <img src="{{ asset('assets/uploads/gallery/'.$item->gallary_image) }}" alt="Image Gallery">
                                        <a href="{{ asset('assets/uploads/gallery/'.$item->gallary_image) }}" data-fancybox="gallery" data-caption="Caption Here" class="gallary-item-overlay">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                    </div>
                            </div>
                            @endforeach
                            {{-- <div class="swiper-slide">
                                @foreach ($imagecategory as $item)
                                    <div class="gallary-item">
                                        <img src="{{ asset('assets/uploads/gallery/'.$item->gallary_image) }}" alt="Image Gallery">
                                        <a href="{{ asset('assets/uploads/gallery/'.$item->gallary_image) }}" data-fancybox="gallery" data-caption="Caption Here" class="gallary-item-overlay">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-slide">
                                @foreach ($imagecategory as $item)
                                    <div class="gallary-item">
                                        <img src="{{ asset('assets/uploads/gallery/'.$item->gallary_image) }}" alt="Image Gallery">
                                        <a href="{{ asset('assets/uploads/gallery/'.$item->gallary_image) }}" data-fancybox="gallery" data-caption="Caption Here" class="gallary-item-overlay">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                    </div>
                                @endforeach
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="guide-area guide-style-one pt-110">
        @include('layouts.footer')
    </div>


<script src="{{asset('frontend/assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/chain_fade.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/select2.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery-ui.js')}}"></script>

<script src="{{asset('frontend/assets/js/main.js')}}"></script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3836ZTY30W"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3836ZTY30W');
</script>
</body>
</html>
