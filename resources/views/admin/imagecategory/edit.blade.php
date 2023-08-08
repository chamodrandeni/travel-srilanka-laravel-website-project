@extends('admin.layouts.app')
@section('title', 'Update Image Category')
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
                    <form class="theme-form mega-form" action="{{ url('update-imagecategory/'.$imagecategory->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h5>Update Image Category</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label-title">Category Name</label>
                                <input class="form-control" type="text" value="{{ $imagecategory->img_name }}" placeholder="Category name" name="img_name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label-title  ">Category Description</label>
                                <textarea name="description" rows="3" class="form-control">{{ $imagecategory->description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label  class="form-label-title ">Tile</label>
                                <select class="form-control js-example-basic-single col-sm-12" name="tile">
                                    <option value="">Select Status</option>
                                    <option value="1" {{ $imagecategory->tile == 1 ? 'selected' : '' }}>Tile 01(size:570x280)</option>
                                    <option value="2" {{ $imagecategory->tile == 2 ? 'selected' : '' }}>Tile 02(size:270x280)</option>
                                    <option value="3" {{ $imagecategory->tile == 3 ? 'selected' : '' }}>Tile 03(size:270x280)</option>
                                    <option value="4" {{ $imagecategory->tile == 4 ? 'selected' : '' }}>Tile 04(size:270x280)</option>
                                    <option value="5" {{ $imagecategory->tile == 5 ? 'selected' : '' }}>Tile 05(size:270x280)</option>
                                    <option value="6" {{ $imagecategory->tile == 6 ? 'selected' : '' }}>Tile 06(size:570x280)</option>
                                </select>
                            </div>
                            @if ($imagecategory->image)
                            <img src="{{ asset('assets/uploads/imagecategory/'.$imagecategory->image) }}" alt="Image Category Image" class="imgedit">
                            @endif
                            <div class="mb-3">
                                <label class="form-label-title">Update Thumbnail Image</label>
                                <input type="file" class="form-control" name="image">
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

