@extends('admin.layouts.app')
@section('title', 'Testimonial Details')
@section('keywords', 'dashboard, home')
@section('description', 'Travel Sri Lankan Tours Dashboard')

@section('css')
    <!-- Google font-->
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&amp;family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <!-- FontAsowme css start  -->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/font-awesome.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/vendors/themify.css')}}">
    <!-- ratio start -->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/ratio.css')}}">

    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/vendors/feather-icon.css')}}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/vendors/scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/vendors/animate.css')}}">
    <!-- Plugins css Ends-->
    <!-- datepicker -->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/vendors/date-picker.css')}}">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/vendors/bootstrap.css')}}">
    <!-- vector map css start -->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/vector-map.css')}}">
    <!-- vector map css start -->
    <!-- slick slider-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/slick-theme.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/custom.css')}}">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/responsive.css')}}">
@endsection

@section('js')
    <!-- latest jquery-->
    <script src="{{asset('backend/assets/js/jquery-3.5.1.min.js')}}"></script>
    <!-- Bootstrap js-->
    <script src="{{asset('backend/assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <!-- feather icon js-->
    <script src="{{asset('backend/assets/js/icons/feather-icon/feather.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/icons/feather-icon/feather-icon.js')}}"></script>
    <!-- scrollbar js-->
    <script src="{{asset('backend/assets/js/scrollbar/simplebar.js')}}"></script>
    <script src="{{asset('backend/assets/js/scrollbar/custom.js')}}"></script>
    <!-- Sidebar jquery-->
    <script src="{{asset('backend/assets/js/config.js')}}"></script>


    <!-- tooltip init js  start-->
    <script src="{{asset('backend/assets/js/tooltip-init.js')}}"></script>
    <!-- tooltip init js  end-->

    <!-- slick js start -->
    <script src="{{asset('backend/assets/js/slick.js')}}"></script>
    <!-- slick js end -->

    <!-- Plugins JS start-->
    <script src="{{asset('backend/assets/js/sidebar-menu.js')}}"></script>
    <script src="{{asset('backend/assets/js/notify/bootstrap-notify.min.js')}}"></script>


    <script src="{{asset('backend/assets/js/notify/index.js')}}"></script>
    <script src="{{asset('backend/assets/js/typeahead/handlebars.js')}}"></script>
    <script src="{{asset('backend/assets/js/typeahead/typeahead.bundle.js')}}"></script>
    <script src="{{asset('backend/assets/js/typeahead/typeahead.custom.js')}}"></script>
    <script src="{{asset('backend/assets/js/typeahead-search/handlebars.js')}}"></script>
    <script src="{{asset('backend/assets/js/typeahead-search/typeahead-custom.js')}}"></script>
    <!-- Plugins JS Ends-->

    <script src="{{asset('backend/assets/js/datepicker/date-picker/datepicker.js')}}"></script>

    <script src="{{asset('backend/assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>

    <script src="{{asset('backend/assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
    <!-- Apexchar js start -->

    <script src="{{asset('backend/assets/js/chart/apex-chart/moment.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/chart/apex-chart/apex-chart.js')}}"></script>
    <script src="{{asset('backend/assets/js/chart/apex-chart/stock-prices.js')}}"></script>
    <script src="{{asset('backend/assets/js/chart/apex-chart/chart-custom.js')}}"></script>
    <!-- Apexchar js start -->
    <!-- ratio start  -->
    <script src="{{asset('backend/assets/js/ratio.js')}}"></script>
    <!-- vector map start -->
    <!-- customizer js start  -->
    <script src="{{asset('backend/assets/js/customizer.js')}}"></script>
    <!-- customizer js start  -->
    <script src="{{asset('backend/assets/js/vector-map/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('backend/assets/js/vector-map/map-vector.js')}}"></script>
    <!-- vector map end -->
    <!-- Theme js-->
    <script src="{{asset('backend/assets/js/script.js')}}"></script>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header  card-header--2 package-card">
                    <div>
                        <h5>Testimonial Details</h5>
                    </div>
                    <div>
                        <td>
                            <a href="{{ url('edit-testimonial/'.$testimonial->id)}}" class="btn btn-primary"><i class="fa-sharp fa-solid fa-pen-to-square" style="color: #3aa52c;"></i></a>
                        </td>
                        <td>
                            <a href="{{ url('delete-testimonial/'.$testimonial->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash" style="color: #d51010;"></i></a>
                        </td>
                    </div>
                </div>

                <div class="card-body">
                    <section class="single-section small-section bg-inner">
                        <div class="row">
                            <div class="col-12">
                                <div class="description-section tab-section">
                                    <div class="about-sec ">
                                        <h6>Id</h6>
                                        <p>{{ $testimonial->id }}</p>
                                        <h6>Name</h6>
                                        <p>{{ $testimonial->name }}
                                        </p>
                                        <h6>Message</h6>
                                        <p class="bottom-space">{{ $testimonial->message }}
                                        </p>
                                        <h6>Aveter</h6>
                                        <img src="{{ $testimonial->aveter }}" class="cate-image-view">
                                        <h6>Status</h6>
                                        <p class="bottom-space">
                                            @if ($testimonial->status == 1)
                                                Active
                                            @endif
                                            @if ($testimonial->status == 0)
                                                Deactive
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- section end -->
                </div>
            </div>
        </div>
    </div>
@endsection
