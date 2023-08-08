<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>About Us</title>

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
                <h2 class="breadcrumb-title">About Us</h2>
                <ul class="d-flex justify-content-center breadcrumb-items">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">About Us</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="about-main-wrappper pt-100">
        <div class="container">
            <div class="about-tab-wrapper">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6">
                        <div class="about-tab-image-grid text-center">
                            <div class="about-video d-inline-block">
                                <img src="assets/images/about/about-g2.png" alt="">
                                <div class="video-overlay">
                                    <a data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-icon video-popup">
                                        <i class="bi bi-play-fill"></i>
                                    </a>
                                </div>
                            </div>
                        <div class="row float-images g-4">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="about-image">
                    <img src="assets/images/about/about-g1.png" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="about-image">
                    <img src="assets/images/about/about-g3.png" alt="">
                </div>
            </div>
        </div>
    </div>
        </div>
    <div class="col-lg-6 mt-5 mt-lg-0">
        <div class="about-tab-wrap">
            <h2 class="about-wrap-title">
                About Our Company And <span>What We Are</span> Offer.
            </h2>
        <div class="about-tab-switcher">
            <ul class="nav nav-pills mb-3 justify-content-md-between justify-content-center" id="about-tab-pills" role="tablist">
                <li class="nav-item" role="presentation">
        <div class="nav-link active" id="pills-about1" data-bs-toggle="pill" data-bs-target="#about-pills1" role="tab" aria-controls="about-pills1" aria-selected="true">
        <h3>10</h3>
        <h6>Years Experience</h6>
        </div>
        </li>
        <li class="nav-item" role="presentation">
        <div class="nav-link" id="pills-about2" data-bs-toggle="pill" data-bs-target="#about-pills2" role="tab" aria-controls="about-pills2" aria-selected="false">
        <h3>100+</h3>
        <h6>Tour Guide</h6>
        </div>
        </li>
        <li class="nav-item" role="presentation">
        <div class="nav-link" id="pills-about3" data-bs-toggle="pill" data-bs-target="#about-pills3" role="tab" aria-controls="about-pills3" aria-selected="false">
        <h3>500+</h3>
         <h6>Travelar Connect</h6>
        </div>
        </li>
        </ul>
        </div>
        <div class="tab-content about-tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="about-pills1" role="tabpanel" aria-labelledby="pills-about1">
        <p>Duis rutrum nisl urna. Maecenas vel libero faucibus nisi venenatis hendrerit a id lectus. Suspendissendt blandit interdum. Sed pellentesque at nunc eget consente
        consectetur.Duis rutrum nisl urna. Maecenas vel libero faucibus nisi venenatis hendrerit a id lectus. Suspendissendt blandit interdum. Sed pellentesque at nunc
        consectetur.Duis rutrum nisl urna. Maecenas vel libero faucibus nisi venenatis hendrerit a id lectus. Suspendissendt blandit interdum. Sed pellentesque at nunc
        consectetur.Duis rutrum nisl urna. Maecenas vel libero faucibus nisi venenatis hendrerit a id lectus. Suspendissendt blandit interdum. Sed pellentesque at nunc
        consectetur.</p>
        </div>
        <div class="tab-pane fade" id="about-pills2" role="tabpanel" aria-labelledby="pills-about2">
        <p> Duis rutrum nisl urna. Maecenas vel libero faucibus nisi venenatis hendrerit a id lectus. Suspendissendt blandit interdum. Sed pellentesque at nunc eget consente
        consectetur.Duis rutrum nisl urna. Maecenas vel libero faucibus nisi venenatis hendrerit a id lectus. Suspendissendt blandit interdum. Sed pellentesque at nunc
        consectetur.Duis rutrum nisl urna. Maecenas vel libero faucibus nisi venenatis hendrerit.</p>
        </div>
        <div class="tab-pane fade" id="about-pills3" role="tabpanel" aria-labelledby="pills-about3">
        <p>Duis rutrum nisl urna. Maecenas vel libero faucibus nisi venenatis hendrerit a id lectus. Suspendissendt blandit interdum. Sed pellentesque at nunc eget consente
        consectetur.Duis rutrum nisl urna. Maecenas vel libero faucibus nisi venenatis hendrerit a id lectus. Suspendissendt blandit interdum. Sed pellentesque at nunc
        consectetur.Duis rutrum nisl urna. Maecenas vel libero faucibus nisi venenatis hendrerit a id lectus. Suspendissendt blandit interdum. Sed pellentesque at nunc
        consectetur.Duis rutrum nisl urna. Maecenas vel libero faucibus nisi venenatis hendrerit a id lectus. Suspendissendt blandit interdum. Sed pellentesque at nunc
        consectetur.</p>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="row pt-100 align-items-center">
        <div class="col-lg-6">
        <div class="achievement-counter-wrap">
        <h2 class="about-wrap-title">
        Why Package Book With
        <span>Travel Sri Lankan Tours?</span>
        </h2>
        <div class="achievement-counter-cards">
        <div class="achievement-counter-card flex-sm-row flex-column text-sm-start text-center ">
        <div class="counter-box mb-sm-0 mb-3">
        <h2>500+</h2>
        <h6>Awesome Tour</h6>
        </div>
        <p>Duis rutrum nisl urna. Maecenas vel libero faucibus nisi venenatis hendrerit a id lectus. Suspendissendt enlane
        molestie turpis nec lacinia vehicula.</p>
        </div>
        <div class="achievement-counter-card flex-sm-row flex-column text-sm-start text-center">
        <div class="counter-box mb-3">
        <h2>300+</h2>
        <h6>Destinations</h6>
        </div>
        <p>Duis rutrum nisl urna. Maecenas vel libero faucibus nisi venenatis hendrerit a id lectus. Suspendissendt enlane
        molestie turpis nec lacinia vehicula.</p>
        </div>
        <div class="achievement-counter-card flex-sm-row flex-column text-sm-start text-center">
        <div class="counter-box mb-3">
        <h2>150+</h2>
        <h6> Mountains</h6>
        </div>
        <p>Duis rutrum nisl urna. Maecenas vel libero faucibus nisi venenatis hendrerit a id lectus. Suspendissendt enlane
        molestie turpis nec lacinia vehicula.</p>
        </div>
        </div>
        </div>
        </div>
        <div class="col-lg-6">
        <div class="about-image-group mt-5 mt-lg-0">
        <img src="assets/images/about/about-image-group2.png" alt="" class="img-fluid">
        </div>
        </div>
        </div>
        </div>
        </div>

        <div class="testimonial-area testimonial-style-three pt-110 pb-110">
            <div class="container-fluid">
            <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-5 col-sm-10">
            <div class="section-head-alpha text-lg-start text-center">
            <h2 class="text-white">Travelers Review</h2>
            <p class="text-white">Duis rutrum nisl urna maecenas vel libero faucibus nisi vene natis hendrerit aid lectus suspendissendt.</p>
            </div>
            </div>
            <div class="col-lg-6 col-sm-10 d-flex justify-content-end">
            <div class="slider-arrows text-center d-lg-flex flex-row d-none gap-5">
            <div class="testi-prev4" tabindex="0" role="button" aria-label="Previous slide"> <i class="bi bi-arrow-left"></i></div>
            <div class="testi-next4" tabindex="0" role="button" aria-label="Next slide"><i class="bi bi-arrow-right"></i></div>
            </div>
            </div>
            </div>
            <div class="row align-items-center justify-content-center">
            <div class="col-lg-12">
            <div class="swiper testimonial-slider-three">
            <div class="swiper-wrapper">
             <div class="swiper-slide">
            <div class="testimonial-card-beta mx-auto">
            <div class="testimonial-quote-icon">
            <img src="{{asset('frontend/assets/images/icons/quote-review.svg')}}" class="img-fluid" />
            </div>
            <div class="testimonial-card-body">
            <div class="testimonial-info">
            <div class="reviewr-info">
            <div class="single-thumb">
            <img src="https://media-cdn.tripadvisor.com/media/photo-l/1a/f6/ed/7b/default-avatar-2020-6.jpg" alt="" style="border:0px solid #fff; border-radius:50px;">
            </div>
            <div class="reviwer-info-cotn">
            <h5 class="reviewer-name">yucca</h5>
            <ul class="reviewer-rating gap-2">
            <li>
            <i class="bi bi-star-fill"></i>
            </li>
            <li>
            <i class="bi bi-star-fill"></i>
            </li>
            <li>
            <i class="bi bi-star-fill"></i>
            </li>
            <li>
            <i class="bi bi-star-fill"></i>
            </li>
            <li>
            <i class="bi bi-star-fill"></i>
            </li>
            </ul>
            </div>
            </div>
            </div>
            <div class="review-texts">
            <p>
            I can't say my favorite because they were all my favorite due to Mr. SUZUKI- his patience , knowledge and goodwill . I would recommend most highly - one incident the vehicle dud not sound correct it was immediately taken in for service and another vehicle was obtained with no delay.<br><br><br>
            </p>
            </div>
            </div>
            </div>
            </div>
            <div class="swiper-slide">
            <div class="testimonial-card-beta mx-auto">
            <div class="testimonial-quote-icon">
            <img src="{{asset('frontend/assets/images/icons/quote-review.svg')}}" class="img-fluid" />
            </div>
            <div class="testimonial-card-body">
            <div class="testimonial-info">
            <div class="reviewr-info">
            <div class="single-thumb">
            <img src="https://media-cdn.tripadvisor.com/media/photo-l/1a/f6/f0/9f/default-avatar-2020-16.jpg" alt="" style="border:0px solid #fff; border-radius:50px;">
            </div>
            <div class="reviwer-info-cotn">
            <h5 class="reviewer-name">lyak</h5>
            <ul class="reviewer-rating gap-2">
             <li>
            <i class="bi bi-star-fill"></i>
            </li>
            <li>
            <i class="bi bi-star-fill"></i>
            </li>
            <li>
            <i class="bi bi-star-fill"></i>
            </li>
            <li>
            <i class="bi bi-star-fill"></i>
            </li>
            <li>
            <i class="bi bi-star-fill"></i>
            </li>
            </ul>
            </div>
            </div>
            </div>
            <div class="review-texts">
            <p>
            I travelled on my own to Sri Lanka (60yoF) February 2023. Suranga was my driver/guide for 12 days. He was wonderful - knowledgeable of all things Sri Lankan, he accompanied me on the treks and excursions, and is very personable and fun. I felt safe at all times, he seems to know people everywhere and so had good local advice about the areas we travelled. I highly recommend Suranga as your Sri Lankan guide.
            </p>
            </div>
            </div>
            </div>
            </div>
            <div class="swiper-slide">
            <div class="testimonial-card-beta mx-auto">
            <div class="testimonial-quote-icon">
            <img src="{{asset('frontend/assets/images/icons/quote-review.svg')}}" class="img-fluid" />
            </div>
            <div class="testimonial-card-body">
            <div class="testimonial-info">
            <div class="reviewr-info">
            <div class="single-thumb">
            <img src="https://media-cdn.tripadvisor.com/media/photo-l/1a/f6/e5/66/default-avatar-2020-53.jpg" alt="" style="border:0px solid #fff; border-radius:50px;">
            </div>
            <div class="reviwer-info-cotn">
            <h5 class="reviewer-name">jo_opN7253TN</h5>
            <ul class="reviewer-rating gap-2">
            <li>
            <i class="bi bi-star-fill"></i>
            </li>
            <li>
            <i class="bi bi-star-fill"></i>
            </li>
            <li>
            <i class="bi bi-star-fill"></i>
            </li>
            <li>
            <i class="bi bi-star-fill"></i>
            </li>
            <li>
            <i class="bi bi-star-fill"></i>
            </li>
            </ul>
             </div>
            </div>
            </div>
            <div class="review-texts">
            <p>
            Time very well spent with our driver and friend Suranga. The trip was spectacular, having the possibility of knowing what really matters through those who really know is a pleasure. I loved the trip, I loved meeting and having Sro Suranga as my driver. Fantastic landscapes, very good mood and a friend for life!!<br><br><br>
            </p>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>

            <div class="guide-area guide-style-one pt-110">
                <div class="container">
                <div class="row justify-content-center">
                <div class="col-lg-6 col-sm-10">
                <div class="section-head-alpha text-center mx-auto">
                <h2>Tour Guide</h2>
                <p>Our team brings a wealth of knowledge and experience to your tour.</p>
                </div>
                </div>
                </div>
                <div class="row d-flex justify-content-center g-4">
                <div class="col-lg-4 col-md-6 col-md-10">
                <div class="guide-card-beta">
                <div class="guide-image">
                <img src="{{asset('frontend/assets/images/guide/surangakularathne.jpg')}}" alt="">
                <ul class="guide-social-links d-flex justify-content-center flex-column gap-3">
                <li><a href="#"><i class='bx bxl-instagram'></i></a></li>
                <li><a href="https://www.facebook.com/profile.php?id=100008277678349"><i class='bx bxl-facebook'></i></a></li>
                <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
                <li><a href="https://api.whatsapp.com/send/?phone=94771349409&text=Hi+Travel+Sri+Lankan+Tours."><i class="bx bxl-whatsapp"></i></a></li>
                </ul>
                </div>
                <div class="guide-content">
                <a href="guide.html"><h4 class="guide-name">Suranga Kularathne</h4></a>
                <h6 class="guide-designation">Tour Guide</h6>
                </div>
                </div>
                </div>
                <div class="col-lg-4 col-md-6 col-md-10">
                <div class="guide-card-beta">
                <div class="guide-image">
                <img src="{{asset('frontend/assets/images/guide/nisal.jpg')}}" alt="">
                <ul class="guide-social-links d-flex justify-content-center flex-column gap-3">
                <li><a href="#"><i class='bx bxl-instagram'></i></a></li>
                <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
                <li><a href="#"><i class="bx bxl-whatsapp"></i></a></li>
                </ul>
                </div>
                <div class="guide-content">
                <a href="guide.html"><h4 class="guide-name">Nisal</h4></a>
                <h6 class="guide-designation">Tour Guide</h6>
                </div>
                </div>
                </div>
                <div class="col-lg-4 col-md-6 col-md-10">
                <div class="guide-card-beta">
                <div class="guide-image">
                <img src="{{asset('frontend/assets/images/guide/avatar.jpg')}}" alt="">
                <ul class="guide-social-links d-flex justify-content-center flex-column gap-3">
                <li><a href="#"><i class='bx bxl-instagram'></i></a></li>
                <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
                <li><a href="#"><i class="bx bxl-whatsapp"></i></a></li>
                </ul>
                </div>
                <div class="guide-content">
                <a href="guide.html"><h4 class="guide-name">Asanka</h4></a>
                <h6 class="guide-designation">Tour Guide</h6>
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
