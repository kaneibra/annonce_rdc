@extends('layouts.app')

@section('title','Edition d\'annonce')
@section('content')
      <!-- breedcrumb section start  -->
      <section class="breedcrumb" style="background: url('assets/images/bg/bg-04.jpg') center center/cover no-repeat;">
        <div class="container">
            <h2 class="breedcrumb__title text--heading-2">Overview</h2>
            <ul class="breedcrumb__page">
                <li class="breedcrumb__page-item">
                    <a href="home.html" class="breedcrumb__page-link text--body-3">Home</a>
                </li>
                <li class="breedcrumb__page-item">
                    <a href="#" class="breedcrumb__page-link text--body-3">/</a>
                </li>
                <li class="breedcrumb__page-item">
                    <a href="#" class="breedcrumb__page-link text--body-3">Dashboard</a>
                </li>
                <li class="breedcrumb__page-item">
                    <a href="#" class="breedcrumb__page-link text--body-3">/</a>
                </li>
                <li class="breedcrumb__page-item">
                    <a href="#" class="breedcrumb__page-link text--body-3">Post Ads</a>
                </li>
            </ul>
        </div>
    </section>
    <!-- breedcrumb section end  -->

    <!-- dashboard section start  -->
    <section class="section dashboard">
        <div class="container">
            <div class="row">
                <div class="col-xl-3">
                    {{-- <div class="dashboard__navigation">
                        <div class="dashboard__navigation-top">
                            <div class="dashboard__user-proifle">
                                <div class="dashboard__user-img">
                                    <img src="assets/images/users/img-01.png" alt="user-photo" />
                                </div>
                                <div class="dashboard__user-info">
                                    <h2 class="name text--body-2-600">Jenny Wilson</h2>
                                    <p class="designation text--body-4">Member</p>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard__navigation-bottom">
                            <ul class="dashboard__nav">
                                <li class="dashboard__nav-item">
                                    <a href="dashboard.html" class="dashboard__nav-link">
                                        <span class="icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 3H3V10H10V3Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M21 3H14V10H21V3Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M21 14H14V21H21V14Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M10 14H3V21H10V14Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                        Overview
                                    </a>
                                </li>
                                <li class="dashboard__nav-item">
                                    <a href="post-ads.html" class="dashboard__nav-link active">
                                        <span class="icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z"
                                                    stroke="currentColor"
                                                    stroke-width="1.6"
                                                    stroke-miterlimit="10"
                                                />
                                                <path d="M8.25 12H15.75" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M12 8.25V15.75" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                        post ads
                                    </a>
                                </li>
                                <li class="dashboard__nav-item">
                                    <a href="myad.html" class="dashboard__nav-link">
                                        <span class="icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9 14.25H15" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M9 11.25H15" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M15.0002 3.75H18.75C18.9489 3.75 19.1397 3.82902 19.2803 3.96967C19.421 4.11032 19.5 4.30109 19.5 4.5V20.25C19.5 20.4489 19.421 20.6397 19.2803 20.7803C19.1397 20.921 18.9489 21 18.75 21H5.25C5.05109 21 4.86032 20.921 4.71967 20.7803C4.57902 20.6397 4.5 20.4489 4.5 20.25V4.5C4.5 4.30109 4.57902 4.11032 4.71967 3.96967C4.86032 3.82902 5.05109 3.75 5.25 3.75H8.9998"
                                                    stroke="currentColor"
                                                    stroke-width="1.6"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />
                                                <path
                                                    d="M8.25 6.75V6C8.25 5.00544 8.64509 4.05161 9.34835 3.34835C10.0516 2.64509 11.0054 2.25 12 2.25C12.9946 2.25 13.9484 2.64509 14.6517 3.34835C15.3549 4.05161 15.75 5.00544 15.75 6V6.75H8.25Z"
                                                    stroke="currentColor"
                                                    stroke-width="1.6"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />
                                            </svg>
                                        </span>
                                        My ads
                                    </a>
                                </li>
                                <li class="dashboard__nav-item">
                                    <a href="favourite-ads.html" class="dashboard__nav-link">
                                        <span class="icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12 20.25C12 20.25 2.625 15 2.625 8.62501C2.62519 7.49826 3.01561 6.40635 3.72989 5.53493C4.44416 4.66351 5.4382 4.06636 6.54299 3.84501C7.64778 3.62367 8.79514 3.79179 9.78999 4.32079C10.7848 4.84979 11.5658 5.70702 12 6.74673L12 6.74673C12.4342 5.70702 13.2152 4.84979 14.21 4.32079C15.2049 3.79179 16.3522 3.62367 17.457 3.84501C18.5618 4.06636 19.5558 4.66351 20.2701 5.53493C20.9844 6.40635 21.3748 7.49826 21.375 8.62501C21.375 15 12 20.25 12 20.25Z"
                                                    stroke="currentColor"
                                                    stroke-width="1.6"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />
                                            </svg>
                                        </span>
                                        Favourite Ads
                                    </a>
                                </li>
                                <li class="dashboard__nav-item">
                                    <a href="message-board.html" class="dashboard__nav-link">
                                        <span class="icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4.25895 16.5939C3.14076 14.7089 2.74916 12.4805 3.15768 10.3272C3.56621 8.1739 4.74675 6.2438 6.47764 4.89933C8.20853 3.55486 10.3707 2.8885 12.5581 3.02539C14.7455 3.16227 16.8078 4.09298 18.3575 5.64274C19.9073 7.19251 20.838 9.25472 20.9749 11.4421C21.1118 13.6296 20.4455 15.7917 19.101 17.5226C17.7565 19.2535 15.8264 20.4341 13.6732 20.8426C11.5199 21.2511 9.29149 20.8596 7.40649 19.7414L7.40651 19.7413L4.29808 20.6294C4.16947 20.6662 4.03338 20.6678 3.90391 20.6343C3.77443 20.6007 3.65628 20.5332 3.5617 20.4386C3.46713 20.344 3.39956 20.2259 3.36601 20.0964C3.33246 19.9669 3.33415 19.8308 3.37089 19.7022L4.25901 16.5938L4.25895 16.5939Z"
                                                    stroke="currentColor"
                                                    stroke-width="1.6"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />
                                                <path
                                                    d="M12 13.125C12.6213 13.125 13.125 12.6213 13.125 12C13.125 11.3787 12.6213 10.875 12 10.875C11.3787 10.875 10.875 11.3787 10.875 12C10.875 12.6213 11.3787 13.125 12 13.125Z"
                                                    fill="currentColor"
                                                />
                                                <path
                                                    d="M7.5 13.125C8.12132 13.125 8.625 12.6213 8.625 12C8.625 11.3787 8.12132 10.875 7.5 10.875C6.87868 10.875 6.375 11.3787 6.375 12C6.375 12.6213 6.87868 13.125 7.5 13.125Z"
                                                    fill="currentColor"
                                                />
                                                <path
                                                    d="M16.5 13.125C17.1213 13.125 17.625 12.6213 17.625 12C17.625 11.3787 17.1213 10.875 16.5 10.875C15.8787 10.875 15.375 11.3787 15.375 12C15.375 12.6213 15.8787 13.125 16.5 13.125Z"
                                                    fill="currentColor"
                                                />
                                            </svg>
                                        </span>
                                        Message
                                    </a>
                                </li>
                                <li class="dashboard__nav-item">
                                    <a href="plans-billing.html" class="dashboard__nav-link">
                                        <span class="icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21 5.25H3C2.58579 5.25 2.25 5.58579 2.25 6V18C2.25 18.4142 2.58579 18.75 3 18.75H21C21.4142 18.75 21.75 18.4142 21.75 18V6C21.75 5.58579 21.4142 5.25 21 5.25Z"
                                                    stroke="currentColor"
                                                    stroke-width="1.6"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />
                                                <path d="M15.7495 15.75H18.7495" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M11.2495 15.75H12.7495" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M2.24951 9.08008H21.7495" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                        Plans & Billing
                                    </a>
                                </li>
                                <li class="dashboard__nav-item">
                                    <a href="account-setting.html" class="dashboard__nav-link">
                                        <span class="icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12 16.5C14.4853 16.5 16.5 14.4853 16.5 12C16.5 9.51472 14.4853 7.5 12 7.5C9.51472 7.5 7.5 9.51472 7.5 12C7.5 14.4853 9.51472 16.5 12 16.5Z"
                                                    stroke="currentColor"
                                                    stroke-width="1.6"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />
                                                <path
                                                    d="M11.5193 4.13952L9.75029 2.81315C9.65538 2.74175 9.54485 2.69393 9.42783 2.67363C9.3108 2.65332 9.19063 2.66112 9.07721 2.69638C8.52933 2.86794 7.99778 3.08787 7.48884 3.35355C7.38349 3.40881 7.29279 3.48834 7.22422 3.58556C7.15566 3.68278 7.1112 3.79492 7.09452 3.91271L6.78179 6.10186C6.66259 6.20753 6.54589 6.31742 6.43169 6.43156C6.31752 6.54573 6.2076 6.66246 6.10191 6.78176L6.10186 6.78179L3.9131 7.09479C3.7955 7.11142 3.68353 7.15576 3.58642 7.22415C3.48932 7.29254 3.40986 7.38303 3.35459 7.48816C3.08849 7.99689 2.86814 8.52826 2.69613 9.076C2.66071 9.18957 2.65281 9.30994 2.67307 9.42717C2.69334 9.5444 2.7412 9.65513 2.81269 9.75022L4.13952 11.5193C4.12995 11.6783 4.12514 11.8385 4.12509 12C4.12509 12.1614 4.1299 12.3217 4.13953 12.4808L4.13952 12.4809L2.81315 14.2499C2.74175 14.3448 2.69393 14.4553 2.67363 14.5723C2.65332 14.6894 2.66112 14.8095 2.69638 14.923C2.86794 15.4708 3.08787 16.0024 3.35355 16.5113C3.40881 16.6167 3.48834 16.7074 3.58556 16.776C3.68278 16.8445 3.79492 16.889 3.91271 16.9057L6.10186 17.2184C6.20752 17.3376 6.31742 17.4543 6.43156 17.5685C6.54572 17.6827 6.66245 17.7926 6.78175 17.8983L6.78179 17.8983L7.09479 20.0871C7.11142 20.2047 7.15575 20.3167 7.22415 20.4138C7.29254 20.5109 7.38303 20.5903 7.48816 20.6456C7.99688 20.9117 8.52825 21.132 9.07599 21.304C9.18957 21.3395 9.30994 21.3474 9.42716 21.3271C9.54439 21.3068 9.65512 21.259 9.75021 21.1875L11.5193 19.8607C11.6783 19.8702 11.8385 19.875 12 19.8751C12.1614 19.8751 12.3217 19.8703 12.4808 19.8607L12.4809 19.8607L14.2499 21.187C14.3448 21.2584 14.4553 21.3063 14.5723 21.3266C14.6894 21.3469 14.8095 21.3391 14.923 21.3038C15.4708 21.1322 16.0024 20.9123 16.5113 20.6466C16.6167 20.5914 16.7074 20.5118 16.776 20.4146C16.8445 20.3174 16.889 20.2053 16.9057 20.0875L17.2184 17.8983C17.3376 17.7927 17.4543 17.6828 17.5685 17.5686C17.6827 17.4545 17.7926 17.3377 17.8983 17.2184L17.8983 17.2184L20.0871 16.9054C20.2047 16.8888 20.3167 16.8444 20.4138 16.776C20.5109 16.7076 20.5903 16.6172 20.6456 16.512C20.9117 16.0033 21.132 15.4719 21.304 14.9242C21.3395 14.8106 21.3474 14.6902 21.3271 14.573C21.3068 14.4558 21.259 14.3451 21.1875 14.25L19.8607 12.4809C19.8702 12.3219 19.875 12.1616 19.8751 12.0002C19.8751 11.8387 19.8703 11.6785 19.8607 11.5194L19.8607 11.5193L21.187 9.75029C21.2584 9.65538 21.3063 9.54485 21.3266 9.42783C21.3469 9.3108 21.3391 9.19063 21.3038 9.07721C21.1322 8.52933 20.9123 7.99778 20.6466 7.48884C20.5914 7.38349 20.5118 7.29279 20.4146 7.22422C20.3174 7.15566 20.2053 7.1112 20.0875 7.09452L17.8983 6.78179C17.7927 6.66259 17.6828 6.54589 17.5686 6.43169C17.4545 6.31752 17.3377 6.2076 17.2184 6.10191L17.2184 6.10186L16.9054 3.9131C16.8888 3.7955 16.8444 3.68353 16.776 3.58642C16.7076 3.48932 16.6172 3.40986 16.512 3.35459C16.0033 3.08849 15.4719 2.86814 14.9242 2.69613C14.8106 2.66071 14.6902 2.65281 14.573 2.67307C14.4558 2.69334 14.3451 2.7412 14.25 2.81269L12.4809 4.13952C12.3219 4.12995 12.1616 4.12514 12.0002 4.12509C11.8387 4.12509 11.6785 4.1299 11.5194 4.13953L11.5193 4.13952Z"
                                                    stroke="currentColor"
                                                    stroke-width="1.6"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />
                                            </svg>
                                        </span>
                                        Account Settings
                                    </a>
                                </li>
                                <li class="dashboard__nav-item">
                                    <a href="#" class="dashboard__nav-link">
                                        <span class="icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.3135 8.0625L20.2499 12L16.3135 15.9375" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M9.75 12H20.2472" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M9.75 20.25H4.5C4.30109 20.25 4.11032 20.171 3.96967 20.0303C3.82902 19.8897 3.75 19.6989 3.75 19.5V4.5C3.75 4.30109 3.82902 4.11032 3.96967 3.96967C4.11032 3.82902 4.30109 3.75 4.5 3.75H9.75"
                                                    stroke="currentColor"
                                                    stroke-width="1.6"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />
                                            </svg>
                                        </span>
                                        Sign Out
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <span class="dashboard__navigation-toggle-btn">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.5 13.5H4.5C4.08579 13.5 3.75 13.8358 3.75 14.25V18C3.75 18.4142 4.08579 18.75 4.5 18.75H19.5C19.9142 18.75 20.25 18.4142 20.25 18V14.25C20.25 13.8358 19.9142 13.5 19.5 13.5Z"
                                    stroke="currentColor"
                                    stroke-width="1.6"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                                <path
                                    d="M19.5 5.25H4.5C4.08579 5.25 3.75 5.58579 3.75 6V9.75C3.75 10.1642 4.08579 10.5 4.5 10.5H19.5C19.9142 10.5 20.25 10.1642 20.25 9.75V6C20.25 5.58579 19.9142 5.25 19.5 5.25Z"
                                    stroke="currentColor"
                                    stroke-width="1.6"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </span>
                    </div> --}}
                </div>
                <div class="col-xl-9">
                    <div class="dashboard-post">
                        <ul class="nav dashboard-post__nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item dashboard-post__item" role="presentation">
                                {{-- <div class="nav-link dashboard-post__link active" id="pills-basic-tab" data-bs-toggle="pill" data-bs-target="#pills-basic" role="tab" aria-controls="pills-basic" aria-selected="true">
                                    <span class="icon icon--default">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.5 9.75L12 15.75L22.5 9.75L12 3.75L1.5 9.75Z" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M1.5 13.5L12 19.5L22.5 13.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <span class="icon icon--success">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.25 6.75L9.75 17.2495L4.5 12" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>

                                    <div class="step-info">
                                        <h2 class="text--body-3-600">Steps 01</h2>
                                        <p class="text--body-4">Basic info</p>
                                    </div>
                                </div> --}}
                            </li>
                            <li class="nav-item dashboard-post__item" role="presentation">
                                <div class="nav-link dashboard-post__link" id="pills-advance-tab" data-bs-toggle="pill" data-bs-target="#pills-advance" role="tab" aria-controls="pills-advance" aria-selected="false">
                                    {{-- <span class="icon icon--default">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3 16.5L12 21.75L21 16.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M3 12L12 17.25L21 12" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M3 7.5L12 12.75L21 7.5L12 2.25L3 7.5Z" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span> --}}
                                    <span class="icon icon--success">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.25 6.75L9.75 17.2495L4.5 12" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <div class="step-info">
                                        <h2 class="text--body-3-600"> Edit your Annonce</h2>
                                        <p class="text--body-4">Title,Category,Commune & Image</p>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dashboard-post__item" role="presentation">
                                <div class="nav-link dashboard-post__link" id="pills-post-tab" data-bs-toggle="pill" data-bs-target="#pills-post" role="tab" aria-controls="pills-post" aria-selected="false">
                                    {{-- <span class="icon icon--default">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.5 21H10.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M11.5283 1.85314C9.74778 3.27947 3.79242 8.979 8.99983 18.0004H14.9998C20.099 8.98539 14.2307 3.28753 12.4688 1.85618C12.3361 1.74822 12.1703 1.68903 11.9991 1.68848C11.828 1.68793 11.6618 1.74604 11.5283 1.85314V1.85314Z"
                                                stroke="currentColor"
                                                stroke-width="1.6"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                            <path
                                                d="M6.92492 10.4404L3.98585 13.9673C3.91243 14.0554 3.8602 14.1592 3.83316 14.2706C3.80612 14.3821 3.80499 14.4982 3.82987 14.6102L4.98889 19.8258C5.01652 19.9501 5.07536 20.0653 5.15985 20.1606C5.24435 20.2559 5.35172 20.3281 5.47184 20.3705C5.59197 20.4128 5.72089 20.4238 5.84646 20.4025C5.97203 20.3812 6.0901 20.3283 6.18956 20.2487L8.99993 18.0004"
                                                stroke="currentColor"
                                                stroke-width="1.6"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                            <path
                                                d="M17.0186 10.3721L20.0141 13.9667C20.0875 14.0548 20.1397 14.1585 20.1668 14.27C20.1938 14.3814 20.1949 14.4976 20.1701 14.6095L19.011 19.8251C18.9834 19.9495 18.9246 20.0647 18.8401 20.16C18.7556 20.2553 18.6482 20.3275 18.5281 20.3698C18.408 20.4121 18.279 20.4232 18.1535 20.4019C18.0279 20.3806 17.9098 20.3276 17.8104 20.2481L15 17.9998"
                                                stroke="currentColor"
                                                stroke-width="1.6"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                            />
                                            <path
                                                d="M12 10.125C12.6213 10.125 13.125 9.62132 13.125 9C13.125 8.37868 12.6213 7.875 12 7.875C11.3787 7.875 10.875 8.37868 10.875 9C10.875 9.62132 11.3787 10.125 12 10.125Z"
                                                fill="currentColor"
                                            />
                                        </svg>
                                    </span> --}}
                                    <span class="icon icon--success">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.25 6.75L9.75 17.2495L4.5 12" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    {{-- <div class="step-info">
                                        <h2 class="text--body-3-600">Steps 03</h2>
                                        <p class="text--body-4">Post Ads</p>
                                    </div> --}}
                                </div>
                            </li>
                        </ul>
                        <div class="tab-content dashboard-post__content" id="pills-tabContent">

                           @if (session('status'))
                               <h2 class="alert alert-success"> {{session('status')}}</h2>
                           @endif
                            <!-- Step 02 -->
                            <div class="tab-pane fade" id="pills-advance" role="tabpanel" aria-labelledby="pills-advance-tab">
                                <form action="{{ route('annonce.update',$annonce->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('Put')
                                      <div class="dashboard-post__step02 step-information">
                                        <div class="input-field--textarea">
                                        <label for="title">Title</label>
                                        <input  id="title" type="text" name="title" required value="{{$annonce->title}}">

                                        <div class="input-select">
                                            <label for="category">Category</label>
                                            <select name="category_id" id="" class="form-control filter-input">
                                                <option disabled selected>Selectionner une catégorie</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Commune</label>
                                                <select name="commune_id" id="" class="form-control filter-input">
                                                    <option disabled selected>Selectionner une Commune</option>
                                                    @foreach ($communes as $commune)
                                                        <option value="{{ $commune->id }}">{{ $commune->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Etat de l'article</label>
                                                <select name="condition_product" id="" class="form-control filter-input">
                                                    <option value="new">Nouveau</option>
                                                    <option value="used">Déjà utilisé</option>
                                                </select>   
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Condition du Prix</label>
                                                <select name="condition_price" id="" class="form-control filter-input">
                                                    <option value="new">Discutable</option>
                                                    <option value="used"> Non discutable</option>
                                                </select>
                                            </div>
                                        </div>
                                      
                                        <label for="price">Price</label>
                                        <input  id="price" type="number" name="price" required value="{{$annonce->price}}">
                                      
                                        <label for="description">Description</label>
                                        <textarea name="description"  id="description" placeholder="What’s your thought..." id="description"  required value="{{old('description')}}"></textarea>
                                        
                                      
                                         </div>
                                
                                         <div class="upload-wrapper">
                                        <h3>Upload An Image For yours Article</h3>
                                        <div class="upload-area">
                                            {{-- <div class="uploaded-items">
                                                <div class="uploaded-item">
                                                    <img src="assets/images/blogs/img-02.png" alt="">
                                                    <div class="remove-icon">
                                                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                                    </div>
                                                </div>
                                                <div class="uploaded-item">
                                                    <img src="assets/images/blogs/img-03.png" alt="">
                                                    <div class="remove-icon">
                                                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <div class="add-new">
                                               
                                                <input type="file"  id="image" name="image[]" required multiple >

                                                
                                            </div>
                                            @if (!is_null($annonce->image))
                                            <img src="{{ asset('uploads/ads/'.json_decode($annonce->image)[0]) }}" alt="" width="100" style="height:150px;width:150px;margin-top: 30px">
                                        @endif
                                        </div>
                                    </div>

                                   
                                </div>
                                <div class="dashboard-post__action-btns">
                                   
                                    <button class="btn btn-primary" type="submit">Edit</button>
                                </div>
                                 </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- dashboard section end  -->

@endsection