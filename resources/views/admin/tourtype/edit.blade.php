@extends('admin.layouts.app')
@section('title', 'Update Tour Type')
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
    <div class="col-12">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <form class="theme-form mega-form" action="{{ url('update-tourtype/'.$tourtype->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h5>Update Tour Type</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label-title">Tour Type Name</label>
                                <input class="form-control" type="text" value="{{ $tourtype->name }}" placeholder="Enter Tour Type Name" name="name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label-title">Group Size</label>
                                <select class="form-control js-example-basic-single col-sm-12" name="grouptype">
                                    <option value="">Select Status</option>
                                    <option value="1" {{ $tourtype->grouptype == 1 ? 'selected' : '' }}>1 People</option>
                                    <option value="2" {{ $tourtype->grouptype == 2 ? 'selected' : '' }}>2 People</option>
                                    <option value="3" {{ $tourtype->grouptype == 3 ? 'selected' : '' }}>3 People</option>
                                    <option value="4" {{ $tourtype->grouptype == 4 ? 'selected' : '' }}>4 People</option>
                                    <option value="5" {{ $tourtype->grouptype == 5 ? 'selected' : '' }}>5 People</option>
                                    <option value="6" {{ $tourtype->grouptype == 6 ? 'selected' : '' }}>6 People</option>
                                    <option value="7" {{ $tourtype->grouptype == 7 ? 'selected' : '' }}>7 People</option>
                                    <option value="8" {{ $tourtype->grouptype == 8 ? 'selected' : '' }}>8 People</option>
                                    <option value="9" {{ $tourtype->grouptype == 9 ? 'selected' : '' }}>9 People</option>
                                    <option value="10" {{ $tourtype->grouptype == 10 ? 'selected' : '' }}>10 People</option>
                                    <option value="11" {{ $tourtype->grouptype == 11 ? 'selected' : '' }}>11 People</option>
                                    <option value="12" {{ $tourtype->grouptype == 12 ? 'selected' : '' }}>12 People</option>
                                    <option value="13" {{ $tourtype->grouptype == 13 ? 'selected' : '' }}>13 People</option>
                                    <option value="14" {{ $tourtype->grouptype == 14 ? 'selected' : '' }}>14 People</option>
                                    <option value="15" {{ $tourtype->grouptype == 15 ? 'selected' : '' }}>15 People</option>
                                    <option value="16" {{ $tourtype->grouptype == 16 ? 'selected' : '' }}>16 People</option>
                                    <option value="17" {{ $tourtype->grouptype == 17 ? 'selected' : '' }}>17 People</option>
                                    <option value="18" {{ $tourtype->grouptype == 18 ? 'selected' : '' }}>18 People</option>
                                    <option value="19" {{ $tourtype->grouptype == 19 ? 'selected' : '' }}>19 People</option>
                                    <option value="20" {{ $tourtype->grouptype == 20 ? 'selected' : '' }}>20 People</option>
                                    <option value="21" {{ $tourtype->grouptype == 21 ? 'selected' : '' }}>21 People</option>
                                    <option value="22" {{ $tourtype->grouptype == 22 ? 'selected' : '' }}>22 People</option>
                                    <option value="23" {{ $tourtype->grouptype == 23 ? 'selected' : '' }}>23 People</option>
                                    <option value="24" {{ $tourtype->grouptype == 24 ? 'selected' : '' }}>24 People</option>
                                    <option value="25" {{ $tourtype->grouptype == 25 ? 'selected' : '' }}>25 People</option>
                                    <option value="26" {{ $tourtype->grouptype == 26 ? 'selected' : '' }}>26 People</option>
                                    <option value="27" {{ $tourtype->grouptype == 27 ? 'selected' : '' }}>27 People</option>
                                    <option value="28" {{ $tourtype->grouptype == 28 ? 'selected' : '' }}>28 People</option>
                                    <option value="29" {{ $tourtype->grouptype == 29 ? 'selected' : '' }}>29 People</option>
                                    <option value="30" {{ $tourtype->grouptype == 30 ? 'selected' : '' }}>30 People</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label-title">Tour Guide Group</label>
                                <select class="form-control js-example-basic-single col-sm-12" name="guidetype">
                                    <option value="">Select Tour Guide Group</option>
                                    <option value="1" {{ $tourtype->guidetype == 1 ? 'selected' : '' }}>1 Guide</option>
                                    <option value="2" {{ $tourtype->guidetype == 2 ? 'selected' : '' }}>2 Guide</option>
                                    <option value="3" {{ $tourtype->guidetype == 3 ? 'selected' : '' }}>3 Guide</option>
                                    <option value="4" {{ $tourtype->guidetype == 4 ? 'selected' : '' }}>4 Guide</option>
                                    <option value="5" {{ $tourtype->guidetype == 5 ? 'selected' : '' }}>5 Guide</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label-title">Image Category</label>
                                <select class="form-control js-example-basic-single col-sm-12" name="imagecategory">
                                    <option value="">Select Image Category</option>
                                    @foreach ($imagecategory as $item)
                                        <option value="{{ $item->id }}" {{ $tourtype->imagecategory ? 'selected' : '' }}>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button class="btn btn-primary me-3">Update</button>
                            <button class="btn btn-outline-primary">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

