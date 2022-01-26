
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="css/app.css">
        <title>{{config('app.name')}} | @yield('title')</title>
        
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


          <!-- Favicons -->
          <link rel="apple-touch-icon" sizes="512x512" href="{{asset('assets/images/favicon_io/android-chrome-512x512.png')}}" />
          <link rel="apple-touch-icon" sizes="192x192" href="{{asset('assets/images/favicon_io/android-chrome-192x192.png')}}" />
          <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/favicon_io/favicon-32x32.png')}}" />
          <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon_io/favicon-16x16.png')}}" />
          <link rel="manifest" href="{{asset('assets/images/favicon_io/site.webmanifest')}}" />
          <link rel="stylesheet" href="{{asset('assets/plugins/css/slick.css')}}" />
          <link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}" />
          <link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2-bootstrap-5-theme.css')}}" />
          <link rel="stylesheet" href="{{asset('assets/plugins/css/bootstrap.min.css')}}">
          <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
          <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
          {{-- script --}}
          <script src="{{asset('js/app.js')}}"></script>
          {{--  end script --}}

    </head>
    <body>
        <div class="loader">
            <div class="loader-icon">
                <img src="{{asset('assets/images/loader.gif')}}" alt="loader" />
            </div>
        </div>
             <!-- header section start  -->
       @include('layouts.header')
       <!-- header section end   -->
       @yield('content')
       {{-- fin --}}
       {{-- footer --}}
       @include('layouts.footer')
       {{--  end_footer --}}
          <!-- Scripts goes here -->
          @include('layouts.script')
      
    </body>