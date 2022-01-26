<h2>{{$exception->getMessage()}}</h2>

@extends('layouts/app')

@section('title','404')
@section('content')
     <!-- breedcrumb section start  -->
     <section class="breedcrumb" style="background: url('assets/images/bg/bg-04.jpg') center center/cover no-repeat;">
        <div class="container">
            <h2 class="breedcrumb__title text--heading-2">404 Error Page</h2>
            <ul class="breedcrumb__page">
                <li class="breedcrumb__page-item">
                    <a href="home.html" class="breedcrumb__page-link text--body-3">Home</a>
                </li>
                <li class="breedcrumb__page-item">
                    <a href="#" class="breedcrumb__page-link text--body-3">/</a>
                </li>
                <li class="breedcrumb__page-item">
                    <a href="#" class="breedcrumb__page-link text--body-3">404 Error Page</a>
                </li>
            </ul>
        </div>
    </section>
    <!-- breedcrumb section end  -->

    <!-- Error section start  -->
    <section class="section error text-center">
        <div class="container">
            <div class="error__img-wrapper">
                <img src="assets/images/bg/error.png" alt="error" />
            </div>
            <h2 class="error__title text--heading-1">The page you are looking for doesn't exist...</h2>
            <p class="error__brief text--body-3">We ran into an issue, but don’t worry, we’ll take care of it for sure.
            </p>
            <a href="home.html" class="error__back-btn btn">
                <span class="icon--left">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.25 12H3.75" stroke="white" stroke-width="1.6" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M10.5 5.25L3.75 12L10.5 18.75" stroke="white" stroke-width="1.6" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </span>
                Go Back Home
            </a>
        </div>
    </section>
    <!-- Error section end   -->

    <!-- Back To Top Btn -->
    <button class="scrollTop" >
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 20.25V3.75" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                stroke-linejoin="round" />
            <path d="M5.25 10.5L12 3.75L18.75 10.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                stroke-linejoin="round" />
        </svg>
    </button>

    <!-- Scripts Goes Here -->
    <script src="assets/plugins/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap.bundle.min.js"></script>
    
    <script src="assets/js/app.js"></script>


@endsection
   