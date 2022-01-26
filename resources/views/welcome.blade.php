@extends('layouts/app')

@section('title','PAGE D\'ACCUEIL')
@section('content')

        <!-- Banner section start  -->
        <section class="banner banner--one section" style="background: url('assets/images/bg/bg-01.png') center center/cover no-repeat;">
            <div class="container">
                <h2 class="text--display-2 text-center banner__title animate__animated animate__bounceInDown">
                  ANNONCE RDC
                </h2>

                <!-- Search Box -->
                <div class="search">
                    <form action="#">
                        <div class="search__content">
                            <!-- search by keyword/title -->
                            <div class="search__content-item">
                                <div class="input-field">
                                    <input type="text" placeholder="Search by ads title, keyword..." />
                                    <span class="icon icon--left">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z"
                                                stroke="#00AAFF"
                                                stroke-width="1.6"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                            <path d="M21 21L16.65 16.65" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <!-- Search By location -->
                            <div class="search__content-item">
                                <div class="input-field">
                                    <input type="text" placeholder="Locations" />
                                    <span class="icon icon--left">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 12.75C13.6569 12.75 15 11.4069 15 9.75C15 8.09315 13.6569 6.75 12 6.75C10.3431 6.75 9 8.09315 9 9.75C9 11.4069 10.3431 12.75 12 12.75Z"
                                                stroke="#00AAFF"
                                                stroke-width="1.6"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                            <path
                                                d="M19.5 9.75C19.5 16.5 12 21.75 12 21.75C12 21.75 4.5 16.5 4.5 9.75C4.5 7.76088 5.29018 5.85322 6.6967 4.4467C8.10322 3.04018 10.0109 2.25 12 2.25C13.9891 2.25 15.8968 3.04018 17.3033 4.4467C18.7098 5.85322 19.5 7.76088 19.5 9.75V9.75Z"
                                                stroke="#00AAFF"
                                                stroke-width="1.6"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <!-- Select Category temprorary disable -->
                            <div class="search__content-item">
                                <div class="input-field">
                                    <select name="category" id="category" style="width: calc(100% - 60px);">
                                        <option value="null" style="display: none;">Select Category</option>
                                        <option value="1">Category 1</option>
                                        <option value="2">Category 2</option>
                                    </select>
                                    <span class="icon icon--left">
                                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="#00AAFF" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                            <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                            <polyline points="2 17 12 22 22 17"></polyline>
                                            <polyline points="2 12 12 17 22 12"></polyline>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <!-- Search Btn -->
                            <div class="search__content-item">
                                <button class="btn btn--lg">
                                    <span class="icon--left">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z"
                                                stroke="white"
                                                stroke-width="1.6"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                            <path d="M21 21L16.65 16.65" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    Search
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Slider main container -->
                <div class="banner__feature-slider banner__feature">
                    <!-- Slides -->
                    <div class="banner__feature-item">
                        <div class="category-card">
                            <div class="category-card__icon">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M37.5 42.1875V7.8125C37.5 6.08661 36.1009 4.6875 34.375 4.6875L15.625 4.6875C13.8991 4.6875 12.5 6.08661 12.5 7.8125L12.5 42.1875C12.5 43.9134 13.8991 45.3125 15.625 45.3125H34.375C36.1009 45.3125 37.5 43.9134 37.5 42.1875Z"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path
                                        d="M25 14.0625C26.2944 14.0625 27.3438 13.0132 27.3438 11.7188C27.3438 10.4243 26.2944 9.375 25 9.375C23.7056 9.375 22.6562 10.4243 22.6562 11.7188C22.6562 13.0132 23.7056 14.0625 25 14.0625Z"
                                        fill="currentColor"
                                    />
                                </svg>
                            </div>
                            <h5 class="text--body-2 category-card__title">Mobiles</h5>
                            <div class="category-card__view">
                                <span class="first view-number">4,391</span>
                                <a href="ad-details.html" class="second view-btn">
                                    View Ads
                                    <span class="icon">
                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.25 12H20.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M14 5.25L20.75 12L14 18.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="banner__feature-item">
                        <div class="category-card">
                            <div class="category-card__icon">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M41.6669 6.25H8.33354C6.03235 6.25 4.16687 8.11548 4.16687 10.4167V31.25C4.16687 33.5512 6.03235 35.4167 8.33354 35.4167H41.6669C43.9681 35.4167 45.8335 33.5512 45.8335 31.25V10.4167C45.8335 8.11548 43.9681 6.25 41.6669 6.25Z"
                                        stroke="#00AAFF"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path d="M16.6669 43.75H33.3335" stroke="#00AAFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M25 35.4167V43.75" stroke="#00AAFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <h5 class="text--body-2 category-card__title">Electronics</h5>
                            <div class="category-card__view">
                                <span class="first view-number">4,391</span>
                                <a href="ad-details.html" class="second view-btn">
                                    View Ads
                                    <span class="icon">
                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.25 12H20.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M14 5.25L20.75 12L14 18.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="banner__feature-item">
                        <div class="category-card">
                            <div class="category-card__icon">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                        <path d="M-0.234619 22.6172H48.9841" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M45.4685 36.6797V41.9531C45.4685 42.4193 45.2833 42.8664 44.9537 43.1961C44.624 43.5257 44.1769 43.7109 43.7107 43.7109H38.4373C37.9711 43.7109 37.5239 43.5257 37.1943 43.1961C36.8646 42.8664 36.6794 42.4193 36.6794 41.9531V36.6797"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                        <path
                                            d="M12.0701 36.6797V41.9531C12.0701 42.4193 11.8849 42.8664 11.5552 43.1961C11.2256 43.5257 10.7785 43.7109 10.3123 43.7109H5.03882C4.57262 43.7109 4.12551 43.5257 3.79586 43.1961C3.4662 42.8664 3.28101 42.4193 3.28101 41.9531V36.6797"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                        <path d="M10.3123 29.6484H13.8279" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M34.9216 29.6484H38.4373" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M45.4685 22.6172L38.9012 7.84077C38.7631 7.53005 38.5379 7.26606 38.2528 7.08077C37.9676 6.89549 37.6349 6.79687 37.2949 6.79688H11.4546C11.1146 6.79688 10.7819 6.89549 10.4968 7.08078C10.2117 7.26606 9.9864 7.53005 9.84831 7.84077L3.28101 22.6172V36.6797H45.4685V22.6172Z"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <rect width="50" height="50" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <h5 class="text--body-2 category-card__title">Vehicles</h5>
                            <div class="category-card__view">
                                <span class="first view-number">4,391</span>
                                <a href="ad-details.html" class="second view-btn">
                                    View Ads
                                    <span class="icon">
                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.25 12H20.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M14 5.25L20.75 12L14 18.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="banner__feature-item">
                        <div class="category-card">
                            <div class="category-card__icon">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.375 27.2632V40.6249C9.375 41.0393 9.53962 41.4367 9.83265 41.7297C10.1257 42.0228 10.5231 42.1874 10.9375 42.1874H39.0625C39.4769 42.1874 39.8743 42.0228 40.1674 41.7297C40.4604 41.4367 40.625 41.0393 40.625 40.6249V27.2635"
                                        stroke="#00AAFF"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path
                                        d="M10.5536 7.8125H39.4464C39.786 7.8125 40.1163 7.92311 40.3873 8.12758C40.6584 8.33205 40.8555 8.61927 40.9488 8.94575L43.75 18.75H6.25L9.05121 8.94575C9.1445 8.61927 9.34159 8.33205 9.61267 8.12758C9.88374 7.92311 10.214 7.8125 10.5536 7.8125Z"
                                        stroke="#00AAFF"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path
                                        d="M18.75 18.75V21.875C18.75 23.5326 18.0915 25.1223 16.9194 26.2944C15.7473 27.4665 14.1576 28.125 12.5 28.125C10.8424 28.125 9.25268 27.4665 8.08058 26.2944C6.90848 25.1223 6.25 23.5326 6.25 21.875V18.75"
                                        stroke="#00AAFF"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path
                                        d="M31.25 18.75V21.875C31.25 23.5326 30.5915 25.1223 29.4194 26.2944C28.2473 27.4665 26.6576 28.125 25 28.125C23.3424 28.125 21.7527 27.4665 20.5806 26.2944C19.4085 25.1223 18.75 23.5326 18.75 21.875V18.75"
                                        stroke="#00AAFF"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path
                                        d="M43.75 18.75V21.875C43.75 23.5326 43.0915 25.1223 41.9194 26.2944C40.7473 27.4665 39.1576 28.125 37.5 28.125C35.8424 28.125 34.2527 27.4665 33.0806 26.2944C31.9085 25.1223 31.25 23.5326 31.25 21.875V18.75"
                                        stroke="#00AAFF"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                            </div>
                            <h5 class="text--body-2 category-card__title">Property</h5>
                            <div class="category-card__view">
                                <span class="first view-number">4,391</span>
                                <a href="ad-details.html" class="second view-btn">
                                    View Ads
                                    <span class="icon">
                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.25 12H20.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M14 5.25L20.75 12L14 18.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="banner__feature-item">
                        <div class="category-card">
                            <div class="category-card__icon">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M36.1309 7.23968L27.9353 15.4354L29.0401 20.9596L34.5644 22.0645L42.7601 13.8688L42.7609 13.8685C43.7753 16.2631 44.0179 18.9143 43.4549 21.4533C42.892 23.9922 41.5514 26.2925 39.6199 28.0338C37.6884 29.7752 35.262 30.8711 32.6786 31.1689C30.0951 31.4667 27.483 30.9516 25.206 29.6954L25.2062 29.6949L14.2519 42.377C13.3726 43.2552 12.1806 43.7484 10.9379 43.748C9.69514 43.7477 8.5034 43.2539 7.62465 42.3751C6.7459 41.4964 6.25206 40.3046 6.25171 39.0619C6.25136 37.8191 6.74451 36.6271 7.62276 35.7479L20.3047 24.7937L20.3044 24.7938C19.0481 22.5168 18.5331 19.9047 18.8309 17.3212C19.1287 14.7377 20.2245 12.3113 21.9659 10.3798C23.7073 8.44832 26.0075 7.10778 28.5465 6.54481C31.0854 5.98185 33.7367 6.22446 36.1313 7.23889L36.1309 7.23968Z"
                                        stroke="#00AAFF"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                            </div>
                            <h5 class="text--body-2 category-card__title">Essentials</h5>
                            <div class="category-card__view">
                                <span class="first view-number">4,391</span>
                                <a href="ad-details.html" class="second view-btn">
                                    View Ads
                                    <span class="icon">
                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.25 12H20.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M14 5.25L20.75 12L14 18.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="banner__feature-item">
                        <div class="category-card">
                            <div class="category-card__icon">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M42.1875 42.1876V22.5662C42.1875 22.3485 42.142 22.1332 42.0539 21.9341C41.9659 21.735 41.8372 21.5566 41.6761 21.4101L26.05 7.20403C25.7624 6.94254 25.3876 6.79766 24.9989 6.79767C24.6101 6.79768 24.2354 6.94259 23.9478 7.2041L8.32385 21.4101C8.16279 21.5566 8.0341 21.735 7.94604 21.9341C7.85799 22.1332 7.8125 22.3485 7.8125 22.5662V42.1876"
                                        stroke="#00AAFF"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path d="M3.125 42.1875H46.875" stroke="#00AAFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M29.6863 42.1859V31.2484C29.6863 30.834 29.5217 30.4366 29.2286 30.1436C28.9356 29.8505 28.5382 29.6859 28.1238 29.6859H21.8738C21.4594 29.6859 21.062 29.8505 20.7689 30.1436C20.4759 30.4366 20.3113 30.834 20.3113 31.2484V42.1859"
                                        stroke="#00AAFF"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                            </div>
                            <h5 class="text--body-2 category-card__title">Home & Living</h5>
                            <div class="category-card__view">
                                <span class="first view-number">4,391</span>
                                <a href="ad-details.html" class="second view-btn">
                                    View Ads
                                    <span class="icon">
                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.25 12H20.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M14 5.25L20.75 12L14 18.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner section end  -->

        <!-- work section start  -->
        <section class="section work bgcolor--gray-10">
            <div class="container">
                <h2 class="text--heading-1 section__title">
                    How it Work
                </h2>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="work-card">
                            <span class="work-card__icon">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.2" d="M25 31.25C31.9036 31.25 37.5 25.6536 37.5 18.75C37.5 11.8464 31.9036 6.25 25 6.25C18.0964 6.25 12.5 11.8464 12.5 18.75C12.5 25.6536 18.0964 31.25 25 31.25Z" fill="#FF4F4F"></path>
                                    <path d="M34.375 10.9375H43.75" stroke="#FF4F4F" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M39.0625 6.25V15.625" stroke="#FF4F4F" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path
                                        d="M6.05255 42.1857C7.97357 38.8606 10.7358 36.0996 14.0617 34.18C17.3876 32.2605 21.1601 31.25 25.0002 31.25C28.8403 31.25 32.6128 32.2606 35.9387 34.1803C39.2646 36.0999 42.0267 38.8609 43.9477 42.1861"
                                        stroke="#FF4F4F"
                                        stroke-width="2.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></path>
                                    <path
                                        d="M36.7287 23.0826C35.8932 25.3386 34.4241 27.3054 32.4978 28.7467C30.5716 30.188 28.2702 31.0424 25.8701 31.2075C23.47 31.3725 21.0733 30.8411 18.9679 29.677C16.8625 28.5129 15.138 26.7657 14.0015 24.6453C12.865 22.5249 12.3649 20.1215 12.5613 17.7237C12.7576 15.326 13.6421 13.0359 15.1084 11.1287C16.5747 9.22143 18.5605 7.77809 20.8272 6.97207C23.094 6.16604 25.5452 6.03161 27.8865 6.58493"
                                        stroke="#FF4F4F"
                                        stroke-width="2.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></path>
                                </svg>
                            </span>
                            <span class="work-card__count-number">
                                01
                            </span>
                            <h2 class="work-card__title text--body-1">Create Account</h2>
                            <p class="work-card__description text--body-3">
                                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae. Donec non lorem erat. Sed vitae vene.
                            </p>
                           
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="work-card">
                            <span class="work-card__icon">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        opacity="0.2"
                                        d="M10.9375 7.8136H39.0625C39.4769 7.8136 39.8743 7.97822 40.1674 8.27124C40.4604 8.56427 40.625 8.9617 40.625 9.3761V39.0636C40.625 40.3068 40.1311 41.4991 39.2521 42.3782C38.373 43.2572 37.1807 43.7511 35.9375 43.7511H14.0625C12.8193 43.7511 11.627 43.2572 10.7479 42.3782C9.86886 41.4991 9.375 40.3068 9.375 39.0636V9.3761C9.375 8.9617 9.53962 8.56427 9.83265 8.27124C10.1257 7.97822 10.5231 7.8136 10.9375 7.8136Z"
                                        fill="#FFBF00"
                                    ></path>
                                    <path d="M18.75 25.0012H31.25" stroke="#FFBF00" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M18.75 31.2512H31.25" stroke="#FFBF00" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path
                                        d="M10.9375 7.8136H39.0625C39.4769 7.8136 39.8743 7.97822 40.1674 8.27124C40.4604 8.56427 40.625 8.9617 40.625 9.3761V39.0636C40.625 40.3068 40.1311 41.4991 39.2521 42.3782C38.373 43.2572 37.1807 43.7511 35.9375 43.7511H14.0625C12.8193 43.7511 11.627 43.2572 10.7479 42.3782C9.86886 41.4991 9.375 40.3068 9.375 39.0636V9.3761C9.375 8.9617 9.53962 8.56427 9.83265 8.27124C10.1257 7.97822 10.5231 7.8136 10.9375 7.8136Z"
                                        stroke="#FFBF00"
                                        stroke-width="2.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></path>
                                    <path d="M15.625 4.68872V10.9387" stroke="#FFBF00" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M25 4.68872V10.9387" stroke="#FFBF00" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M34.375 4.68872V10.9387" stroke="#FFBF00" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                            <span class="work-card__count-number">
                                02
                            </span>
                            <h2 class="work-card__title text--body-1">Post Ads</h2>
                            <p class="work-card__description text--body-3">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu aliquet odio. Nulla pretium congue eros, nec rhoncus mi.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="work-card">
                            <span class="work-card__icon">
                                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        opacity="0.2"
                                        d="M6.46637 14.5736C6.32466 14.814 6.24995 15.0879 6.25 15.3669V34.633C6.25 34.9103 6.32377 35.1825 6.46374 35.4219C6.6037 35.6612 6.80483 35.8589 7.04647 35.9949L24.234 45.6628C24.4678 45.7944 24.7317 45.8635 25 45.8635L25.002 45.8635L25.1854 25L6.46641 14.5736L6.46637 14.5736Z"
                                        fill="#27C200"
                                    ></path>
                                    <path
                                        d="M43.75 34.633V15.3669C43.75 15.0897 43.6762 14.8174 43.5363 14.5781C43.3963 14.3388 43.1952 14.141 42.9535 14.0051L25.766 4.33714C25.5322 4.20558 25.2683 4.13647 25 4.13647C24.7317 4.13647 24.4678 4.20558 24.234 4.33714L7.04647 14.0051C6.80483 14.141 6.6037 14.3388 6.46374 14.5781C6.32377 14.8174 6.25 15.0897 6.25 15.3669V34.633C6.25 34.9103 6.32377 35.1825 6.46374 35.4219C6.6037 35.6612 6.80483 35.859 7.04647 35.9949L24.234 45.6628C24.4678 45.7944 24.7317 45.8635 25 45.8635C25.2683 45.8635 25.5322 45.7944 25.766 45.6628L42.9535 35.9949C43.1952 35.859 43.3963 35.6612 43.5363 35.4219C43.6762 35.1825 43.75 34.9103 43.75 34.633Z"
                                        stroke="#27C200"
                                        stroke-width="2.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    ></path>
                                    <path d="M34.5746 29.7873V19.6311L15.625 9.17969" stroke="#27C200" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M43.5345 14.5756L25.1853 25L6.46631 14.5736" stroke="#27C200" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M25.1853 25L25.002 45.8635" stroke="#27C200" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                            <span class="work-card__count-number">
                                03
                            </span>
                            <h2 class="work-card__title text--body-1">Start Earning</h2>
                            <p class="work-card__description text--body-3">
                                Vestibulum quis consectetur est. Fusce hendrerit neque at facilisis facilisis. Praesent a pretium elit. Nulla aliquam puru.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- work section end -->

        <!-- feature section start  -->
        <section class="section feature-ads">
            <div class="container">
                <h2 class="text--heading-1 section__title">
                   les Annonces multiples
                </h2>
                <div class="row">
                    @foreach ($myAds as $ad)
                        
                    <div class="col-xl-6">
                        <div class="cards cards--two cards--highlight">
                            <a href="ad-details.html" class="cards__img-wrapper">
                                <img src="{{ asset('uploads/ads/'.json_decode($ad->image)[0]) }}" alt="card-img" />
                            </a>
                            <div class="cards__info">
                                <div class="cards__info-top">
                                    <div class="text--body-3 cards__category-title">
                                        <span class="icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.5 13.75L10 18.125L17.5 13.75" stroke="#FF4F4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2.5 10L10 14.375L17.5 10" stroke="#FF4F4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2.5 6.25L10 10.625L17.5 6.25L10 1.875L2.5 6.25Z" stroke="#FF4F4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                        {{$ad->category->name}}
                                        <div class="tag-label tag-label--member">
                                            <span class="icon">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="16" height="16" rx="8" fill="#FF4F4F" />
                                                    <path
                                                        d="M8.17231 10.4505L10.1424 11.6987C10.3943 11.8582 10.7069 11.6209 10.6322 11.327L10.063 9.08782C10.047 9.02546 10.0489 8.95983 10.0685 8.8985C10.0881 8.83716 10.1246 8.78261 10.1738 8.74111L11.9405 7.27066C12.1727 7.07745 12.0529 6.69219 11.7546 6.67284L9.44743 6.5231C9.38528 6.51866 9.32568 6.49666 9.27556 6.45966C9.22543 6.42265 9.18685 6.37217 9.16431 6.31409L8.30382 4.14718C8.28043 4.08553 8.23884 4.03246 8.18458 3.99501C8.13031 3.95756 8.06594 3.9375 8 3.9375C7.93407 3.9375 7.86969 3.95756 7.81543 3.99501C7.76116 4.03246 7.71957 4.08553 7.69618 4.14718L6.8357 6.31409C6.81315 6.37217 6.77457 6.42265 6.72445 6.45966C6.67432 6.49666 6.61472 6.51866 6.55258 6.5231L4.24539 6.67284C3.94715 6.69219 3.82733 7.07745 4.05947 7.27066L5.82616 8.74111C5.87539 8.78261 5.91192 8.83716 5.93152 8.8985C5.95113 8.95983 5.95303 9.02546 5.937 9.08782L5.40912 11.1644C5.31944 11.5171 5.69465 11.8019 5.99685 11.6104L7.82769 10.4505C7.87919 10.4177 7.93896 10.4003 8 10.4003C8.06104 10.4003 8.12082 10.4177 8.17231 10.4505Z"
                                                        fill="white"
                                                    />
                                                </svg>
                                            </span>
                                           @if ($ad->user->user_type==0)
                                             Admin  
                                           @else
                                               User
                                           @endif
                                        </div>
                                        <div class="tag-label tag-label--feature">
                                            Featured
                                        </div>
                                    </div>
                                    <a href="ad-details.html" class="text--body-3-600 cards__caption-title">{{$ad->title}}</a>

                                    <div class="cards__user-details">
                                        <div class="cards__user-details__item">
                                            <h5 class="text--body-4 username">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8 10C10.2091 10 12 8.20914 12 6C12 3.79086 10.2091 2 8 2C5.79086 2 4 3.79086 4 6C4 8.20914 5.79086 10 8 10Z" stroke="#939AAD" stroke-miterlimit="10"></path>
                                                        <path
                                                            d="M1.93652 13.4994C2.55125 12.4354 3.43516 11.5519 4.49945 10.9376C5.56375 10.3234 6.77095 9.99999 7.99978 10C9.22862 10 10.4358 10.3234 11.5001 10.9377C12.5644 11.552 13.4483 12.4355 14.063 13.4995"
                                                            stroke="#939AAD"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </span>
                                                {{$ad->user->name}}
                                            </h5>
                                        </div>
                                        <div class="cards__user-details__item">
                                            <h5 class="text--body-4 location">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 8.5C9.10457 8.5 10 7.60457 10 6.5C10 5.39543 9.10457 4.5 8 4.5C6.89543 4.5 6 5.39543 6 6.5C6 7.60457 6.89543 8.5 8 8.5Z"
                                                            stroke="#939AAD"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                        <path
                                                            d="M13 6.5C13 11 8 14.5 8 14.5C8 14.5 3 11 3 6.5C3 5.17392 3.52678 3.90215 4.46447 2.96447C5.40215 2.02678 6.67392 1.5 8 1.5C9.32608 1.5 10.5979 2.02678 11.5355 2.96447C12.4732 3.90215 13 5.17392 13 6.5V6.5Z"
                                                            stroke="#939AAD"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </span>
                                               {{$ad->commune->name}}
                                            </h5>
                                        </div>
                                        <div class="cards__user-details__item">
                                            <h5 class="text--body-4 location">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8 14C11.3137 14 14 11.3137 14 8C14 4.68629 11.3137 2 8 2C4.68629 2 2 4.68629 2 8C2 11.3137 4.68629 14 8 14Z" stroke="#939AAD" stroke-miterlimit="10"></path>
                                                        <path d="M8 4.5V8H11.5" stroke="#939AAD" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </span>
                                               {{$ad->created_at->format('d/m/Y')}}
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="cards__info-bottom">
                                    <span class="cards__price-title text--body-2">${{$ad->price}}</span>
                                    <button class="btn-icon">
                                        <span class="icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12 20.25C12 20.25 2.625 15 2.625 8.62501C2.62519 7.49826 3.01561 6.40635 3.72989 5.53493C4.44416 4.66351 5.4382 4.06636 6.54299 3.84501C7.64778 3.62367 8.79514 3.79179 9.78999 4.32079C10.7848 4.84979 11.5658 5.70702 12 6.74673L12 6.74673C12.4342 5.70702 13.2152 4.84979 14.21 4.32079C15.2049 3.79179 16.3522 3.62367 17.457 3.84501C18.5618 4.06636 19.5558 4.66351 20.2701 5.53493C20.9844 6.40635 21.3748 7.49826 21.375 8.62501C21.375 15 12 20.25 12 20.25Z"
                                                    stroke="#00AAFF"
                                                    stroke-width="1.6"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-xl-6">
                        <div class="cards cards--two cards--highlight">
                            <a href="ad-details.html" class="cards__img-wrapper">
                                <img src="{{asset('assets/images/view/img-02.png')}}" alt="card-img" />
                            </a>
                            <div class="cards__info">
                                <div class="cards__info-top">
                                    <h6 class="text--body-3 cards__category-title">
                                        <span class="icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.5 13.75L10 18.125L17.5 13.75" stroke="#FF4F4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2.5 10L10 14.375L17.5 10" stroke="#FF4F4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2.5 6.25L10 10.625L17.5 6.25L10 1.875L2.5 6.25Z" stroke="#FF4F4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                        Vehicles
                                    </h6>
                                    <a href="#" class="text--body-3-600 cards__caption-title">Xiaomi Poco X2 (8/256) Hot Offer...</a>

                                    <div class="cards__user-details">
                                        <div class="cards__user-details__item">
                                            <h5 class="text--body-4 username">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8 10C10.2091 10 12 8.20914 12 6C12 3.79086 10.2091 2 8 2C5.79086 2 4 3.79086 4 6C4 8.20914 5.79086 10 8 10Z" stroke="#939AAD" stroke-miterlimit="10"></path>
                                                        <path
                                                            d="M1.93652 13.4994C2.55125 12.4354 3.43516 11.5519 4.49945 10.9376C5.56375 10.3234 6.77095 9.99999 7.99978 10C9.22862 10 10.4358 10.3234 11.5001 10.9377C12.5644 11.552 13.4483 12.4355 14.063 13.4995"
                                                            stroke="#939AAD"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </span>
                                                Jerome Bell
                                            </h5>
                                        </div>
                                        <div class="cards__user-details__item">
                                            <h5 class="text--body-4 location">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 8.5C9.10457 8.5 10 7.60457 10 6.5C10 5.39543 9.10457 4.5 8 4.5C6.89543 4.5 6 5.39543 6 6.5C6 7.60457 6.89543 8.5 8 8.5Z"
                                                            stroke="#939AAD"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                        <path
                                                            d="M13 6.5C13 11 8 14.5 8 14.5C8 14.5 3 11 3 6.5C3 5.17392 3.52678 3.90215 4.46447 2.96447C5.40215 2.02678 6.67392 1.5 8 1.5C9.32608 1.5 10.5979 2.02678 11.5355 2.96447C12.4732 3.90215 13 5.17392 13 6.5V6.5Z"
                                                            stroke="#939AAD"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </span>
                                                United States
                                            </h5>
                                        </div>
                                        <div class="cards__user-details__item">
                                            <h5 class="text--body-4 location">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8 14C11.3137 14 14 11.3137 14 8C14 4.68629 11.3137 2 8 2C4.68629 2 2 4.68629 2 8C2 11.3137 4.68629 14 8 14Z" stroke="#939AAD" stroke-miterlimit="10"></path>
                                                        <path d="M8 4.5V8H11.5" stroke="#939AAD" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </span>
                                                2 hours
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="cards__info-bottom">
                                    <span class="cards__price-title text--body-2">$5200.00</span>
                                    <button class="btn-icon">
                                        <span class="icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12 20.25C12 20.25 2.625 15 2.625 8.62501C2.62519 7.49826 3.01561 6.40635 3.72989 5.53493C4.44416 4.66351 5.4382 4.06636 6.54299 3.84501C7.64778 3.62367 8.79514 3.79179 9.78999 4.32079C10.7848 4.84979 11.5658 5.70702 12 6.74673L12 6.74673C12.4342 5.70702 13.2152 4.84979 14.21 4.32079C15.2049 3.79179 16.3522 3.62367 17.457 3.84501C18.5618 4.06636 19.5558 4.66351 20.2701 5.53493C20.9844 6.40635 21.3748 7.49826 21.375 8.62501C21.375 15 12 20.25 12 20.25Z"
                                                    stroke="#00AAFF"
                                                    stroke-width="1.6"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="cards cards--two cards--highlight">
                            <a href="ad-details.html" class="cards__img-wrapper">
                                <img src="{{asset('assets/images/view/img-03.png')}}" alt="card-img" />
                            </a>
                            <div class="cards__info">
                                <div class="cards__info-top">
                                    <h6 class="text--body-3 cards__category-title">
                                        <span class="icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.5 13.75L10 18.125L17.5 13.75" stroke="#FF4F4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2.5 10L10 14.375L17.5 10" stroke="#FF4F4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2.5 6.25L10 10.625L17.5 6.25L10 1.875L2.5 6.25Z" stroke="#FF4F4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                        Vehicles
                                    </h6>
                                    <a href="ad-details.html" class="text--body-3-600 cards__caption-title">Xiaomi Poco X2 (8/256) Hot Offer...</a>

                                    <div class="cards__user-details">
                                        <div class="cards__user-details__item">
                                            <h5 class="text--body-4 username">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8 10C10.2091 10 12 8.20914 12 6C12 3.79086 10.2091 2 8 2C5.79086 2 4 3.79086 4 6C4 8.20914 5.79086 10 8 10Z" stroke="#939AAD" stroke-miterlimit="10"></path>
                                                        <path
                                                            d="M1.93652 13.4994C2.55125 12.4354 3.43516 11.5519 4.49945 10.9376C5.56375 10.3234 6.77095 9.99999 7.99978 10C9.22862 10 10.4358 10.3234 11.5001 10.9377C12.5644 11.552 13.4483 12.4355 14.063 13.4995"
                                                            stroke="#939AAD"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </span>
                                                Jerome Bell
                                            </h5>
                                        </div>
                                        <div class="cards__user-details__item">
                                            <h5 class="text--body-4 location">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 8.5C9.10457 8.5 10 7.60457 10 6.5C10 5.39543 9.10457 4.5 8 4.5C6.89543 4.5 6 5.39543 6 6.5C6 7.60457 6.89543 8.5 8 8.5Z"
                                                            stroke="#939AAD"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                        <path
                                                            d="M13 6.5C13 11 8 14.5 8 14.5C8 14.5 3 11 3 6.5C3 5.17392 3.52678 3.90215 4.46447 2.96447C5.40215 2.02678 6.67392 1.5 8 1.5C9.32608 1.5 10.5979 2.02678 11.5355 2.96447C12.4732 3.90215 13 5.17392 13 6.5V6.5Z"
                                                            stroke="#939AAD"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </span>
                                                United States
                                            </h5>
                                        </div>
                                        <div class="cards__user-details__item">
                                            <h5 class="text--body-4 location">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8 14C11.3137 14 14 11.3137 14 8C14 4.68629 11.3137 2 8 2C4.68629 2 2 4.68629 2 8C2 11.3137 4.68629 14 8 14Z" stroke="#939AAD" stroke-miterlimit="10"></path>
                                                        <path d="M8 4.5V8H11.5" stroke="#939AAD" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </span>
                                                2 hours
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="cards__info-bottom">
                                    <span class="cards__price-title text--body-2">$5200.00</span>
                                    <button class="btn-icon">
                                        <span class="icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12 20.25C12 20.25 2.625 15 2.625 8.62501C2.62519 7.49826 3.01561 6.40635 3.72989 5.53493C4.44416 4.66351 5.4382 4.06636 6.54299 3.84501C7.64778 3.62367 8.79514 3.79179 9.78999 4.32079C10.7848 4.84979 11.5658 5.70702 12 6.74673L12 6.74673C12.4342 5.70702 13.2152 4.84979 14.21 4.32079C15.2049 3.79179 16.3522 3.62367 17.457 3.84501C18.5618 4.06636 19.5558 4.66351 20.2701 5.53493C20.9844 6.40635 21.3748 7.49826 21.375 8.62501C21.375 15 12 20.25 12 20.25Z"
                                                    stroke="#00AAFF"
                                                    stroke-width="1.6"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="cards cards--two">
                            <a href="ad-details.html" class="cards__img-wrapper">
                                <img src="{{asset('assets/images/view/img-04.png')}}" alt="card-img" />
                                <span class="cards__tag text--body-5">
                                    Urgents
                                </span>
                            </a>
                            <div class="cards__info">
                                <div class="cards__info-top">
                                    <h6 class="text--body-3 cards__category-title">
                                        <span class="icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.5 13.75L10 18.125L17.5 13.75" stroke="#FF4F4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2.5 10L10 14.375L17.5 10" stroke="#FF4F4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2.5 6.25L10 10.625L17.5 6.25L10 1.875L2.5 6.25Z" stroke="#FF4F4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                        Vehicles
                                    </h6>
                                    <a href="#" class="text--body-3-600 cards__caption-title">Xiaomi Poco X2 (8/256) Hot Offer...</a>

                                    <div class="cards__user-details">
                                        <div class="cards__user-details__item">
                                            <h5 class="text--body-4 username">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8 10C10.2091 10 12 8.20914 12 6C12 3.79086 10.2091 2 8 2C5.79086 2 4 3.79086 4 6C4 8.20914 5.79086 10 8 10Z" stroke="#939AAD" stroke-miterlimit="10"></path>
                                                        <path
                                                            d="M1.93652 13.4994C2.55125 12.4354 3.43516 11.5519 4.49945 10.9376C5.56375 10.3234 6.77095 9.99999 7.99978 10C9.22862 10 10.4358 10.3234 11.5001 10.9377C12.5644 11.552 13.4483 12.4355 14.063 13.4995"
                                                            stroke="#939AAD"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </span>
                                                Jerome Bell
                                            </h5>
                                        </div>
                                        <div class="cards__user-details__item">
                                            <h5 class="text--body-4 location">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 8.5C9.10457 8.5 10 7.60457 10 6.5C10 5.39543 9.10457 4.5 8 4.5C6.89543 4.5 6 5.39543 6 6.5C6 7.60457 6.89543 8.5 8 8.5Z"
                                                            stroke="#939AAD"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                        <path
                                                            d="M13 6.5C13 11 8 14.5 8 14.5C8 14.5 3 11 3 6.5C3 5.17392 3.52678 3.90215 4.46447 2.96447C5.40215 2.02678 6.67392 1.5 8 1.5C9.32608 1.5 10.5979 2.02678 11.5355 2.96447C12.4732 3.90215 13 5.17392 13 6.5V6.5Z"
                                                            stroke="#939AAD"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </span>
                                                United States
                                            </h5>
                                        </div>
                                        <div class="cards__user-details__item">
                                            <h5 class="text--body-4 location">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8 14C11.3137 14 14 11.3137 14 8C14 4.68629 11.3137 2 8 2C4.68629 2 2 4.68629 2 8C2 11.3137 4.68629 14 8 14Z" stroke="#939AAD" stroke-miterlimit="10"></path>
                                                        <path d="M8 4.5V8H11.5" stroke="#939AAD" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </span>
                                                2 hours
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="cards__info-bottom">
                                    <span class="cards__price-title text--body-2">$5200.00</span>
                                    <button class="btn-icon">
                                        <span class="icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12 20.25C12 20.25 2.625 15 2.625 8.62501C2.62519 7.49826 3.01561 6.40635 3.72989 5.53493C4.44416 4.66351 5.4382 4.06636 6.54299 3.84501C7.64778 3.62367 8.79514 3.79179 9.78999 4.32079C10.7848 4.84979 11.5658 5.70702 12 6.74673L12 6.74673C12.4342 5.70702 13.2152 4.84979 14.21 4.32079C15.2049 3.79179 16.3522 3.62367 17.457 3.84501C18.5618 4.06636 19.5558 4.66351 20.2701 5.53493C20.9844 6.40635 21.3748 7.49826 21.375 8.62501C21.375 15 12 20.25 12 20.25Z"
                                                    stroke="#00AAFF"
                                                    stroke-width="1.6"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="cards cards--two">
                            <a href="ad-details.html" class="cards__img-wrapper">
                                <img src="{{asset('assets/images/view/img-05.png')}}" alt="card-img" />
                            </a>
                            <div class="cards__info">
                                <div class="cards__info-top">
                                    <h6 class="text--body-3 cards__category-title">
                                        <span class="icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.5 13.75L10 18.125L17.5 13.75" stroke="#FF4F4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2.5 10L10 14.375L17.5 10" stroke="#FF4F4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2.5 6.25L10 10.625L17.5 6.25L10 1.875L2.5 6.25Z" stroke="#FF4F4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                        Vehicles
                                    </h6>
                                    <a href="#" class="text--body-3-600 cards__caption-title">Xiaomi Poco X2 (8/256) Hot Offer...</a>

                                    <div class="cards__user-details">
                                        <div class="cards__user-details__item">
                                            <h5 class="text--body-4 username">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8 10C10.2091 10 12 8.20914 12 6C12 3.79086 10.2091 2 8 2C5.79086 2 4 3.79086 4 6C4 8.20914 5.79086 10 8 10Z" stroke="#939AAD" stroke-miterlimit="10"></path>
                                                        <path
                                                            d="M1.93652 13.4994C2.55125 12.4354 3.43516 11.5519 4.49945 10.9376C5.56375 10.3234 6.77095 9.99999 7.99978 10C9.22862 10 10.4358 10.3234 11.5001 10.9377C12.5644 11.552 13.4483 12.4355 14.063 13.4995"
                                                            stroke="#939AAD"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </span>
                                                Jerome Bell
                                            </h5>
                                        </div>
                                        <div class="cards__user-details__item">
                                            <h5 class="text--body-4 location">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 8.5C9.10457 8.5 10 7.60457 10 6.5C10 5.39543 9.10457 4.5 8 4.5C6.89543 4.5 6 5.39543 6 6.5C6 7.60457 6.89543 8.5 8 8.5Z"
                                                            stroke="#939AAD"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                        <path
                                                            d="M13 6.5C13 11 8 14.5 8 14.5C8 14.5 3 11 3 6.5C3 5.17392 3.52678 3.90215 4.46447 2.96447C5.40215 2.02678 6.67392 1.5 8 1.5C9.32608 1.5 10.5979 2.02678 11.5355 2.96447C12.4732 3.90215 13 5.17392 13 6.5V6.5Z"
                                                            stroke="#939AAD"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </span>
                                                United States
                                            </h5>
                                        </div>
                                        <div class="cards__user-details__item">
                                            <h5 class="text--body-4 location">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8 14C11.3137 14 14 11.3137 14 8C14 4.68629 11.3137 2 8 2C4.68629 2 2 4.68629 2 8C2 11.3137 4.68629 14 8 14Z" stroke="#939AAD" stroke-miterlimit="10"></path>
                                                        <path d="M8 4.5V8H11.5" stroke="#939AAD" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </span>
                                                2 hours
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="cards__info-bottom">
                                    <span class="cards__price-title text--body-2">$5200.00</span>
                                    <button class="btn-icon">
                                        <span class="icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12 20.25C12 20.25 2.625 15 2.625 8.62501C2.62519 7.49826 3.01561 6.40635 3.72989 5.53493C4.44416 4.66351 5.4382 4.06636 6.54299 3.84501C7.64778 3.62367 8.79514 3.79179 9.78999 4.32079C10.7848 4.84979 11.5658 5.70702 12 6.74673L12 6.74673C12.4342 5.70702 13.2152 4.84979 14.21 4.32079C15.2049 3.79179 16.3522 3.62367 17.457 3.84501C18.5618 4.06636 19.5558 4.66351 20.2701 5.53493C20.9844 6.40635 21.3748 7.49826 21.375 8.62501C21.375 15 12 20.25 12 20.25Z"
                                                    stroke="#00AAFF"
                                                    stroke-width="1.6"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="cards cards--two">
                            <a href="ad-details.html" class="cards__img-wrapper">
                                <img src="{{asset('assets/images/view/img-06.png')}}" alt="card-img" />
                            </a>
                            <div class="cards__info">
                                <div class="cards__info-top">
                                    <h6 class="text--body-3 cards__category-title">
                                        <span class="icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.5 13.75L10 18.125L17.5 13.75" stroke="#FF4F4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2.5 10L10 14.375L17.5 10" stroke="#FF4F4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M2.5 6.25L10 10.625L17.5 6.25L10 1.875L2.5 6.25Z" stroke="#FF4F4F" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                        Vehicles
                                    </h6>
                                    <a href="#" class="text--body-3-600 cards__caption-title">Xiaomi Poco X2 (8/256) Hot Offer...</a>

                                    <div class="cards__user-details">
                                        <div class="cards__user-details__item">
                                            <h5 class="text--body-4 username">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8 10C10.2091 10 12 8.20914 12 6C12 3.79086 10.2091 2 8 2C5.79086 2 4 3.79086 4 6C4 8.20914 5.79086 10 8 10Z" stroke="#939AAD" stroke-miterlimit="10"></path>
                                                        <path
                                                            d="M1.93652 13.4994C2.55125 12.4354 3.43516 11.5519 4.49945 10.9376C5.56375 10.3234 6.77095 9.99999 7.99978 10C9.22862 10 10.4358 10.3234 11.5001 10.9377C12.5644 11.552 13.4483 12.4355 14.063 13.4995"
                                                            stroke="#939AAD"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </span>
                                                Jerome Bell
                                            </h5>
                                        </div>
                                        <div class="cards__user-details__item">
                                            <h5 class="text--body-4 location">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 8.5C9.10457 8.5 10 7.60457 10 6.5C10 5.39543 9.10457 4.5 8 4.5C6.89543 4.5 6 5.39543 6 6.5C6 7.60457 6.89543 8.5 8 8.5Z"
                                                            stroke="#939AAD"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                        <path
                                                            d="M13 6.5C13 11 8 14.5 8 14.5C8 14.5 3 11 3 6.5C3 5.17392 3.52678 3.90215 4.46447 2.96447C5.40215 2.02678 6.67392 1.5 8 1.5C9.32608 1.5 10.5979 2.02678 11.5355 2.96447C12.4732 3.90215 13 5.17392 13 6.5V6.5Z"
                                                            stroke="#939AAD"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                        ></path>
                                                    </svg>
                                                </span>
                                                United States
                                            </h5>
                                        </div>
                                        <div class="cards__user-details__item">
                                            <h5 class="text--body-4 location">
                                                <span class="icon">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8 14C11.3137 14 14 11.3137 14 8C14 4.68629 11.3137 2 8 2C4.68629 2 2 4.68629 2 8C2 11.3137 4.68629 14 8 14Z" stroke="#939AAD" stroke-miterlimit="10"></path>
                                                        <path d="M8 4.5V8H11.5" stroke="#939AAD" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </span>
                                                2 hours
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="cards__info-bottom">
                                    <span class="cards__price-title text--body-2">$5200.00</span>
                                    <button class="btn-icon">
                                        <span class="icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12 20.25C12 20.25 2.625 15 2.625 8.62501C2.62519 7.49826 3.01561 6.40635 3.72989 5.53493C4.44416 4.66351 5.4382 4.06636 6.54299 3.84501C7.64778 3.62367 8.79514 3.79179 9.78999 4.32079C10.7848 4.84979 11.5658 5.70702 12 6.74673L12 6.74673C12.4342 5.70702 13.2152 4.84979 14.21 4.32079C15.2049 3.79179 16.3522 3.62367 17.457 3.84501C18.5618 4.06636 19.5558 4.66351 20.2701 5.53493C20.9844 6.40635 21.3748 7.49826 21.375 8.62501C21.375 15 12 20.25 12 20.25Z"
                                                    stroke="#00AAFF"
                                                    stroke-width="1.6"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                ></path>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>

                <div class="feature-ads__btn">
                    <a href="{{route('annonce.index')}}" class="btn">
                        View All
                        <span class="icon--right">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.25 12H20.75" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M14 5.25L20.75 12L14 18.75" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </section>
        <!-- feature section end -->

        <!-- popular-loc section start  -->
        <section class="section popular-location">
            <div class="container">
                <h2 class="text--heading-1 section__title">
                    Popular Location
                </h2>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="location-card">
                            <a href="ad-details.html" class="location-card__img-wrapper">
                                <img src="{{asset('assets/images/location/img-01.png')}}" alt="location" />
                            </a>
                            <div class="location-card__info">
                                <h2 class="location-card__loc-title text--body-2-600">Las Vegas, Usa</h2>
                                <div class="location-card__view">
                                    <span class="first view-number">4,391</span>
                                    <a href="ad-details.html" class="second view-btn">
                                        View Ads
                                        <span class="icon">
                                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.25 12H20.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M14 5.25L20.75 12L14 18.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="location-card">
                            <a href="ad-details.html" class="location-card__img-wrapper">
                                <img src="{{asset('assets/images/location/img-02.png')}}" alt="location" />
                            </a>
                            <div class="location-card__info">
                                <h2 class="location-card__loc-title text--body-2-600">New York, USA</h2>
                                <div class="location-card__view">
                                    <span class="first view-number">4,391</span>
                                    <a href="ad-details.html" class="second view-btn">
                                        View Ads
                                        <span class="icon">
                                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.25 12H20.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M14 5.25L20.75 12L14 18.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="location-card">
                            <a href="ad-details.html" class="location-card__img-wrapper">
                                <img src="{{asset('assets/images/location/img-03.png')}}" alt="location" />
                            </a>
                            <div class="location-card__info">
                                <h2 class="location-card__loc-title text--body-2-600">Mumbai, India</h2>
                                <div class="location-card__view">
                                    <span class="first view-number">4,391</span>
                                    <a href="ad-details.html" class="second view-btn">
                                        View Ads
                                        <span class="icon">
                                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.25 12H20.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M14 5.25L20.75 12L14 18.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="location-card">
                            <a href="ad-details.html" class="location-card__img-wrapper">
                                <img src="{{asset('assets/images/location/img-04.png')}}" alt="location" />
                            </a>
                            <div class="location-card__info">
                                <h2 class="location-card__loc-title text--body-2-600">Dublin, Ireland</h2>
                                <div class="location-card__view">
                                    <span class="first view-number">4,391</span>
                                    <a href="ad-details.html" class="second view-btn">
                                        View Ads
                                        <span class="icon">
                                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.25 12H20.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M14 5.25L20.75 12L14 18.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="location-card">
                            <a href="ad-details.html" class="location-card__img-wrapper">
                                <img src="{{asset('assets/images/location/img-05.png')}}" alt="location" />
                            </a>
                            <div class="location-card__info">
                                <h2 class="location-card__loc-title text--body-2-600">Manila, Philippines</h2>
                                <div class="location-card__view">
                                    <span class="first view-number">4,391</span>
                                    <a href="ad-details.html" class="second view-btn">
                                        View Ads
                                        <span class="icon">
                                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.25 12H20.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M14 5.25L20.75 12L14 18.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="location-card">
                            <a href="ad-details.html" class="location-card__img-wrapper">
                                <img src="{{asset('assets/images/location/img-06.png')}}" alt="location" />
                            </a>
                            <div class="location-card__info">
                                <h2 class="location-card__loc-title text--body-2-600">Bangkok, Thailand</h2>
                                <div class="location-card__view">
                                    <span class="first view-number">4,391</span>
                                    <a href="ad-details.html" class="second view-btn">
                                        View Ads
                                        <span class="icon">
                                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.25 12H20.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M14 5.25L20.75 12L14 18.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="location-card">
                            <a href="ad-details.html" class="location-card__img-wrapper">
                                <img src="{{asset('assets/images/location/img-07.png')}}" alt="location" />
                            </a>
                            <div class="location-card__info">
                                <h2 class="location-card__loc-title text--body-2-600">kuala Lumpur, Malaysia</h2>
                                <div class="location-card__view">
                                    <span class="first view-number">4,391</span>
                                    <a href="ad-details.html" class="second view-btn">
                                        View Ads
                                        <span class="icon">
                                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.25 12H20.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M14 5.25L20.75 12L14 18.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="location-card">
                            <a href="ad-details.html" class="location-card__img-wrapper">
                                <img src="{{asset('assets/images/location/img-08.png')}}" alt="location" />
                            </a>
                            <div class="location-card__info">
                                <h2 class="location-card__loc-title text--body-2-600">Jakarta, Indonesia</h2>
                                <div class="location-card__view">
                                    <span class="first view-number">4,391</span>
                                    <a href="ad-details.html" class="second view-btn">
                                        View Ads
                                        <span class="icon">
                                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.25 12H20.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M14 5.25L20.75 12L14 18.75" stroke="#00AAFF" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- popular-loc section end -->

        <!-- recent-post section start  -->
        <section class="section recent-post bgcolor--gray-10">
            <div class="container">
                <h2 class="text--heading-1 section__title">
                    Nos Annonces Récent(e)s
                </h2>
                <div class="row">
               @foreach ($annonces as $ad)
               <div class="col-xl-3 col-md-6">
                <div class="cards cards--one cards--highlight">
                    <a href="ad-details.html" class="cards__img-wrapper">
                        <img src="{{ asset('uploads/ads/'.json_decode($ad->image)[0]) }}" alt="card-img" class="img-fluid" />
                    </a>
                    <div class="cards__info">
                        <div class="cards__info-top">
                            <h6 class="text--body-4 cards__category-title">
                                <span class="icon">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 11L8 14.5L14 11" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M2 8L8 11.5L14 8" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M2 5L8 8.5L14 5L8 1.5L2 5Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                              {{$ad->category->name}}
                            </h6>
                            <a href="ad-details.html" class="text--body-3-600 cards__caption-title">{{$ad->title}}</a>
                        </div>
                        <div class="cards__info-bottom">
                            <h6 class="cards__location text--body-4">
                                <span class="icon">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10 10.625C11.3807 10.625 12.5 9.50571 12.5 8.125C12.5 6.74429 11.3807 5.625 10 5.625C8.61929 5.625 7.5 6.74429 7.5 8.125C7.5 9.50571 8.61929 10.625 10 10.625Z"
                                            stroke="#27C200"
                                            stroke-width="1.2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        ></path>
                                        <path
                                            d="M16.25 8.125C16.25 13.75 10 18.125 10 18.125C10 18.125 3.75 13.75 3.75 8.125C3.75 6.4674 4.40848 4.87769 5.58058 3.70558C6.75269 2.53348 8.3424 1.875 10 1.875C11.6576 1.875 13.2473 2.53348 14.4194 3.70558C15.5915 4.87769 16.25 6.4674 16.25 8.125V8.125Z"
                                            stroke="#27C200"
                                            stroke-width="1.2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        ></path>
                                    </svg>
                                </span>
                                {{$ad->commune->name}}
                            </h6>
                            <span class="cards__price-title text--body-3-600">${{$ad->price}} </span>
                        </div>
                    </div>
                </div>
            </div>
               @endforeach
                </div>
            </div>
        </section>
        <!-- recent-post section end -->

        <!-- membership-call section start  -->
        <section class="section membership-call">
            <div class="container">
                <div class="membership-call__content" style="background: url('assets/images/pattern/img-01.png') center center/cover no-repeat;">
                    <div class="membership-call__left">
                        <h2 class="text--heading-2 membership-call__title">Get Premium Membership</h2>
                        <p class="text--body-3 membership-call__description">
                            Vestibulum consectetur placerat tellus. Sed faucibus fermentum purus, at facilisis neque auctor.
                        </p>
                    </div>
                    <div class="membership-call__right">
                        <a href="get-membership.html" class="btn btn--lg">Get membership</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- membership-call section start  -->

        <!-- footer section start  -->
       @yield('layouts/footer')
        <!-- footer section end -->

        <!-- Back To Top Btn -->
        <button class="scrollTop scrollTop--white">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 20.25V3.75" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M5.25 10.5L12 3.75L18.75 10.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
        
     
        @endsection
