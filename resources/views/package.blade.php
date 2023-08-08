<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>All Package's</title>

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
                <h2 class="breadcrumb-title">All Package's</h2>
                <ul class="d-flex justify-content-center breadcrumb-items">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active">All Package's</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="package-wrapper pt-80">
        <div class="container">
            <div class="row">
                @foreach ($packages as $item)
                    @if ($item->status == 1)
                        <div class="col-lg-4 col-md-6 col-sm-10  fadeffect" style="margin-bottom: 30px;">
                            <div class="package-card-beta">
                                <div class="package-thumb">
                                    <a href="#"><img src="{{ asset('assets/uploads/package/370/'.$item->image) }}" alt=""></a>
                                    <p class="card-lavel">
                                        <i class="bi bi-clock"></i> <span>{{ $item->duration }}</span>
                                    </p>
                                </div>
                                <div class="package-card-body">
                                    <h3 class="p-card-title"><a href="#">{{ $item->packname }}</a></h3>
                                    <div class="p-card-bottom">
                                        <div class="book-btn">
                                            <a href="{{ url('package-details/'.$item->id)}}">View <i class='bx bxs-right-arrow-alt'></i></a>
                                        </div>
                                        {{-- <div class="p-card-info">
                                            <span>From</span>
                                            <h6>$88.00 <span>Per Person</span></h6>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <nav>
                        <ul class="pagination pagination-style-one justify-content-center pt-80">
                            <li class="page-item page-arrow"><a class="page-link" href="#"><i class="bi bi-chevron-double-left"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#">01</a></li>
                            <li class="page-item"><a class="page-link" href="#">02</a></li>
                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                            <li class="page-item"><a class="page-link" href="#">04</a></li>
                            <li class="page-item page-arrow"><a class="page-link" href="#"><i class="bi bi-chevron-double-right"></i></a></li>
                        </ul>
                    </nav>
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
