<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>Travel Sri Lankan Tours</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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

    <div class="hero-area hero-style-three">
        <img src="{{asset('frontend/assets/images/banner/banner-plane.png')}}" class="img-fluid banner-plane">
        <div class="hero-main-wrapper position-relative">
            <div class="hero-social">
                <ul class="social-list d-flex justify-content-center align-items-center gap-4">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">instagram</a></li>
                    <li><a href="https://www.tripadvisor.com/Profile/TravelSriLankanTours">Tripadvisor</a></li>
                </ul>
            </div>
            <div class="swiper hero-slider-three ">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slider-bg-1">
                            <div class="container">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col-lg-8">
                                        <div class="hero3-content">
                                            <span class="title-top">Wellcome To Travel Sri Lankan Tours</span>
                                            <h1>Journey to Explore Ceylon</h1>
                                            <p>If you are planning a trip in our beautiful country, We are very happy to assist you with your transportation needs and if you wish we can book accommodations and arrange sight-seeing tours as well.</p>
                                            <a href="#" class="button-fill-primary banner3-btn">Book Your Travel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="slider-bg-3">
                            <div class="container">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col-lg-8">
                                        <div class="hero3-content">
                                            <span class="title-top">Wellcome To Travel Sri Lankan Tours</span>
                                            <h1>Enjoy Your New Adventure</h1>
                                            <p>Discovery Sri Lanka in the deep, Sri Lanka holiday packages for individual, family and small groups, private Sri Lanka tour packages, hidden places far from touristic routes</p>
                                            <a href="#" class="button-fill-primary banner3-btn">Book Your Travel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-arrows text-center d-lg-flex flex-column d-none gap-5">
            <div class="hero-prev3" tabindex="0" role="button" aria-label="Previous slide"> <i class="bi bi-arrow-left"></i></div>
            <div class="hero-next3" tabindex="0" role="button" aria-label="Next slide"><i class="bi bi-arrow-right"></i></div>
        </div>
    </div>
</div>

<div class="searchbar-section">
    <div class="container">
        <div class="multi-main-searchber">
            <div class="row g-4">
                <div class="col-lg-10">
                    <div class="row gx-0 gy-4">
                        <div class="col-lg-3 col-md-6">
                            <div class="search-box-single destination-box">
                                <div class="searchbox-icon">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <div class="searchbox-input">
                                    <label for="deatination_drop">Destination</label>
                                    <select data-placeholder="Where Are You Going?" id="deatination_drop">
                                        <option value="">Where Are You Going?</option>
                                        <optgroup label="India">
                                            <option>
                                            Down south
                                            </option>
                                            <option>
                                            Kandy
                                            </option>
                                            <option>
                                            NUwara Eliya
                                            </option>
                                            <option>
                                            Anuradhapura
                                            </option>
                                            <option>
                                            Jaffna
                                            </option>
                                            </optgroup>
                                            <optgroup label=" Bangladash">
                                            <option>
                                            Yala
                                            </option>
                                            <option>
                                            Trincomalee
                                            </option>
                                            <option>
                                            Sigiriya
                                            </option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="search-box-single type-box">
                                <div class="searchbox-icon">
                                    <i class="bi bi-text-paragraph"></i>
                                </div>
                                <div class="searchbox-input">
                                    <label for="activity-dropdown">Travel Type</label>
                                    <select class="defult-select-drowpown" data-placeholder="All Activity" id="activity-dropdown">
                                        <option value="All">All Activity</option>
                                        <option value="Vehicle Only">Vehicle Only</option>
                                        <option value="Vehicle with Guide">Vehicle with Guide</option>
                                        <option value="Accommodation">Accommodation</option>
                                        <option value="Foods">Foods</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="search-box-single type-box">
                                <div class="searchbox-icon">
                                    <i class="bi bi-person-plus"></i>
                                </div>
                                <div class="searchbox-input">
                                    <label for="person-dropdown">Person</label>
                                    <select class="defult-select-drowpown" id="person-dropdown">
                                        <option selected value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="12 +">12 +</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="search-box-single date-box">
                                <div class="searchbox-icon">
                                    <i class="bi bi-capslock"></i>
                                </div>
                                <div class="searchbox-input date-picker-input">
                                    <label for="datepicker">When</label>
                                    <input placeholder="Select your date" type="text" name="checkIn" id="datepicker" value="" class="calendar">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="main-form-submit">
                        <button type="submit">Find Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="package-area package-style-two pt-110 chain">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-8 col-sm-10">
                <div class="section-head-alpha">
                    <h2>Best Rating Packages</h2>
                    <p>Everything you need in Sri Lanka with <b>"Travel Sri lAnkan Tours"</b></p>
                </div>
            </div>
        <div class="col-lg-4 col-sm-10">
        <div class="package-btn text-lg-end">
            <a href="#" class="button-fill-primary all-package-btn">View All Packages</a>
        </div>
    </div>
</div>
<div class="row d-flex justify-content-center g-4">
    <div class="col-lg-4 col-md-6 col-sm-10  fadeffect">
        <div class="package-card-beta">
            <div class="package-thumb">
                <a href="#"><img src="{{asset('frontend/assets/images/package/package1.jpg')}}" alt=""></a>
                <p class="card-lavel">
                    <i class="bi bi-clock"></i> <span>3 Day & 2 night</span>
                </p>
            </div>
            <div class="package-card-body">
                <h3 class="p-card-title"><a href="#">Honeymoon and Romance tours.</a></h3>
                <div class="p-card-bottom">
                <div class="book-btn">
                    <a href="#">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
                </div>
                <div class="p-card-info">
                    <span>From</span>
                    <h6>$690.00</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-4 col-md-6 col-sm-10  fadeffect">
    <div class="package-card-beta">
        <div class="package-thumb">
            <a href="#"><img src="{{asset('frontend/assets/images/package/package2.jpg')}}" alt=""></a>
            <p class="card-lavel">
                <i class="bi bi-clock"></i> <span>5 Day & 6 night</span>
            </p>
        </div>
        <div class="package-card-body">
            <h3 class="p-card-title"><a href="#">Wild life and adventure tour</a></h3>
            <div class="p-card-bottom">
                <div class="book-btn">
                    <a href="#">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
                </div>
                <div class="p-card-info">
                    <span>From</span>
                    <h6>$88.00 <span>Per Person</span></h6>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-4 col-md-6 col-sm-10 fadeffect">
    <div class="package-card-beta">
        <div class="package-thumb">
            <a href="#"><img src="{{asset('frontend/assets/images/package/package3.jpg')}}" alt=""></a>
            <p class="card-lavel">
            <i class="bi bi-clock"></i> <span>4 Day & 3 night</span>
            </p>
        </div>
        <div class="package-card-body">
            <h3 class="p-card-title"><a href="#">Culture & Heritage Tours</a></h3>
            <div class="p-card-bottom">
                <div class="book-btn">
                    <a href="#">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
                </div>
                <div class="p-card-info">
                    <span>From</span>
                    <h6>$67.00 <span>Per Person</span></h6>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-4 col-md-6 col-sm-10 fadeffect">
    <div class="package-card-beta">
        <div class="package-thumb">
            <a href="#"><img src="{{asset('frontend/assets/images/package/package4.jpg')}}" alt=""></a>
            <p class="card-lavel">
            <i class="bi bi-clock"></i> <span>5 Day & 6 night</span>
            </p>
        </div>
        <div class="package-card-body">
            <h3 class="p-card-title"><a href="#">Beach & Relaxing tour</a></h3>
            <div class="p-card-bottom">
                <div class="book-btn">
                    <a href="#">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
                </div>
                <div class="p-card-info">
                    <span>From</span>
                    <h6>$91.00 <span>Per Person</span></h6>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-4 col-md-6 col-sm-10 fadeffect">
    <div class="package-card-beta">
        <div class="package-thumb">
            <a href="#"><img src="{{asset('frontend/assets/images/package/package5.jpg')}}" alt=""></a>
            <p class="card-lavel">
            <i class="bi bi-clock"></i> <span>4 Day & 3 night</span>
            </p>
        </div>
        <div class="package-card-body">
            <h3 class="p-card-title"><a href="#">Luxury tour</a></h3>
            <div class="p-card-bottom">
                <div class="book-btn">
                    <a href="#">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
                </div>
                <div class="p-card-info">
                    <span>From</span>
                    <h6>$599.00 <span>Per Person</span></h6>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-4 col-md-6 col-sm-10 fadeffect">
    <div class="package-card-beta">
        <div class="package-thumb">
            <a href="#"><img src="{{asset('frontend/assets/images/package/package6.jpg')}}" alt=""></a>
            <p class="card-lavel">
            <i class="bi bi-clock"></i> <span>3 Day & 2 night</span>
            </p>
        </div>
<div class="package-card-body">
<h3 class="p-card-title"><a href="#">Family & kids tour</a></h3>
<div class="p-card-bottom">
<div class="book-btn">
<a href="#">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
</div>
<div class="p-card-info">
<span>From</span>
<h6>$85.00 <span>Per Person</span></h6>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="package-page-btn text-center mt-60">
<a href="#" class="button-fill-round">View All</a>
</div>
</div>
</div>


<div class="destination-area destination-style-two pt-110 pb-110">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8 col-sm-10 ">
<div class="section-head-alpha text-center mx-auto">
<h2>Top Destination</h2>
<p>We can ensure you’ll discover a lot of beautiful places that Sri Lanka</p>
</div>
</div>
</div>
<div class="row d-flex justify-content-center g-4">
<div class="col-lg-6 col-md-12 col-sm-10 fadeffect">
<div class="destination-item">
<div class="destination-img">
<img src="{{asset('frontend/assets/images/destination/sigiriya.jpg')}}" alt="">
</div>
<div class="destination-overlay">
<div class="content">
<a href="#"><h5>Sigiriya</h5></a>
<a href="#"><h6>45 Place</h6></a>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-10 fadeffect">
<div class="destination-item">
<div class="destination-img">
<img src="{{asset('frontend/assets/images/destination/kandy.jpg')}}" alt="">
</div>
<div class="destination-overlay">
<div class="content">
<a href="#"><h5>Kandy</h5></a>
<a href="#"><h6>35 Place</h6></a>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-10 fadeffect">
<div class="destination-item">
<div class="destination-img">
<img src="{{asset('frontend/assets/images/destination/yala.jpg')}}" alt="">
</div>
<div class="destination-overlay">
<div class="content">
<a href="#"><h5>Yala</h5></a>
<a href="#"><h6>15 Place</h6></a>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-10 fadeffect">
<div class="destination-item">
<div class="destination-img">
<img src="{{asset('frontend/assets/images/destination/nuwaraeliya.jpg')}}" alt="">
</div>
<div class="destination-overlay">
<div class="content">
<a href="#"><h5>Nuwara Eliya</h5></a>
<a href="#"><h6>34 Place</h6></a>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-10 fadeffect">
<div class="destination-item">
<div class="destination-img">
<img src="{{asset('frontend/assets/images/destination/jaffna.jpg')}}" alt="">
</div>
<div class="destination-overlay">
<div class="content">
<a href="#"><h5>Jaffna</h5></a>
<a href="#"><h6>10 Place</h6></a>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12 col-sm-10 fadeffect">
<div class="destination-item">
<div class="destination-img">
<img src="{{asset('frontend/assets/images/destination/ella.jpg')}}" alt="">
</div>
<div class="destination-overlay">
<div class="content">
<a href="#"><h5>Ella</h5></a>
<a href="#"><h6>67 Place</h6></a>
</div>
</div>
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


<div class="more-update-section">
<div class="container">
<div class="row d-flex justify-content-center align-items-center gy-5">
<div class="col-lg-6 text-lg-start text-center">
<div class="more-update-content">
<h2>Join Us for More Update</h2>
<p>For Coupons, Tours, Events, Newsletters, And More!</p>
</div>
</div>
<div class="col-lg-3 text-lg-end text-center">
<button class="button-fill-primary update-btn">Join Now</button>
</div>
</div>
</div>
</div>

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
</body>
</html>
