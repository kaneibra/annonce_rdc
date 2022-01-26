@extends('layouts.app')
@section('title','SE CONNECTER')
@section('content')
{{-- <div class="container ">
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
  <!-- breedcrumb section start  -->
  <section class="breedcrumb" style="background: url('assets/images/bg/bg-04.jpg') center center/cover no-repeat;">
    <div class="container">
        <h2 class="breedcrumb__title text--heading-2">Sign In</h2>
        <ul class="breedcrumb__page">
            <li class="breedcrumb__page-item">
                <a href="home.html" class="breedcrumb__page-link text--body-3">Home</a>
            </li>
            <li class="breedcrumb__page-item">
                <a href="#" class="breedcrumb__page-link text--body-3">/</a>
            </li>
            <li class="breedcrumb__page-item">
                <a href="#" class="breedcrumb__page-link text--body-3">Account</a>
            </li>
            <li class="breedcrumb__page-item">
                <a href="#" class="breedcrumb__page-link text--body-3">/</a>
            </li>
            <li class="breedcrumb__page-item">
                <a href="#" class="breedcrumb__page-link text--body-3">Sign In</a>
            </li>
        </ul>
    </div>
</section>
<!-- breedcrumb section end  -->

<!-- registration section start   -->
<section class="section registration">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-2 order-lg-0">
                <div class="registration__features">
                    <div class="registration__features-item">
                        <span class="icon">
                            <img src="{{asset('assets/images/icon/chart.png')}}" alt="chart" />
                        </span>
                        <div class="registration__features-info">
                            <h2 class="text--body-2-600">Manage Your Ads</h2>
                            <p class="text--body-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam commodo vel ligula.</p>
                        </div>
                    </div>
                    <div class="registration__features-item">
                        <span class="icon">
                            <img src="{{asset('assets/images/icon/chart-circle.png')}}" alt="chart" />
                        </span>
                        <div class="registration__features-info">
                            <h2 class="text--body-2-600">Chat with Anyone, Anytime</h2>
                            <p class="text--body-3">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                        </div>
                    </div>
                    <div class="registration__features-item">
                        <span class="icon">
                            <img src="{{asset('assets/images/icon/chart.png')}}" alt="chart" />
                        </span>
                        <div class="registration__features-info">
                            <h2 class="text--body-2-600">245,365 Verified User</h2>
                            <p class="text--body-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam commodo vel ligula.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-0">
                <div class="registration-form">
                    <h2 class="text-center text--heading-1 registration-form__title">Sign in</h2>

                    <div class="registration-form__sign-btns">
                        <a href="#" class="btn-sign">
                            <span class="icon">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.43242 12.0865L3.73625 14.6854L1.19176 14.7393C0.431328 13.3288 0 11.7151 0 10.0003C0 8.34203 0.403281 6.77828 1.11812 5.40137H1.11867L3.38398 5.81668L4.37633 8.0684C4.16863 8.67391 4.05543 9.32391 4.05543 10.0003C4.05551 10.7343 4.18848 11.4377 4.43242 12.0865Z"
                                        fill="#FBBB00"
                                    />
                                    <path
                                        d="M19.8253 8.13184C19.9401 8.73676 20 9.36148 20 9.99996C20 10.7159 19.9247 11.4143 19.7813 12.0879C19.2945 14.3802 18.0225 16.3818 16.2605 17.7983L16.2599 17.7978L13.4066 17.6522L13.0028 15.1313C14.172 14.4456 15.0858 13.3725 15.5671 12.0879H10.2198V8.13184H15.6451H19.8253Z"
                                        fill="#518EF8"
                                    />
                                    <path
                                        d="M16.2599 17.7975L16.2604 17.798C14.5467 19.1755 12.3698 19.9997 10 19.9997C6.19177 19.9997 2.8808 17.8711 1.19177 14.7387L4.43244 12.0859C5.27693 14.3398 7.45111 15.9442 10 15.9442C11.0956 15.9442 12.122 15.648 13.0027 15.131L16.2599 17.7975Z"
                                        fill="#28B446"
                                    />
                                    <path
                                        d="M16.383 2.30219L13.1434 4.95437C12.2319 4.38461 11.1544 4.05547 10 4.05547C7.39344 4.05547 5.17859 5.73348 4.37641 8.06812L1.11871 5.40109H1.11816C2.78246 2.1923 6.13519 0 10 0C12.4264 0 14.6511 0.864297 16.383 2.30219Z"
                                        fill="#F14336"
                                    />
                                </svg>
                            </span>
                            Sign in With Google
                        </a>
                        <a href="#" class="btn-sign">
                            <span class="icon">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.6666 20H7.70126V10.1414H5V6.9316H7.70116V4.64762C7.70116 1.9411 8.89588 0 12.8505 0C13.6869 0 15 0.168134 15 0.168134V3.14858H13.6208C12.2155 3.14858 11.6668 3.5749 11.6668 4.75352V6.9316H14.9474L14.6553 10.1414H11.6667L11.6666 20Z"
                                        fill="#1877F2"
                                    />
                                </svg>
                            </span>
                            Sign in With Facebook
                        </a>
                    </div>

                    <h2 class="registration-form__alternative-title text--body-3">or Sign in With Email</h2>

                    <div class="registration-form__wrapper">
                        <form  method="POST" action="{{ route('login') }}" >
                            @csrf
                            <div class="input-field">
                                <input  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email-adress" />
                                <span class="icon icon--success">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="20" height="20" rx="10" fill="#27C200" />
                                        <path d="M14 7L8.5 12.5L6 10" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <span class="icon icon--alart">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.29 3.86L1.82002 18C1.64539 18.3024 1.55299 18.6453 1.55201 18.9945C1.55103 19.3437 1.64151 19.6871 1.81445 19.9905C1.98738 20.2939 2.23675 20.5467 2.53773 20.7239C2.83871 20.901 3.18082 20.9962 3.53002 21H20.47C20.8192 20.9962 21.1613 20.901 21.4623 20.7239C21.7633 20.5467 22.0127 20.2939 22.1856 19.9905C22.3585 19.6871 22.449 19.3437 22.448 18.9945C22.4471 18.6453 22.3547 18.3024 22.18 18L13.71 3.86C13.5318 3.56611 13.2807 3.32312 12.9812 3.15448C12.6817 2.98585 12.3438 2.89725 12 2.89725C11.6563 2.89725 11.3184 2.98585 11.0188 3.15448C10.7193 3.32312 10.4683 3.56611 10.29 3.86Z"
                                            fill="#FF4F4F"
                                        />
                                        <path d="M12 9V13" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12 17H12.01" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
                            <div class="input-field">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Your password"/>
                                <span class="icon icon--eye" onclick="showPassword('password',this)">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 12C1 12 5 4 12 4C19 4 23 12 23 12C23 12 19 20 12 20C5 20 1 12 1 12Z" stroke="#191F33" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z"
                                            stroke="#191F33"
                                            stroke-width="1.3"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                    </svg>
                                </span>
                                <span class="icon icon--success">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="20" height="20" rx="10" fill="#27C200" />
                                        <path d="M14 7L8.5 12.5L6 10" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <span class="icon icon--alart">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.29 3.86L1.82002 18C1.64539 18.3024 1.55299 18.6453 1.55201 18.9945C1.55103 19.3437 1.64151 19.6871 1.81445 19.9905C1.98738 20.2939 2.23675 20.5467 2.53773 20.7239C2.83871 20.901 3.18082 20.9962 3.53002 21H20.47C20.8192 20.9962 21.1613 20.901 21.4623 20.7239C21.7633 20.5467 22.0127 20.2939 22.1856 19.9905C22.3585 19.6871 22.449 19.3437 22.448 18.9945C22.4471 18.6453 22.3547 18.3024 22.18 18L13.71 3.86C13.5318 3.56611 13.2807 3.32312 12.9812 3.15448C12.6817 2.98585 12.3438 2.89725 12 2.89725C11.6563 2.89725 11.3184 2.98585 11.0188 3.15448C10.7193 3.32312 10.4683 3.56611 10.29 3.86Z"
                                            fill="#FF4F4F"
                                        />
                                        <path d="M12 9V13" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12 17H12.01" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>

                            <div class="registration-form__option">
                                <div class="form-check">
                                    <input class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}  id="checkme" />
                                    <label class="form-check-label" for="checkme">Keep me logged </label>
                                </div>

                                <div class="registration-form__forget-pass text--body-4">
                                    <a href="#">Forget Password</a>
                                </div>
                            </div>

                            <button class="btn btn--lg w-100 registration-form__btns" type="submit">
                                Sign In
                                <span class="icon--right">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.75 12H20.25" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M13.5 5.25L20.25 12L13.5 18.75" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </button>

                            <p class="text--body-3 registration-form__redirect">Don't Have Account ? <a href="signup.html">Sign Up</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
