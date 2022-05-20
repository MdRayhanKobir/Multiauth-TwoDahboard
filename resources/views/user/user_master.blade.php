<!DOCTYPE html>
<html lang="en">
    <head>
        @include('user.includes.meta')
        <link rel="icon" href="{{ asset('userbackend/panel/assets/images/favicon.png') }}" >
        <!--Page title-->
        <title>@yield('title')</title>
        <!--bootstrap-->
        @include('user.includes.css')
    </head>
    <body id="page-top">
        <!-- preloader -->
        <div class="preloader">
            <img src="{{ asset('userbackend/panel/assets/images/preloader.gif') }}" alt="">
        </div>
        <!-- wrapper -->
        <div class="wrapper">
            <!-- header area -->
            @include('user.includes.header')
            <!-- sidebar area -->
           @include('user.includes.sidebar')


           @yield('content');

        </div><!--/ wrapper -->



{{-- js file --}}
@include('user.includes.js')



    </body>
</html>
