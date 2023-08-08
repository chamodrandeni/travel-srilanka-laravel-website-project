<div class="sidebar-wrapper">
                <div>
                    <div class="logo-wrapper">
                        <span class="back">Back</span>
                        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                        <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid">
                            </i></div>
                    </div>
                    <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid"
                                src="{{asset('backend/assets/images/logo/logo-icon.png')}}" alt=""></a></div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                        <div id="sidebar-menu">
                            <ul class="sidebar-links" id="simple-bar">
                                <li class="back-btn"><a href="index.html"><img class="img-fluid"
                                            src="{{asset('backend/assets/images/logo/logo-icon.png')}}" alt=""></a>
                                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                            aria-hidden="true"></i></div>
                                </li>

                                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                                        href="{{ url('/dashboard') }}"><i data-feather="home"> </i><span>Dashboard</span></a></li>

                                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i
                                            data-feather="package"></i><span>Tour Packages</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="{{ url('packages') }}">All Packages</a></li>
                                        <li><a href="{{ url('add-packages') }}">Add New Package</a></li>
                                        <li><a href="{{ url('tourtype') }}">All Tour Type</a></li>
                                        <li><a href="{{ url('add-tourtype') }}">Add Tour Type</a></li>
                                        <li><a href="{{ url('tourplan') }}">All Tour Plan</a></li>
                                        <li><a href="{{ url('add-tourplan') }}">Add New Tour Plan</a></li>
                                        <li><a href="{{ url('tourplanimage') }}">All Tour Plan Image's</a></li>
                                        <li><a href="{{ url('add-tourplanimage') }}">Add New Tour Plan Images</a></li>
                                    </ul>
                                </li>

                                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i
                                    data-feather="mail"></i><span>Mails</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="{{ url('mails') }}">All Mails</a></li>
                                    </ul>
                                </li>

                                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i
                                    data-feather="mail"></i><span>EMails</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="{{ url('emailview') }}">All Email's</a></li>
                                    </ul>
                                </li>

                                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i
                                    data-feather="help-circle"></i><span>Inquiry</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="{{ url('inquiry') }}">All Inquiry</a></li>
                                    </ul>
                                </li>

                                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i
                                    data-feather="grid"></i><span>Gallery Image</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="{{ url('gallery') }}">All Gallery Image</a></li>
                                        <li><a href="{{ url('add-gallery') }}">Add New Gallery Image</a></li>
                                        <li><a href="{{ url('imagecategory') }}">All Image Category</a></li>
                                        <li><a href="{{ url('add-imagecategory') }}">Add New Image Category</a></li>
                                    </ul>
                                </li>

                                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i
                                    data-feather="map"></i><span>Testimonial</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="{{ url('testimonial') }}">All Testimonial</a></li>
                                        <li><a href="{{ url('add-testimonial') }}">Add New Testimonial</a></li>
                                    </ul>
                                </li>

                                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i
                                    data-feather="bookmark"></i><span>Booking</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="{{ url('booking') }}">All Booking's</a></li>
                                    </ul>
                                </li>

                                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i
                                    data-feather="settings"></i><span>Setting</span></a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="{{ url('setting') }}">All Setting</a></li>
                                    </ul>
                                </li>

                                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                                        href="reviews.html"><i data-feather="message-square">
                                        </i><span>Reviews</span></a>
                                </li>

                            </ul>
                        </div>
                        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                    </nav>
                </div>
            </div>
