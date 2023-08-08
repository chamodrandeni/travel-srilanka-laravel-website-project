@extends('layouts.app')

@section('content')
    <!-- login page start-->
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="login-card">
                    <div>
                        <div><a class="logo" href="./"><img class="img-fluid for-light"
                                    src="{{asset('backend/assets/images/logo/logo-l.png')}}" width="200px" alt="looginpage"><img
                                    class="img-fluid for-dark" src="{{asset('backend/assets/images/logo/logo-white.png')}}"
                                    alt="looginpage"></a></div>
                        <div class="login-main">
                            <form class="theme-form" method="POST" action="{{ route('register') }}">
                                @csrf
                                <h4>{{ __('Create your account') }}</h4>
                                <p>{{ __('Enter your personal details to create account') }}</p>
                                <div class="form-group">
                                    <label class="col-form-label form-label-title  pt-0">{{ __('Your Name') }}</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-form-label form-label-title ">{{ __('Email Address') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-form-label form-label-title ">{{ __('Password') }}</label>
                                    <div class="form-input position-relative">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    </div>
                                    @error('password')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password-confirm" class="col-form-label form-label-title ">{{ __('Confirm Password') }}</label>
                                    <div class="form-input position-relative">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <div class="pt-1 pb-1 p-0">
                                        <input id="agree" required type="checkbox">
                                        <label class="text-muted" for="agree">{{ __('Agree with') }}<a class="ms-2"
                                                href="#">{{ __('Privacy Policy') }}</a></label>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block w-100">{{ __('Create Account') }}</button>
                                </div>
                                <h6 class="text-muted mt-4 or">{{ __('Or Sign in with') }}</h6>
                                <div class="social mt-4">
                                    <div class="btn-showcase"><a class="btn btn-light"
                                            href="https://www.linkedin.com/login" target="_blank"><i
                                                class="txt-linkedin" data-feather="linkedin"></i> {{ __('LinkedIn') }} </a><a
                                            class="btn btn-light" href="https://twitter.com/login?lang=en"
                                            target="_blank"><i class="txt-twitter"
                                                data-feather="twitter"></i>{{ __('twitter') }}</a><a class="btn btn-light"
                                            href="https://www.facebook.com/" target="_blank"><i class="txt-fb"
                                                data-feather="facebook"></i>{{ __('facebook') }}</a></div>
                                </div>
                                <p class="mt-4 mb-0">{{ __('Already have an account?') }}<a class="ms-2"
                                        href="{{ route('login') }}" href="login.html">{{ __('Sign
                                        in') }}</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- latest jquery-->
        <script src="{{asset('backend/assets/js/jquery-3.5.1.min.js')}}"></script>
        <!-- Bootstrap js-->
        <script src="{{asset('backend/assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
        <!-- feather icon js-->
        <script src="{{asset('backend/assets/js/icons/feather-icon/feather.min.js')}}"></script>
        <script src="{{asset('backend/assets/js/icons/feather-icon/feather-icon.js')}}"></script>
        <!-- scrollbar js-->
        <!-- Sidebar jquery-->
        <script src="{{asset('backend/assets/js/config.js')}}"></script>
        <!-- Plugins JS start-->
        <!-- Plugins JS Ends-->
        <!-- Theme js-->
        <script src="{{asset('backend/assets/js/script.js')}}"></script>
        <!-- login js-->
        <!-- Plugin used-->
    </div>
@endsection
