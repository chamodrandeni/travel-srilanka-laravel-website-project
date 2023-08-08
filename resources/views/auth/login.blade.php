@extends('layouts.app')

@section('content')
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="login-card">
                    <div>
                        <div>
                            <a class="logo" href="./">
                                <img class="img-fluid for-light"
                                    src="{{asset('backend/assets/images/logo/logo-l.png')}}" width="200px" alt="looginpage"><img
                                    class="img-fluid for-dark" src="{{asset('backend/assets/images/logo/logo-white.png')}}"
                                    alt="looginpage">
                            </a>
                        </div>
                        <div class="login-main">
                            <form method="POST" action="{{ route('login') }}" class="theme-form">
                                @csrf
                                <h4>{{ __('Sign in to account') }}</h4>
                                <p>{{ __('Enter your email & password to login') }}</p>
                                <div class="form-group">
                                    <label for="email" class="col-form-label form-label-title">{{ __('Email Address') }}</label>

                                    <div class="form-input position-relative">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password" class="col-form-label form-label-title">{{ __('Password') }}</label>

                                    <div class="form-input position-relative">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-0">
                                    <div class="p-0 pt-2">
                                        <input name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} type="checkbox">
                                        <label class="text-muted" for="remember">{{ __('Remember password') }}</label>
                                    </div>
                                    <div class="text-end mt-3">
                                        <button class="btn btn-primary btn-block w-100" type="submit">{{ __('Login') }}</button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                {{-- <h6 class="text-muted mt-4 or">{{ __('Or Sign in with') }}</h6>
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
                                <p class="mt-4 mb-0 text-center">{{ __('Don\'t have account?') }}<a class="ms-2"
                                        href="{{ route('register') }}">{{ __('Create Account') }}</a>
                                </p> --}}
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
