@extends('layouts.app')

@section('title','commune List')
@section('content')
     <!-- breedcrumb section start  -->
     <section class="breedcrumb" style="background: url('assets/images/bg/bg-04.jpg') center center/cover no-repeat;">
        <div class="container">
            <h2 class="breedcrumb__title text--heading-2">Categories List</h2>
            <ul class="breedcrumb__page">
                <li class="breedcrumb__page-item">
                    <a href="{{route('acceuil')}}" class="breedcrumb__page-link text--body-3">Home</a>
                </li>
                <li class="breedcrumb__page-item">
                    <a href="#" class="breedcrumb__page-link text--body-3">/</a>
                </li>
                <li class="breedcrumb__page-item">
                    <a href="#" class="breedcrumb__page-link text--body-3">categories List</a>
                </li>
            </ul>
        </div>
    </section>
    <!-- breedcrumb section end  -->

    <!-- Blog-list Promo Section Start   -->
    <section class="promo-link">
        <div class="container">
            <a href="#">
                <img src="assets/images/promo-img-02.png" alt="" class="img-fluid">
            </a>
        </div>
    </section>

    <!-- Blog-list Promo Section End   -->
    @if (session('status'))
    <center>

        <h2 class="alert alert-success"> {{session('status')}}</h2>
    </center>
@endif
    <!-- Blog-list section start  -->
    <section class="blog-list section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="blog__sidebar">
                        <span class="toggle-icon">
                            <svg width="28" height="28" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.5 13.5H4.5C4.08579 13.5 3.75 13.8358 3.75 14.25V18C3.75 18.4142 4.08579 18.75 4.5 18.75H19.5C19.9142 18.75 20.25 18.4142 20.25 18V14.25C20.25 13.8358 19.9142 13.5 19.5 13.5Z" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M19.5 5.25H4.5C4.08579 5.25 3.75 5.58579 3.75 6V9.75C3.75 10.1642 4.08579 10.5 4.5 10.5H19.5C19.9142 10.5 20.25 10.1642 20.25 9.75V6C20.25 5.58579 19.9142 5.25 19.5 5.25Z" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                        <div class="blog__sidebar-wrapper">
                            <!--  Search-->
                            <div class="blog__sidebar-search blog__sidebar-item">
                                <h2 class="text--body-2-600 item-title">Search</h2>
                                <div class="input-field">
                                    <input type="text" placeholder="Search">
                                    <span class="icon">
                                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M21.0004 21.0004L16.6504 16.6504" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <!-- Category -->
                            <div class="blog__sidebar-category blog__sidebar-item">
                                <h2 class="text--body-2-600 item-title">Top Category</h2>
                                <div class="category">
                                        <div class="category-item">
                                            <a href="#">
                                                <img src="assets/images/category/img-01.jpg" alt="category-img">
                                                <h2 class="text--body-3">Food</h2>
                                            </a>
                                        </div>
                                        <div class="category-item">
                                            <a href="#">
                                                <img src="assets/images/category/img-02.jpg" alt="category-img">
                                                <h2 class="text--body-3">Travel</h2>
                                            </a>
                                        </div>
                                        <div class="category-item">
                                            <a href="#">
                                                <img src="assets/images/category/img-03.jpg" alt="category-img">
                                                <h2 class="text--body-3">Productivity</h2>
                                            </a>
                                        </div>
                                        <div class="category-item">
                                            <a href="#">
                                                <img src="assets/images/category/img-04.jpg" alt="category-img">
                                                <h2 class="text--body-3">Technology</h2>
                                            </a>
                                        </div>
                                        <div class="category-item">
                                            <a href="#">
                                                <img src="assets/images/category/img-05.jpg" alt="category-img">
                                                <h2 class="text--body-3">Art & Culture</h2>
                                            </a>
                                        </div>
                                        <div class="category-item">
                                            <a href="#">
                                                <img src="assets/images/category/img-06.jpg" alt="category-img">
                                                <h2 class="text--body-3">Business</h2>
                                            </a>
                                        </div>
                                </div>
                            </div>
                            <!-- Popular Tag -->
                            <div class="blog__sidebar-tag blog__sidebar-item">
                                <h2 class="text--body-2-600 item-title">Popular Tag</h2>
                                <div class="tags">
                                    <span class="tags-item text--body-3">Travel</span>
                                    <span class="tags-item text--body-3">Ad Posting</span>
                                    <span class="tags-item active text--body-3">Technology</span>
                                    <span class="tags-item text--body-3">Money</span>
                                    <span class="tags-item text--body-3">Productivity</span>
                                    <span class="tags-item text--body-3">Business</span>
                                    <span class="tags-item text--body-3">Art</span>
                                    <span class="tags-item text--body-3">learning</span>
                                </div>
                            </div>
                            <!-- Gallery -->
                            <div class="blog__sidebar-gallery blog__sidebar-item">
                                <h2 class="text--body-2-600 item-title">Gallery</h2>
                                <div class="gallery">
                                    <div class="gallery-item">
                                        <a class="galleryView" data-gall="gallery01" href="assets/images/gallery/img-lg-01.jpg">
                                            <img src="assets/images/gallery/img-01.png" alt="gallery-img">
                                        </a>
                                    </div>
                                    <div class="gallery-item">
                                        <a class="galleryView" data-gall="gallery01" href="assets/images/gallery/img-lg-02.jpg">
                                            <img src="assets/images/gallery/img-02.png" alt="gallery-img">
                                        </a>
                                    </div>
                                    <div class="gallery-item">
                                        <a class="galleryView" data-gall="gallery01" href="assets/images/gallery/img-lg-03.jpg">
                                            <img src="assets/images/gallery/img-03.png" alt="gallery-img">
                                        </a>
                                    </div>
                                    <div class="gallery-item">
                                        <a class="galleryView" data-gall="gallery01" href="assets/images/gallery/img-lg-04.jpg">
                                            <img src="assets/images/gallery/img-04.png" alt="gallery-img">
                                        </a>
                                    </div>
                                    <div class="gallery-item">
                                        <a class="galleryView" data-gall="gallery01" href="assets/images/gallery/img-lg-05.jpg">
                                            <img src="assets/images/gallery/img-05.png" alt="gallery-img">
                                        </a>
                                    </div>
                                    <div class="gallery-item">
                                        <a class="galleryView" data-gall="gallery01" href="assets/images/gallery/img-lg-01.jpg">
                                            <img src="assets/images/gallery/img-01.png" alt="gallery-img">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Recent Post -->
                            <div class="blog__sidebar-post blog__sidebar-item">
                                <h2 class="text--body-2-600 item-title">Recent Post</h2>
                                <div class="post">
                                    <div class="post-item">
                                        <a href="#" class="post-img">
                                            <img src="assets/images/gallery/img-01.png" alt="post-img">
                                        </a>
                                        <div class="post-info">
                                            <a href="#" class="text--body-3">Vivamus a viverra ipsum, ut interdum tellus. Donec quis...</a>
                                            <div class="post-review">
                                                <span class="date">Dec 15, 2021</span>
                                                <span class="dot"></span>
                                                <span class="comments">47 Comments</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-item">
                                        <a href="#" class="post-img">
                                            <img src="assets/images/gallery/img-02.png" alt="post-img">
                                        </a>
                                        <div class="post-info">
                                            <a href="#" class="text--body-3">Vivamus a viverra ipsum, ut interdum tellus. Donec quis...</a>
                                            <div class="post-review">
                                                <span class="date">Dec 15, 2021</span>
                                                <span class="dot"></span>
                                                <span class="comments">47 Comments</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-item">
                                        <a href="#" class="post-img">
                                            <img src="assets/images/gallery/img-03.png" alt="post-img">
                                        </a>
                                        <div class="post-info">
                                            <a href="#" class="text--body-3">Vivamus a viverra ipsum, ut interdum tellus. Donec quis...</a>
                                            <div class="post-review">
                                                <span class="date">Dec 15, 2021</span>
                                                <span class="dot"></span>
                                                <span class="comments">47 Comments</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Banner Promo -->
                            <div class="blog__sidebar-item blog-promo__img">
                                <a href="#">
                                    <img src="assets/images/promo-img-01.png" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="blog-list__wrapper">
                        
                 @foreach ($communes as $commune)
                     
                        <div class="blog-list__wrapper-item">
                            <div class="blog-card">
                                <div class="blog-card__left">
                                    <h5> {{$commune->name}}</h5>
                                </div>
                                <div class="blog-card__right">
                                    <ul class="blog-card__blog-info">
                                        <li class="blog-card__blog-info-item">
                                            <span class="icon">
                                                <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9 11.25C11.4853 11.25 13.5 9.23528 13.5 6.75C13.5 4.26472 11.4853 2.25 9 2.25C6.51472 2.25 4.5 4.26472 4.5 6.75C4.5 9.23528 6.51472 11.25 9 11.25Z" stroke="#00AAFF" stroke-width="1.3" stroke-miterlimit="10"></path>
                                                    <path d="M2.17871 15.1868C2.87028 13.9898 3.86467 12.9959 5.062 12.3048C6.25934 11.6138 7.61744 11.25 8.99988 11.25C10.3823 11.25 11.7404 11.6138 12.9377 12.3049C14.135 12.996 15.1294 13.9899 15.821 15.187" stroke="#00AAFF" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                            {{-- <h5 class="text--body-4 blog-card__username">Jane Cooper</h5> --}}
                                        </li>
                                        <li class="blog-card__blog-info-item">
                                            <span class="icon">
                                                <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3.19421 12.4454C2.35557 11.0316 2.06187 9.36037 2.36826 7.74539C2.67466 6.13042 3.56006 4.68285 4.85823 3.6745C6.15639 2.66615 7.77801 2.16638 9.41858 2.26904C11.0592 2.3717 12.6058 3.06973 13.7681 4.23206C14.9305 5.39438 15.6285 6.94104 15.7312 8.58161C15.8339 10.2222 15.3341 11.8438 14.3257 13.142C13.3174 14.4401 11.8698 15.3256 10.2549 15.632C8.63989 15.9384 6.96862 15.6447 5.55486 14.806L5.55488 14.806L3.22356 15.4721C3.12711 15.4996 3.02504 15.5009 2.92793 15.4757C2.83082 15.4506 2.74221 15.3999 2.67128 15.3289C2.60034 15.258 2.54967 15.1694 2.52451 15.0723C2.49935 14.9752 2.50061 14.8731 2.52817 14.7767L3.19426 12.4453L3.19421 12.4454Z" stroke="#00AAFF" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M9.19375 9C9.19375 9.10701 9.10701 9.19375 9 9.19375C8.89299 9.19375 8.80625 9.10701 8.80625 9C8.80625 8.89299 8.89299 8.80625 9 8.80625C9.10701 8.80625 9.19375 8.89299 9.19375 9Z" fill="#00AAFF" stroke="#00AAFF" stroke-width="1.3"></path>
                                                    <path d="M5.625 9.84375C6.09099 9.84375 6.46875 9.46599 6.46875 9C6.46875 8.53401 6.09099 8.15625 5.625 8.15625C5.15901 8.15625 4.78125 8.53401 4.78125 9C4.78125 9.46599 5.15901 9.84375 5.625 9.84375Z" fill="#00AAFF"></path>
                                                    <path d="M12.375 9.84375C12.841 9.84375 13.2188 9.46599 13.2188 9C13.2188 8.53401 12.841 8.15625 12.375 8.15625C11.909 8.15625 11.5312 8.53401 11.5312 9C11.5312 9.46599 11.909 9.84375 12.375 9.84375Z" fill="#00AAFF"></path>
                                                </svg>
                                            </span>
                                            {{-- <h5 class="text--body-4 blog-card__coment-num">36 Comments</h5> --}}
                                        </li>
                                    </ul>
                                    <a href="blog-details.html" class="blog-card__blog-caption text--body-2">
                                      {{-- {{$commune->name}} --}}
                                    </a>
                                    <p class="blog-card__description text--body-4">
                                        Quisque gravida justo ut neque ornare, nec malesuada sapien sagittis. Cras condimentum feugiat lectus, in facilisis arcu ultrices ut. Nullam hendrerit fringilla justo ut auctor. Praesent
                                        condimentum.
                                    </p>

                                    <a href="{{route('commune.edit',encrypt($commune->id))}}" class="blog-card__readmore">
                                        Edit
                                        <span class="icon">
                                            <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3.125 10H16.875" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M11.25 4.375L16.875 10L11.25 15.625" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                    </a>
                                    <form id="{{$commune->id}}" action="{{route('commune.destroy', $commune->id)}} " method="POST">
                                        @csrf
                                        @method("DELETE")

                                       <button  style="transform: translateX(-20%)" onclick="event.preventDefault(); if(confirm('Voulez vous supprimer la Commune {{$commune->name}} ?')) document.getElementById({{$commune->id}}).submit()" class="btn v5"><i class="ion-android-delete"></i> Supprimer</button>

                                   </form>
                                </div>
                            </div>
                        </div>
                  
                 @endforeach
                    </div>
                    {{-- <div class="page-navigation">
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="page-item page-navigation__item page-navigation__prev">
                                    <a class="page-link page-navigation__link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">
                                            <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20.25 12H3.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M10.5 5.25L3.75 12L10.5 18.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                                <li class="page-item page-navigation__item"><a class="page-link page-navigation__link active" href="#">1</a></li>
                                <li class="page-item page-navigation__item"><a class="page-link page-navigation__link" href="#">2</a></li>
                                <li class="page-item page-navigation__item"><a class="page-link page-navigation__link" href="#">3</a></li>
                                <li class="page-item page-navigation__item"><a class="page-link page-navigation__link" href="#">4</a></li>
                                <li class="page-item page-navigation__item"><a class="page-link page-navigation__link" href="#">5</a></li>
                                <li class="page-item page-navigation__item page-navigation__next">
                                    <a class="page-link page-navigation__link" href="#" aria-label="Next">
                                        <span aria-hidden="true">
                                            <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3.75 12H20.25" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M13.5 5.25L20.25 12L13.5 18.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- Blog-list section End   -->

@endsection