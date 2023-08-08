<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>Contact Us</title>

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
                <h2 class="breadcrumb-title">Contact Us</h2>
                <ul class="d-flex justify-content-center breadcrumb-items">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Contact Us</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="contact-wrapper pt-100">
        @foreach ($settings as $item)
        <div class="container">
            <div class="row align-items-center justify-content-lg-center gy-5">
                <div class="col-lg-6">
                    <div class="contatc-intro-figure">
                        <img src="{{asset('frontend/assets/images/banner/contact-bg.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-info">
                        <h3>Contact Info.</h3>
                        <ul>
                            <li>
                                <h6>Let’s Talk</h6>
                                <a href="mail:{{ $item->email }}">{{ $item->email }}</a>
                                <a href="tel:{{ $item->number }}">{{ $item->number }}</a>
                            </li>
                            <li>
                                <h6>Loacation.</h6>
                                <a href="#">{{ $item->address }}</a>
                            </li>
                            <li>
                                <h6>Visit Us.</h6>
                                <a href="#">Facebook: {{ $item->facebook }}</a>
                                <a href="#">Twitter: {{ $item->twitter }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="contact-map mt-120">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe id="gmap_canvas" src="{{ $item->maplink }}"></iframe><a href="https://123movies-to.org/"></a><br>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="container mt-120">
            <form action="{{ url('insert-mail')}}" method="POST" id="contact_form">
                @csrf
                <div class="contact-form-wrap">
                    <h4>Get a free Keystroke quote now</h4>
                    <p>Your email address will not be published. Required fields are marked *</p>
                    @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                    @endif
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="custom-input-group">
                                <label for="name">Name</label>
                                <input type="text" placeholder="Your name" id="name" name="name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="custom-input-group">
                                <label for="email">Email</label>
                                <input type="text" placeholder="Your Email" id="email" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="custom-input-group">
                        <textarea cols="20" rows="7" placeholder="Your message" name="message"></textarea>
                    </div>
                    <div class="custom-input-group">
                        <div class="submite-btn">
                            <button type="submit">Send Message</button>
                        </div>
                    </div>
                </div>
            </form>
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
