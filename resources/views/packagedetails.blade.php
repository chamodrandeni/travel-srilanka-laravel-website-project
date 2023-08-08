<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>Package Details</title>

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
                <h2 class="breadcrumb-title">Package Details</h2>
                <ul class="d-flex justify-content-center breadcrumb-items">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Package Details</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="package-details-wrapper pt-76">
        <div class="container">
        <div class="row ">
        <div class="col-lg-8">
        <div class="tour-package-details">
        <div class="pd-header">
        <div class=" pd-top row row-cols-lg-4 row-cols-md-2 row-cols-2 gy-4">
        <div class="col">
        <div class="pd-single-info">
        <div class="info-icon">
        <img src="{{ asset('frontend/assets/images/icons/pd1.svg') }}" alt="">
        </div>
        <div class="info">
        <h6>Duration</h6>
        <span>{{ $packages->duration }}</span>
        </div>
        </div>
        </div>
        <div class="col">
        <div class="pd-single-info">
        <div class="info-icon">
        <img src="{{ asset('frontend/assets/images/icons/pd2.svg') }}" alt="">
        </div>
        <div class="info">
        <h6>Tour Type</h6>
        <span>{{ $packages->name }}</span>
        </div>
        </div>
        </div>
        <div class="col">
        <div class="pd-single-info">
        <div class="info-icon">
        <img src="{{ asset('frontend/assets/images/icons/pd3.svg') }}" alt="">
        </div>
        <div class="info">
        <h6>Group Size</h6>
        <span>{{ $packages->grouptype }} People</span>
        </div>
        </div>
        </div>
        <div class="col">
        <div class="pd-single-info">
        <div class="info-icon">
        <img src="{{ asset('frontend/assets/images/icons/pd4.svg') }}" alt="">
        </div>
        <div class="info">
        <h6>Tour Guide</h6>
        <span>{{ $packages->guidetype }} People</span>
        </div>
        </div>
        </div>
        </div>
        <div class="pd-thumb">
        <img src="{{ asset('assets/uploads/package/'.$packages->image) }}" alt="">
        </div>
        <div class="header-bottom">
        <div class="pd-lavel d-flex justify-content-between align-items-center flex-wrap gap-2">
        <h5 class="location"><i class="bi bi-geo-alt"></i> Mount Dtna, Spain</h5>
        <ul class="d-flex align-items-center rating">
        <li><i class="bi bi-star-fill"></i></li>
        <li><i class="bi bi-star-fill"></i></li>
        <li><i class="bi bi-star-fill"></i></li>
         <li><i class="bi bi-star-fill"></i></li>
        <li><i class="bi bi-star-fill"></i></li>
        </ul>
        </div>
        <h2 class="pd-title">{{ $packages->packname }}</h2>
        </div>
        </div>
        <div class="package-details-tabs">
        <ul class="nav nav-pills tab-switchers gap-xxl-4 gap-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pills-package1" data-bs-toggle="pill" data-bs-target="#pill-body1" type="button" role="tab" aria-controls="pill-body1" aria-selected="true"><i class="bi bi-info-lg"></i> Information</button>
        </li>
        <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-package2" data-bs-toggle="pill" data-bs-target="#pill-body2" type="button" role="tab" aria-controls="pill-body2" aria-selected="false"> <i class="bi bi-file-earmark-spreadsheet"></i> Travel Plan</button>
        </li>
        <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-package3" data-bs-toggle="pill" data-bs-target="#pill-body3" type="button" role="tab" aria-controls="pill-body3" aria-selected="false"><i class="bi bi-images"></i> Tour Gallary</button>
        </li>
        <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-package4" data-bs-toggle="pill" data-bs-target="#pill-body4" type="button" role="tab" aria-controls="pill-body4" aria-selected="false"><i class="bi bi-geo-alt"></i> Location</button>
        </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">

        <div class="tab-pane fade show active package-info-tab mt-3" id="pill-body1" role="tabpanel" aria-labelledby="pills-package1">
        <h3 class="d-subtitle">Package Details</h3>
        <p>{{ $packages->description }}</p>
        <div class="p-info-featured-img row position-relative g-4 row-cols-1 row-cols-sm-2">
        <div class="col">
        <div class="featured-img">
        <img src="assets/images/package/feat-img1.png" alt="">
        </div>
        </div>
        <div class="col">
        <div class="featured-img">
        <img src="assets/images/package/feat-img2.png" alt="">
        </div>
         </div>
        <div class="featured-video position-absolute ">
        <img src="assets/images/package/feat-img3.png" alt="">
        <div class="video-overlay">
        <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-icon video-popup" data-fancybox>
        <i class="bi bi-play-fill"></i>
        </a>
        </div>
        </div>
        </div>
        </div>

            <div class="tab-pane fade package-plan-tab tab-body mt-3" id="pill-body2" role="tabpanel" aria-labelledby="pills-package2">
                <h3 class="d-subtitle">Details</h3>
                <p>Pellentesque accumsan magna in augue sagittis, non fringilla eros molestie. Sed feugiat mi nec ex vehicula, nec vestibulum orci semper. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec tristique commodo fringilla. Duis aliquet varius mauris eget rutrum. Nullam sit amet justo consequat, bibendum orci in, convallis enim. Proin convallis neque viverra finibus cursus. Mauris lacinia lacinia erat in finibus.</p>
                @foreach ($tourplanimage->tourPlans as $key=>$item)
                    <div class="accordion plans-accordion" id="planAccordion">
                        <div class="accordion-item plans-accordion-single">
                            <div class="accordion-header" id="planHeadingOne">
                                <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#planCollapse{{ $item->id }}" aria-expanded="true" role="navigation">
                                    <div class="paln-index-circle">
                                        <h4>{{ $key+1 }}</h4>
                                    </div>
                                    <div class="plan-title">
                                        <h5>{{ $item->title }}</h5>
                                        <h6>10.00 AM to 10.00 PM</h6>
                                    </div>
                                </div>
                            </div>
                        <div id="planCollapse{{ $item->id }}" class="accordion-collapse collapse show" aria-labelledby="planHeadingOne" data-bs-parent="#planAccordion">
                            <div class="accordion-body plan-info">
                                <p>{{ $item->description }}</p>
                                <ul>
                                    <li><i class="bi bi-check-lg"></i> Specilaized Bilingual Guide</li>
                                    <li><i class="bi bi-check-lg"></i> Private Transport</li>
                                    <li><i class="bi bi-check-lg"></i> Entrance Fees</li>
                                    <li><i class="bi bi-check-lg"></i> Box Lunch,Water,Dinner and Snacks</li>
                                </ul>
                                <div class="row">
                                        @foreach ($item->tourPlanImages as $img)
                                                <div class="col-6">
                                                    <img src="{{ asset('assets/uploads/tourplanimage/'.$img->image) }}" alt="" style="width: 300px; margin-top: 30px;">
                                                </div>
                                        @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

        <div class="tab-pane fade package-gallary-tab mt-3" id="pill-body3" role="tabpanel" aria-labelledby="pills-package3">
        <div class="row g-4">
        <div class="col-6">
        <div class="package-gallary-item">
        <a href="assets/images/gallary/pgl-1.png" data-fancybox="gallery" data-caption="Caption Here"><img src="assets/images/gallary/pgl-1.png" alt=""></a>
        </div>
        </div>
        <div class="col-6">
        <div class="package-gallary-item">
        <a href="assets/images/gallary/pgl-2.png" data-fancybox="gallery" data-caption="Caption Here"><img src="assets/images/gallary/pgl-2.png" alt=""></a>
        </div>
        </div>
        <div class="col-12">
        <div class="package-gallary-item">
        <a href="assets/images/gallary/pgx-1.png" data-fancybox="gallery" data-caption="Caption Here"><img src="assets/images/gallary/pgx-1.png" alt=""></a>
        </div>
        </div>
        <div class="col-6">
        <div class="package-gallary-item">
        <a href="assets/images/gallary/pgl-3.png" data-fancybox="gallery" data-caption="Caption Here"><img src="assets/images/gallary/pgl-3.png" alt=""></a>
        </div>
        </div>
        <div class="col-6">
        <div class="package-gallary-item">
        <a href="assets/images/gallary/pgl-4.png" data-fancybox="gallery" data-caption="Caption Here"><img src="assets/images/gallary/pgl-4.png" alt=""></a>
        </div>
        </div>
        <div class="col-12">
        <div class="package-gallary-item">
        <a href="assets/images/gallary/pgx-2.png" data-fancybox="gallery" data-caption="Caption Here"><img src="assets/images/gallary/pgx-2.png" alt=""></a>
        </div>
        </div>
        <div class="col-6">
        <div class="package-gallary-item">
        <a href="assets/images/gallary/pgl-5.png" data-fancybox="gallery" data-caption="Caption Here"><img src="assets/images/gallary/pgl-5.png" alt=""></a>
        </div>
        </div>
        <div class="col-6">
        <div class="package-gallary-item">
        <a href="assets/images/gallary/pgl-6.png" data-fancybox="gallery" data-caption="Caption Here"><img src="assets/images/gallary/pgl-6.png" alt=""></a>
        </div>
        </div>
        <div class="col-12">
        <div class="package-gallary-item">
        <a href="assets/images/gallary/pgx-3.png" data-fancybox="gallery" data-caption="Caption Here"><img src="assets/images/gallary/pgx-3.png" alt=""></a>
        </div>
        </div>
        </div>
        </div>
        <div class="tab-pane fade package-location-tab mt-3" id="pill-body4" role="tabpanel" aria-labelledby="pills-package4">
        <div class="mapouter">
        <div class="gmap_canvas">
        <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&amp;t=&amp;z=9&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe><a href="https://123movies-to.org/"></a><br>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="col-lg-4">
        <div class="package-sidebar">
        <aside class="package-widget-style-2 widget-form mt-30">
        <div class="widget-title text-center d-flex justify-content-between">
        <h4>Book This Tour</h4>
        {{-- <h3 class="widget-lavel">$75 <span>Per Person</span></h3> --}}
        </div>
        <div class="widget-body">
            <form action="{{ url('insert-booking')}}" method="post" id="booking-form">
                @csrf
                <div class="booking-form-wrapper">
                    @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                    @endif
                    <div class="custom-input-group">
                        <input type="text" placeholder="Your Full Name" id="name" name="name">
                    </div>
                    <div class="custom-input-group">
                        <input type="email" placeholder="Your Email" id="email" name="email">
                    </div>
                    <div class="custom-input-group">
                        <input type="tel" placeholder="Phone" id="phone" name="number">
                    </div>
                    <input type="text" value="{{ $packages->id }}" name="package" hidden>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="custom-input-group">
                                <i class="bi bi-chevron-down"></i>
                                <select id="truist-adult" name="adult">
                                    <option selected>Adult</option>
                                    <option value="1"> 1</option>
                                    <option value="2"> 2</option>
                                    <option value="3"> 3</option>
                                    <option value="4"> 4</option>
                                    <option value="5"> 5</option>
                                    <option value="6"> 6</option>
                                    <option value="7"> 7</option>
                                    <option value="8"> 8</option>
                                    <option value="9"> 9</option>
                                    <option value="10"> 10</option>
                                    <option value="11"> 11</option>
                                    <option value="12"> 12</option>
                                    <option value="13"> 13</option>
                                    <option value="14"> 14</option>
                                    <option value="15"> 15</option>
                                    <option value="16"> 16</option>
                                    <option value="17"> 17</option>
                                    <option value="18"> 18</option>
                                    <option value="19"> 19</option>
                                    <option value="20"> 20</option>
                                    <option value="21"> 21</option>
                                    <option value="22"> 22</option>
                                    <option value="23"> 23</option>
                                    <option value="24"> 24</option>
                                    <option value="25"> 25</option>
                                    <option value="26"> 26</option>
                                    <option value="27"> 27</option>
                                    <option value="28"> 28</option>
                                    <option value="29"> 29</option>
                                    <option value="30"> 30</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="custom-input-group ">
                                <i class="bi bi-chevron-down"></i>
                                <select id="tourist-child" name="child">
                                    <option selected>Child</option>
                                    <option value="1"> 1</option>
                                    <option value="2"> 2</option>
                                    <option value="3"> 3</option>
                                    <option value="4"> 4</option>
                                    <option value="5"> 5</option>
                                    <option value="6"> 6</option>
                                    <option value="7"> 7</option>
                                    <option value="8"> 8</option>
                                    <option value="9"> 9</option>
                                    <option value="10"> 10</option>
                                    <option value="11"> 11</option>
                                    <option value="12"> 12</option>
                                    <option value="13"> 13</option>
                                    <option value="14"> 14</option>
                                    <option value="15"> 15</option>
                                    <option value="16"> 16</option>
                                    <option value="17"> 17</option>
                                    <option value="18"> 18</option>
                                    <option value="19"> 19</option>
                                    <option value="20"> 20</option>
                                    <option value="21"> 21</option>
                                    <option value="22"> 22</option>
                                    <option value="23"> 23</option>
                                    <option value="24"> 24</option>
                                    <option value="25"> 25</option>
                                    <option value="26"> 26</option>
                                    <option value="27"> 27</option>
                                    <option value="28"> 28</option>
                                    <option value="29"> 29</option>
                                    <option value="30"> 30</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="custom-input-group">
                        <i class="bi bi-calendar3"></i>
                        <input placeholder="Select your date" type="date" name="date"  value="" class="calendar">
                    </div>
                    <div class="custom-input-group">
                    <textarea cols="20" rows="7" placeholder="Your message" name="message"></textarea>
                    </div>
                    <div class="custom-input-group">
                        <div class="submite-btn">
                            <button type="submit">Book Now</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        </aside>
        <aside class="package-widget-style-2 widget-recent-package-entries mt-30">
        <div class="widget-title text-center">
        <h4>Offer Package</h4>
        </div>
        <div class="widget-body">
        <ul>
            @foreach ($packageall as $item)
                <li class="package-sm">
                    <div class="thumb">
                        <a href="{{ url('package-details/'.$item->id)}}">
                            <img src="{{ asset('assets/uploads/package/370/'.$item->image) }}" alt="">
                        </a>
                    </div>
                    <div class="info">
                        <h6><a href="{{ url('package-details/'.$item->id)}}">{{ $item->packname }}</a></h6>
                        {{-- <div class="price">
                            <span>From</span>
                            <h6>$67.00 <span>Per Person</span></h6>
                        </div> --}}
                    </div>
                </li>
            @endforeach
        </ul>
        </div>
        </aside>
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
