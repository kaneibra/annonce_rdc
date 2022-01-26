<header class="header header--one">
    <div class="container navigation-bar">
        <!-- Brand Logo -->
        <a href="home.html" class="navigation-bar__logo">
            <img src="{{asset('assets/images/logo.png')}}" style="height:70px;width:70px; border:1px;border-radius:15%" alt="brand-logo" class="logo-white" />
            <img src="{{asset('assets/images/logo.png')}}" style="height:50px;width:50px; border:1px;border-radius:15%" alt="brand-logo" class="logo-dark">
        </a>
        <!-- Menu -->
        <ul class="menu">
            <li class="menu__item">
                <a href="#" class="menu__link active">
                    Home
                    <span class="icon">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 6L8 11L13 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </a>
                <ul class="menu-dropdown">
                    <li class="menu-dropdown__item">
                        <a href="{{route('acceuil')}}" class="menu-dropdown__link active"> Home</a>
                </ul>
            </li>
            <li class="menu__item">
                <a href="{{ url('annonce/create') }}" class="menu__link">Listing</a>
            </li>
            <li class="menu__item">
                <a href="#" class="menu__link">
                    Pages
                    <span class="icon">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 6L8 11L13 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </a>
                <ul class="menu-dropdown">
                    <li class="menu-dropdown__item">
                        <a href="blog-list.html" class="menu-dropdown__link">Blog List</a>
                    </li>
                    <li class="menu-dropdown__item">
                        <a href="blog-details.html" class="menu-dropdown__link">Single Blogs</a>
                    </li>
                    <li class="menu-dropdown__item">
                        <a href="about.html" class="menu-dropdown__link">About</a>
                    </li>
                    <li class="menu-dropdown__item">
                        <a href="price-plan.html" class="menu-dropdown__link">Pricing Plans</a>
                    </li>
                   @guest
                       
                  
                    <li class="menu-dropdown__item">
                        <a href="{{route('login')}}" class="menu-dropdown__link">Sign In</a>
                    </li>
                    <li class="menu-dropdown__item">
                        <a  href="{{ route('register') }}" class="menu-dropdown__link">{{ __('Register') }}</a>
                    </li>
                    @endguest
                    {{-- @if(Auth::user()->user_type=="admin") --}}
                    <li class="menu-dropdown__item">
                        <a href="{{route('category.create')}}" class="menu-dropdown__link">Create Category</a>
                        <a href="{{route('category.index')}}" class="menu-dropdown__link">View Category</a>
                        <a href="{{route('commune.create')}}" class="menu-dropdown__link">Create Commune</a>
                        <a href="{{route('commune.index')}}" class="menu-dropdown__link">View Commune</a>
                        <a href="{{route('annonce.index')}}" class="menu-dropdown__link">View annonce</a>
                        
                    </li>
                    {{-- @endif --}}
                    <li class="menu-dropdown__item">
                        <a href="dashboard.html" class="menu-dropdown__link">user Dashboard</a>
                    </li>
                    <li class="menu-dropdown__item">
                        <a href="faq.html" class="menu-dropdown__link">Faqs</a>
                    </li>
                    <li class="menu-dropdown__item">
                        <a href="404" class="menu-dropdown__link">404 Error Pages</a>
                    </li>
                </ul>
            </li>
            <li class="menu__item">
                <a href="get-membership.html" class="menu__link">Get Membership</a>
            </li>
            <li class="menu__item">
                <a href="contact.html" class="menu__link">Contact</a>
            </li>
        </ul>
        <!-- Action Buttons -->
        <div class="navigation-bar__buttons">
        @auth
        <a href="{{url('profil/edit ',encrypt(Auth::user()->id))}}" class="user">
            <div class="user__img-wrapper">
                <img src="{{asset('uploads/avatars/'.Auth::user()->avatar)}}" style="height: 35px;width:35px;border:1px;border-radius:15px; transform:translateX(-20px)" alt="user-img" />
            </div>
        </a>
        @endauth
            @guest
                
           
            <a href="{{ route('login') }}" class="btn btn--bg">Sign in</a>
            @endguest
            @auth
            <a href="{{url('logout')}}" class="btn btn--bg">Se Deconnecter</a>
            @endauth
            <a href="{{url(' annonce/create ')}}" class="btn">
                <span class="icon--left">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z" stroke="currentColor" stroke-width="1.6" stroke-miterlimit="10"></path>
                        <path d="M8.25 12H15.75" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M12 8.25V15.75" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </span>
                Post Ads
            </a>
        </div>
        <!-- Responsive Navigation Menu -->
        <button class="toggle-icon">
            <span class="toggle-icon__bar"></span>
            <span class="toggle-icon__bar"></span>
            <span class="toggle-icon__bar"></span>
        </button>
        <ul class="menu--sm">
            <li class="menu--sm__item">
                <a href="#" class="menu--sm__link active">
                    Home
                    <span class="icon">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 6L8 11L13 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </a>
                <ul class="menu--sm-dropdown">
                    <li class="menu--sm-dropdown__item">
                        <a href="" class="menu--sm-dropdown__link active">Homepage 01</a>
                    </li>
                </ul>
            </li>
            <li class="menu--sm__item">
                <a href="#" class="menu--sm__link">
                    All Category
                    <span class="icon">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 6L8 11L13 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </a>
                <ul class="menu--sm-dropdown">
                    <li class="menu--sm-dropdown__item">
                        <a href="#" class="menu--sm-dropdown__link">Mobile</a>
                    </li>
                    <li class="menu--sm-dropdown__item">
                        <a href="#" class="menu--sm-dropdown__link">Electronics</a>
                    </li>
                    <li class="menu--sm-dropdown__item">
                        <a href="#" class="menu--sm-dropdown__link">Vehicles</a>
                    </li>
                    <li class="menu--sm-dropdown__item">
                        <a href="#" class="menu--sm-dropdown__link">Property</a>
                    </li>
                    <li class="menu--sm-dropdown__item">
                        <a href="#" class="menu--sm-dropdown__link">Essentials</a>
                    </li>
                    <li class="menu--sm-dropdown__item">
                        <a href="#" class="menu--sm-dropdown__link">Home &amp; Living</a>
                    </li>
                    <li class="menu--sm-dropdown__item">
                        <a href="#" class="menu--sm-dropdown__link">Business Industry</a>
                    </li>
                    <li class="menu--sm-dropdown__item">
                        <a href="#" class="menu--sm-dropdown__link">Education</a>
                    </li>
                </ul>
            </li>
            <li class="menu--sm__item">
                <a href="ad-list.html" class="menu--sm__link">ads Listing</a>
            </li>
            <li class="menu--sm__item">
                <a href="#" class="menu--sm__link">
                    Pages
                    <span class="icon">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 6L8 11L13 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </a>
                <ul class="menu--sm-dropdown">
                    <li class="menu--sm-dropdown__item">
                        <a href="blog-list.html" class="menu--sm-dropdown__link">Blog List</a>
                    </li>
                    <li class="menu--sm-dropdown__item">
                        <a href="blog-details.html" class="menu--sm-dropdown__link">Single Blogs</a>
                    </li>
                    <li class="menu--sm-dropdown__item">
                        <a href="about.html" class="menu--sm-dropdown__link">About</a>
                    </li>
                    <li class="menu--sm-dropdown__item">
                        <a href="price-plan.html" class="menu--sm-dropdown__link">Pricing Plans</a>
                    </li>
                    <li class="menu--sm-dropdown__item">
                        <a href="{{ route('login') }}" class="menu--sm-dropdown__link">Sign In</a>
                    </li>
                    <li class="menu--sm-dropdown__item">
                        <a href="{{ route('register') }}" class="menu--sm-dropdown__link">Sign Up</a>
                    </li>
                    <li class="menu--sm-dropdown__item">
                        <a href="dashboard.html" class="menu--sm-dropdown__link">user Dashboard</a>
                    </li>
                    <li class="menu--sm-dropdown__item">
                        <a href="faq.html" class="menu--sm-dropdown__link">Faqs</a>
                    </li>
                    <li class="menu--sm-dropdown__item">
                        <a href="404-error.html" class="menu--sm-dropdown__link">404 Error Pages</a>
                    </li>
                </ul>
            </li>
            <li class="menu--sm__item">
                <a href="get-membership.html" class="menu--sm__link">Get Membership</a>
            </li>
            <li class="menu--sm__item">
                <a href="contact.html" class="menu--sm__link">Contact</a>
            </li>
        </ul>
    </div>
</header>