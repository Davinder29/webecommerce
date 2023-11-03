@extends('frontend.frontend_master')

@section('title')
    Web Ecoomerce
@endsection

@section('frontend_content')

            <!--  SIDEBAR  -->
                @include('frontend.frontend_layout.body.sidebar')
            <!--  SIDEBAR : END  -->
            <!--  CONTENT  -->
           
                @include('frontend.frontend_layout.home_page.hero-section')
                <!--  SECTION – HERO : END  -->

                <!--  INFO BOXES  -->
              
                @include('frontend.frontend_layout.home_page.info-boxes')
                <!--  INFO BOXES : END  -->
                <!--  SCROLL TABS  -->
                @include('frontend.frontend_layout.home_page.new-products')
                <!-- /.scroll-tabs -->
                <!--  SCROLL TABS : END  -->
                <!--  WIDE PRODUCTS  -->
                @include('frontend.frontend_layout.home_page.two-column-banner')
                <!--  WIDE PRODUCTS : END  -->

                <!--  FEATURED PRODUCTS  -->
                @include('frontend.frontend_layout.home_page.featured-products')
                <!-- /.section -->
                <!--  FEATURED PRODUCTS  -->
                @include('frontend.frontend_layout.home_page.new-arrivals')
                <!--  FEATURED PRODUCTS : END  -->
                @include('frontend.frontend_layout.home_page.footer-categories')

<!-- /#top-banner-and-menu -->
@endsection
