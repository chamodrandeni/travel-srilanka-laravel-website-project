<header>
    <div class="header-area header-style-three position-absolute w-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-2 col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12 align-items-center d-xl-flex d-lg-block">
                    <div class="nav-logo d-flex justify-content-between align-items-center">
                        <a href="./"><img src="{{asset('frontend/assets/images/logo-w.png')}}" alt="logo" width="70%"></a>
                        <div class="mobile-menu d-flex ">
                            <div class="d-flex align-items-center">
                                <div class="nav-right-icons d-xl-none d-flex align-items-center ">
                                    <div class="user-dropdown">
                                        <i class='bx bx-user-circle'></i>
                                        <ul class="user-drop-list">
                                        @if (Route::has('login'))
                                            @auth
                                                <li><a href="{{ url('/home') }}">My Account</a></li>
                                                <li><a href="#">Setting</a></li>
                                            @else
                                                <li><a href="{{ route('login') }}">Login</a></li>
                                                {{-- @if (Route::has('register'))
                                                    <li><a href="{{ route('register') }}">Registration</a></li>
                                                @endif --}}
                                            @endauth
                                        @endif
                                        </ul>
                                    </div>
                                    <div class="category-toggle"><i class='bx bx-category'></i></div>
                                </div>
                                <a href="javascript:void(0)" class="hamburger d-block d-xl-none">
                                    <span class="h-top"></span>
                                    <span class="h-middle"></span>
                                    <span class="h-bottom"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-8 col-lg-9 col-md-8 col-sm-6 col-xs-6">
                    <nav class="main-nav">
                        <div class="inner-logo d-xl-none text-center">
                            <a href="./"><img src="{{asset('frontend/assets/images/logo.png')}}" alt=""></a>
                        </div>
                        <ul>
                            <li><a href="./">Home</a></li>
                            <li class="has-child-menu">
                                <a href="javascript:void(0)">Packages</a>
                                <i class="fl flaticon-plus">+</i>
                                <ul class="sub-menu">
                                    @foreach ($packagesall as $item)
                                        <li><a href="{{ url('package-details/'.$item->id)}}">{{ $item->packname }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="has-child-menu">
                                <a href="javascript:void(0)">Gallery</a>
                                <i class="fl flaticon-plus">+</i>
                                <ul class="sub-menu">
                                    @foreach ($imagecategoryall as $item)
                                        <li><a href="{{ url('gallery/'.$item->id)}}">{{ $item->img_name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="about">About Us</a></li>
                            <li><a href="contact">Contact Us</a></li>
                            <li><a href="inquirys">Inquirys</a></li>
                            <li class="has-child-menu">
                                <a href="javascript:void(0)">User</a>
                                <i class="fl flaticon-plus">+</i>
                                <ul class="sub-menu">
                                    @if (Route::has('login'))
                                        @auth
                                            <li><a href="{{ url('/home') }}">My Account</a></li>
                                            <li><a href="#">Setting</a></li>
                                        @else
                                            <li><a href="{{ route('login') }}">Login</a></li>
                                            {{-- @if (Route::has('register'))
                                                <li><a href="{{ route('register') }}">Registration</a></li>
                                            @endif --}}
                                        @endauth
                                    @endif
                                </ul>
                            </li>
                         </ul>
                        <div class="inner-contact-options d-xl-none">
                            <div class="contact-box-inner"><i class="bi bi-telephone-fill"></i> <a href="tel:+94771349409">+94 77 134 9409</a></div>
                            <div class="contact-box-inner"><i class="bi bi-envelope-fill"></i> <a href="mailto:info@travelsrilankantours.com">info@travelsrilankantours.com</span></a></div>
                        </div>
                    </nav>
                </div>
                <div class="col-xxl-3 col-xl-2 col-lg-1">
                    <div class="nav-right d-xl-flex d-none">
                        <div class="nav-right-hotline d-xxl-flex d-none">
                            <div class="hotline-icon">
                                <img src="{{asset('frontend/assets/images/icons/header-phone.svg')}}" alt="">
                            </div>
                        <div class="hotline-info">
                            <span>Hot Line Number</span>
                            <h6><a href="tel:8801761111456">+880 176 1111 456</a></h6>
                        </div>
                    </div>
                    <div class="nav-right-icons gap-3">
                        <div class="header-search search-btn">
                            <i class='bx bx-search-alt'></i>
                        </div>
                        <div class="category-toggle"><i class='bx bx-category'></i></div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</header>
