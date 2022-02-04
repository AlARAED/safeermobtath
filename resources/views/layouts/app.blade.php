<!DOCTYPE html>
<html lang="{{App::getLocale()}}" dir="{{ locale_dir() }}">
<?php
$setting=\App\User::find(1);
?>
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    @if(App::getLocale() == 'en')
        <title>{{config('app.name','Mbtath')}} - @yield('title')</title>
    @elseif(App::getLocale() == 'ar')
        <title> مبتعث - @yield('title')</title>
    @endif


    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.PNG')}}">

    <!-- BEGIN STYLES -->
    @if(App::getLocale() == 'en')
        <link rel="stylesheet" type="text/css" href="{{asset('node_modules/bootstrap/dist/css/bootstrap.min.css')}}">
    @elseif(App::getLocale() == 'ar')
        <link rel="stylesheet" type="text/css" href="{{asset('node_modules/bootstrap-v4-rtl/dist/css/bootstrap-rtl.min.css')}}">
    @endif
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fontawesome5.14.0/css/all.css')}}">
    @if(App::getLocale() == 'en')
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    @else
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style-rtl.css')}}">
    @endif

    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/noor/styles.css')}}">
    <!--country -phone-->
    <link rel="stylesheet" href="{{asset('css/intlTelInput.css')}}" >

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />"
    <!--end-->
    <style>
        .header-top-wrapper a {
            margin: auto 0;
        }
        .ans_header {
            margin-right: auto;
        }
        .sign_newaccoount {
            height: 32px;
        }
    </style>
    @yield('css')
</head>
<!-- END HEAD -->

<body>
<div class="contact-wrapper">
    <header class="main-header-area">
        <div class="header-top-area header-top-2">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-custom header-top-wrapper d-flex">
                        <a  href="@if(App::getLocale() == 'en') {{locale_route(null, 'ar', ['status' => 'active'], true)}} @else {{locale_route(null, 'en', ['status' => 'active'], true)}} @endif ">
                            <span class="menu-text">@if(App::getLocale() == 'en') Ar @else En @endif</span>
                        </a>
                        <a href="{{route(app()->getLocale() .'.about_us')}}">
                            <span class="menu-text"> {{__('About Safeer Mbtath')}}</span>
                        </a>
                        <a href="{{route(app()->getLocale() .'.ask_safeer')}}">
                            <span class="menu-text"> {{__('Q&A')}}</span>
                        </a>
                        <a href="{{route(app()->getLocale() .'.contact_us')}}">
                            <span class="menu-text"> {{__('Contact Us')}}</span>
                        </a>




{{--                        <div class="country_header">--}}
{{--                        <input type="text" class="form-control" placeholder="{{__('Select Country')}}">--}}
{{--                        <img src="{{asset('assets/images/icon/surface.svg')}}" alt="">--}}
{{--                        </div>--}}



                        <div class="ans_header d-flex">
                            @auth
                                <a href="#" class="noti_header">
                        <img src="{{asset('assets/images/icon/notification.svg')}}" alt="">
                            </a>


                            <div class="noti_header navbar-actions">
                                <!-- BEGIN NAVBAR USER -->
                                <div class="nav-item dropdown user">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="true" aria-expanded="false">
                        <span class="avatar">
                            <img src=" {{asset('')}}thumb.php?src=assets/images/{{Auth::user()->image}}&size=36x36" >
                        </span>
                                        <span class="info">
                            {{__('Hello')}}،، <span class="name">   {{ Auth::user()->name }}</span>
                        </span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Preview">
                                        <a class="dropdown-item" href="">
                                            <span class="la la-wrench icon" aria-hidden="true"></span>
                                            <span> {{__('Edit Profile')}}</span>
                                        </a>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <span class="la la-sign-out icon" aria-hidden="true"></span>
                                            <span> {{__('Logout')}}
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </span>
                                        </a>
                                    </div>
                                </div>
                                <!-- END NAVBAR USER -->
                            </div>

                            <style>
                                .header-top-wrapper a {
                                    margin: auto 0;
                                }
                                .ans_header {
                                    margin-right: auto;
                                }
                                .navbar-actions {
                                    padding-left: 30px;
                                }
                                .navbar-actions > .user > .dropdown-toggle {
                                    display: -webkit-box;
                                    display: -webkit-flex;
                                    display: -ms-flexbox;
                                    -js-display: flex;
                                    display: flex;
                                    -webkit-box-align: center;
                                    -webkit-align-items: center;
                                    -ms-flex-align: center;
                                    align-items: center;
                                }
                                .navbar-actions>.user {
                                    border-right: 1px solid #092444;
                                }
                                .navbar-actions .name {
                                    font-size: 14px;
                                }
                                .avatar {
                                    position: relative;
                                    -webkit-border-radius: 50%;
                                    border-radius: 50%;
                                    width: 36px;
                                    height: 36px;
                                }
                                .avatar > img {
                                    -webkit-border-radius: 50%;
                                    border-radius: 50%;
                                }
                                .navbar-actions > .user > .dropdown-toggle > .info {
                                    margin-right: 12px;
                                    margin-left: 0 !important;
                                    display: block !important;
                                }
                                .nav-item.show .dropdown-menu {
                                    transform: inherit !important;
                                    top: inherit !important;
                                    left: inherit !important;
                                    right: 0px;
                                    -webkit-box-shadow: 0 1px 3px rgb(0 0 0 / 12%), 0 1px 2px rgb(0 0 0 / 24%);
                                    box-shadow: 0 1px 3px rgb(0 0 0 / 12%), 0 1px 2px rgb(0 0 0 / 24%);
                                    margin: 0;
                                    width: 200px;
                                    border: none;
                                    -webkit-border-top-left-radius: 0;
                                    border-top-left-radius: 0;
                                    -webkit-border-top-right-radius: 0;
                                    border-top-right-radius: 0;
                                    font-size: 12px;
                                    padding: 0;
                                    border-radius: 2px;
                                }
                                .dropdown-menu-right {
                                    left: auto;
                                    right: 0;
                                }
                                .nav-item.active, .nav-item.show, .nav-item:hover {
                                    background: #092444;
                                }
                                .header-top-area .header-top-wrapper {
                                    padding: 0px 0 !important;
                                }
                                .noti_header {
                                    top: 0px !important;
                                }
                                .nav-item.show .dropdown-menu .dropdown-item {
                                    border: none;
                                    height: 40px;
                                    display: -webkit-box;
                                    display: -webkit-flex;
                                    display: -ms-flexbox;
                                    -js-display: flex;
                                    display: flex;
                                    -webkit-box-align: center;
                                    -webkit-align-items: center;
                                    -ms-flex-align: center;
                                    align-items: center;
                                    line-height: 13px;
                                    font-size: 13px;
                                    font-weight: 400;
                                    padding: 0 15px;
                                    position: relative;
                                }
                                .nav-item.show .dropdown-menu .dropdown, .nav-item.show .dropdown-menu .dropdown-item, .nav-item.show .dropdown-menu .nav-link {
                                    color: #333;
                                    border-bottom: 1px solid #e1e5f0;
                                }
                            </style>






                            @endauth
                            @guest()
                            <a href="{{route(app()->getLocale() .'.login')}}" class="sign_in_header">
                        <img src="{{asset('assets/images/icon/user.svg')}}" alt="">
                            <span>{{__('Sign in')}}</span>
                            </a>
                            <a href="{{route(app()->getLocale() .'.sign_up')}}" class="sign_newaccoount">
                        <button class="form-control">{{__('New Account')}}</button>
                            </a>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-custom">
                        <div class="row align-items-center">
                            <div class="col-lg-1 col-xl-1 col-sm-6 col-6 col-custom">
                                <div class="header-logo d-flex align-items-center">
                                    <a href="{{route(app()->getLocale() .'.home')}}">
                                        <img class="img-full" src="{{asset('assets/images/logo/logo.png')}}" alt="{{__('Header Logo')}}">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-11 col-xl-11 position-static d-none d-lg-block col-custom">
                                <nav class="main-nav d-flex justify-content-center">
                                    <ul class="nav">
                                        <li>
                                            <a href="{{route(app()->getLocale() .'.students_admissions')}}">
                                                <span class="menu-text"> {{__('Students admissions')}}</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>

                                        </li>
                                        <li>
                                            <a href="#.">
                                                <span class="menu-text"> {{__('Education Dep.')}}</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-submenu dropdown-hover">
                                                <li><a  href="{{route(app()->getLocale() .'.international_universities')}}">{{__('Universities')}}</a></li>
                                                <li><a href="{{route(app()->getLocale() .'.international_schools')}}">{{__('Schools')}}</a></li>
                                                <li><a href="{{route(app()->getLocale() .'.international_nurseries')}}">{{__('Nurseries')}}</a></li>
                                                {{--<li><a href="{{route(app()->getLocale() .'.teachers_reg')}}">{{__('My Teachers')}}</a></li>--}}
                                                <li><a href="{{route(app()->getLocale() .'.translate_service')}}">{{__('Translation')}}</a></li>
                                            </ul>
                                        </li>




                                        <li>
                                            <a  href="#">
                                                <span class="menu-text">
                                                    {{__('Register as Teacher')}}

                                                </span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-submenu dropdown-hover">
                                                <li><a href="{{route(app()->getLocale() .'.teacher_language')}}">{{__('Language')}}</a></li>
                                                <li><a href="{{route(app()->getLocale() .'.teacher_lesson')}}">{{__('Lesson')}}</a></li>
                                                <li><a href="{{route(app()->getLocale() .'.teacher_master')}}">{{__('Master Search Help')}}</a></li>
                                                <li><a href="{{route(app()->getLocale() .'.teacher_doctora')}}">{{__('PhD supervisors')}}</a></li>


                                            </ul>
                                        </li>

                                        <li>
                                            <a  href="#">
                                                <span class="menu-text">
                                                    {{__('Choose a teacher')}}

                                                </span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-submenu dropdown-hover">
                                                <li><a href="{{route(app()->getLocale() .'.student_choose_teacher_english')}}">{{__('English teacher')}}</a></li>
                                                {{--<li><a href="{{route(app()->getLocale() .'.student_choose_teacher_french')}}">{{__('French language teacher')}}</a></li>--}}

                                                <li><a href="{{route(app()->getLocale() .'.teacher_lesson')}}">{{__('Lesson')}}</a></li>
                                                <li><a href="{{route(app()->getLocale() .'.teacher_master')}}">{{__('Master Search Help')}}</a></li>
                                                <li><a href="{{route(app()->getLocale() .'.teacher_master')}}">{{__('PhD supervisors')}}</a></li>


                                            </ul>
                                        </li>
                                        <li>

                                            <a  href="#">
                                                <span class="menu-text">
                                                    {{__('Service')}}

                                                </span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-submenu dropdown-hover">

                                                <li><a href="{{route(app()->getLocale() .'.service_introducing')}}">{{__('Service provider')}}</a></li>
                                                <li><a href="{{route(app()->getLocale() .'.teacher_language')}}">{{__('Service request')}}</a></li>
                                                {{--<li><a href="{{route(app()->getLocale() .'.service_reg')}}">{{__('Service provider')}}</a></li>--}}



                                            </ul>


                                        {{--<a  href="{{route(app()->getLocale() .'.phd_supervisors_register')}}">--}}
                                                {{--<span class="menu-text"> {{__('PhD supervisors')}}</span>--}}
                                                {{--<i class="fa fa-angle-down"></i>--}}
                                            {{--</a>--}}

                                        </li>





                                        <li>

                                        <li>
                                            <a  href="#">
                                                <span class="menu-text"> {{__('Arrival services')}}</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-submenu dropdown-hover">
                                                <li><a href="{{route(app()->getLocale() .'.insurance_service')}}">{{__('Insurance')}}</a></li>
                                                <li><a href="{{route(app()->getLocale() .'.residence_service')}}">{{__('Residence')}}</a></li>
                                                <li><a href="{{route(app()->getLocale() .'.visa_service')}}">{{__('Visa')}}</a></li>
                                                <li><a href="{{route(app()->getLocale() .'.reception_airport_service')}}">{{__('Reception at the airport')}}</a></li>
                                                <li><a href="{{route(app()->getLocale() .'.bank_account_service')}}">{{__('Open a bank account')}}</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{route(app()->getLocale() .'.cost_living')}}">
                                                <span class="menu-text"> {{__('Cost living')}}</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a  href="{{route(app()->getLocale() .'.currency_exchange')}}">
                                                <span class="menu-text"> {{__('Currency Exchange')}}</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a  href="#">
                                                <span class="menu-text"> {{__('Ads')}}</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-submenu dropdown-hover">
                                                <li><a  href="{{route(app()->getLocale() .'.ads_featured')}}">{{__('Ads Featured')}}</a></li>
                                                <li><a href="{{route(app()->getLocale() .'.ads_raised')}}">{{__('Ads Raised')}}</a></li>
                                                <li><a href="{{route(app()->getLocale() .'.my_ads')}}">{{__('My ads')}}</a></li>
                                                <li><a href="{{route(app()->getLocale() .'.ads_raised')}}">{{__('Market your business')}}</a></li>
                                                <li><a href="{{route(app()->getLocale() .'.ads_raised')}}">{{__('Add your ad')}}</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a  href="#">
                                                <span class="menu-text"> {{__('Support')}}</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-submenu dropdown-hover">
                                                <li><a  href="{{route(app()->getLocale() .'.ask_safeer')}}">{{__('Ask safeer mbtath')}}</a></li>

                                                <li><a  href="{{route(app()->getLocale() .'.myquestion')}}">{{__('my question')}}</a></li>

                                                {{--<li><a href="{{route(app()->getLocale() .'.suggestion')}}">{{__('Suggestion')}}</a></li>--}}
                                                {{--<li><a href="{{route(app()->getLocale() .'.complaint')}}">{{__('Complaint')}}</a></li>--}}
                                                {{--<li><a href="{{route(app()->getLocale() .'.compliment')}}">{{__('Compliment')}}</a></li>--}}
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="search-box-offcanvas search_header">
                                                <form action="#">
                                                    <input type="text" class="form-control" placeholder="{{__('Search')}}...">
                                                    <button class="search-btn"><i class="fa fa-search"></i></button>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-lg-2 col-xl-3 col-sm-6 col-6 col-custom">
                                <div class="header-right-area main-nav">
                                    <ul class="nav">
                                        <li class="mobile-menu-btn d-lg-none">
                                            <a class="off-canvas-btn" href="#">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="main-header header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-custom">
                        <div class="row align-items-center">
                            <div class="col-lg-1 col-xl-1 col-sm-6 col-6 col-custom">
                                <div class="header-logo">
                                    <a href="{{route(app()->getLocale() .'.home')}}">
                                        <img class="img-full" src="{{asset('assets/images/logo/logo.png')}}" alt="{{__('Header Logo')}}">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-11 col-xl-11 position-static d-none d-lg-block col-custom">
                                <nav class="main-nav d-flex justify-content-center">
                                    <ul class="nav">
                                        <li>
                                            <a href="{{route(app()->getLocale() .'.students_admissions')}}">
                                                <span class="menu-text"> {{__('Students admissions')}}</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#.">
                                                <span class="menu-text"> {{__('Education Dep.')}}</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-submenu dropdown-hover">
                                                <li><a  href="{{route(app()->getLocale() .'.international_universities')}}">{{__('Universities')}}</a></li>
                                                <li><a href="{{route(app()->getLocale() .'.international_schools')}}">{{__('Schools')}}</a></li>
                                                <li><a href="{{route(app()->getLocale() .'.international_nurseries')}}">{{__('Nurseries')}}</a></li>
                                                <li><a href="{{route(app()->getLocale() .'.teachers_reg')}}">{{__('My Teachers')}}</a></li>
                                                <li><a href="{{route(app()->getLocale() .'.service_reg')}}">{{__('Service')}}</a></li>
                                                <li><a href="{{route(app()->getLocale() .'.translate_service')}}">{{__('Translation')}}</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a  href="#">
                                                <span class="menu-text"> {{__('Arrival services')}}</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-submenu dropdown-hover">
                                                <li><a href="{{route(app()->getLocale() .'.insurance_service')}}">{{__('Insurance')}}</a></li>
                                                <li><a href="{{route(app()->getLocale() .'.residence_service')}}">{{__('Residence')}}</a></li>
                                                <li><a href="{{route(app()->getLocale() .'.visa_service')}}">{{__('Visa')}}</a></li>
                                                <li><a href="{{route(app()->getLocale() .'.reception_airport_service')}}">{{__('Reception at the airport')}}</a></li>
                                                <li><a href="{{route(app()->getLocale() .'.bank_account_service')}}">{{__('Open a bank account')}}</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a  href="#">
                                                <span class="menu-text"> {{__('Cost living')}}</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>

                                        </li>
                                        <li>
                                            <a  href="#">
                                                <span class="menu-text"> {{__('Currency Exchange')}}</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>

                                        </li>
                                        <li>
                                            <a  href="#">
                                                <span class="menu-text"> {{__('Ads')}}</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-submenu dropdown-hover">
                                                <li><a  href="{{route(app()->getLocale() .'.ads_featured')}}">{{__('Ads Featured')}}</a></li>
                                                <li><a href="{{route(app()->getLocale() .'.ads_raised')}}">{{__('Ads Raised')}}</a></li>
                                                <li><a href="{{route(app()->getLocale() .'.my_ads')}}">{{__('My ads')}}</a></li>
                                                <li><a href="{{route(app()->getLocale() .'.ads_raised')}}">{{__('Market your business')}}</a></li>
                                                <li><a href="{{route(app()->getLocale() .'.ads_raised')}}">{{__('Add your ad')}}</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a  href="#">
                                                <span class="menu-text"> {{__('PhD supervisors')}}</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>

                                        </li>
                                        <li>
                                            <a  href="#">
                                                <span class="menu-text"> {{__('Support')}}</span>
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-submenu dropdown-hover">
                                                <li><a  href="{{route(app()->getLocale() .'.ask_safeer')}}">{{__('Ask safeer mbtath')}}</a></li>
                                                <li><a href="{{route(app()->getLocale() .'.suggestion')}}">{{__('Suggestion')}}</a></li>
                                                <li><a href="{{route(app()->getLocale() .'.complaint')}}">{{__('Complaint')}}</a></li>
                                                <li><a href="{{route(app()->getLocale() .'.compliment')}}">{{__('Compliment')}}</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="search-box-offcanvas search_header">
                                                <form action="#">
                                                    <input type="text" class="form-control" placeholder="{{__('Search')}}...">
                                                    <button class="search-btn"><i class="fa fa-search"></i></button>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-lg-2 col-xl-3 col-sm-6 col-6 col-custom">
                                <div class="header-right-area main-nav">
                                    <ul class="nav">
                                        <li class="mobile-menu-btn d-lg-none">
                                            <a class="off-canvas-btn" href="#">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- off-canvas menu start -->
        <aside class="off-canvas-wrapper" id="mobileMenu">
            <div class="off-canvas-overlay"></div>
            <div class="off-canvas-inner-content">
                <div class="btn-close-off-canvas">
                    <i class="fa fa-times"></i>
                </div>
                <div class="off-canvas-inner">
                    <div class="search-box-offcanvas">
                        <form>
                            <input type="text" placeholder="{{__('Search')}}...">
                            <button class="search-btn"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!-- mobile menu start -->
                    <div class="mobile-navigation">
                        <nav>
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children"><a href="{{route(app()->getLocale() .'.students_admissions')}}">{{__('Students admissions')}}</a>

                                </li>
                                <li class="menu-item-has-children"><a href="#">{{__('Education Dep.')}}</a>
                                    <ul class="dropdown">
                                        <li><a  href="{{route(app()->getLocale() .'.international_universities')}}">{{__('Universities')}}</a></li>
                                        <li><a href="{{route(app()->getLocale() .'.international_schools')}}">{{__('Schools')}}</a></li>
                                        <li><a href="{{route(app()->getLocale() .'.international_nurseries')}}">{{__('Nurseries')}}</a></li>
                                        <li><a href="{{route(app()->getLocale() .'.teachers_reg')}}">{{__('My Teachers')}}</a></li>
                                        <li><a href="{{route(app()->getLocale() .'.service_reg')}}">{{__('Service')}}</a></li>
                                        <li><a href="{{route(app()->getLocale() .'.translate_service')}}">{{__('Translation')}}</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">{{__('Arrival services')}}</a>
                                    <ul class="dropdown">
                                        <li><a href="{{route(app()->getLocale() .'.insurance_service')}}">{{__('Insurance')}}</a></li>
                                        <li><a href="{{route(app()->getLocale() .'.residence_service')}}">{{__('Residence')}}</a></li>
                                        <li><a href="{{route(app()->getLocale() .'.visa_service')}}">{{__('Visa')}}</a></li>
                                        <li><a href="{{route(app()->getLocale() .'.reception_airport_service')}}">{{__('Reception at the airport')}}</a></li>
                                        <li><a href="{{route(app()->getLocale() .'.bank_account_service')}}">{{__('Open a bank account')}}</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">{{__('Cost living')}}</a>

                                </li>
                                <li class="menu-item-has-children"><a href="#">{{__('Currency Exchange')}}</a>

                                </li>
                                <li class="menu-item-has-children"><a href="#">{{__('Ads')}}</a>
                                    <ul class="dropdown">
                                        <li><a  href="{{route(app()->getLocale() .'.ads_featured')}}">{{__('Ads Featured')}}</a></li>
                                        <li><a href="{{route(app()->getLocale() .'.ads_raised')}}">{{__('Ads Raised')}}</a></li>
                                        <li><a href="{{route(app()->getLocale() .'.my_ads')}}">{{__('My ads')}}</a></li>
                                        <li><a href="{{route(app()->getLocale() .'.ads_raised')}}">{{__('Market your business')}}</a></li>
                                        <li><a href="{{route(app()->getLocale() .'.ads_raised')}}">{{__('Add your ad')}}</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">{{__('PhD supervisors')}}</a>

                                </li>
                                <li class="menu-item-has-children"><a href="#">{{__('Support')}}</a>
                                    <ul class="dropdown">
                                        <li><a  href="{{route(app()->getLocale() .'.ask_safeer')}}">{{__('Ask safeer mbtath')}}</a></li>
                                        {{--<li><a href="{{route(app()->getLocale() .'.suggestion')}}">{{__('Suggestion')}}</a></li>--}}
                                        {{--<li><a href="{{route(app()->getLocale() .'.complaint')}}">{{__('Complaint')}}</a></li>--}}
                                        {{--<li><a href="{{route(app()->getLocale() .'.compliment')}}">{{__('Compliment')}}</a></li>--}}
                                    </ul>
                                </li>


                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </aside>
    </header>
    @yield('content')
    <footer class="footer-area">
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-custom">
                        <div class="single-footer-widget m-0">
                            <div class="footer-logo">
                                <a href="{{route(app()->getLocale() .'.home')}}">
                                    <img src="{{asset('assets/images/logo/footer.png')}}" alt="{{__('Logo Image')}}">
                                </a>
                            </div>
                            <p class="desc-content">{{__("Safeer Mubta'th is an online platform for all matters related to expatriates who are students, including procedures, questions, inquiries, and directions.")}}<br>
                                {{__('always works to provide an incubating environment for expatriates, starting from the idea, passing through all the steps, and ending with the requirements of after travel.')}}
                            </p>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-7 col-md-7 col-lg-7 col-custom">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">{{__('Sections of Safeer Mbtath')}}</h2>
                            <div class="row">
                                <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-custom">
                                    <ul class="widget-list">
                                        <li><a href="{{route(app()->getLocale() .'.students_admissions')}}">{{__('Students admissions')}}</a></li>
                                        <li><a href="#.">{{__('Education Dep.')}}</a></li>
                                        <li><a href="#">{{__('Arrival services')}}</a></li>
                                    </ul>
                                </div>
                                <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-custom">
                                    <ul class="widget-list">
                                        <li><a href="{{route(app()->getLocale() .'.cost_living')}}">{{__('Cost living')}}</a></li>
                                        <li><a href="#.">{{__('Currency Exchange')}}</a></li>
                                        <li><a href="#.">{{__('Terms Conditions')}}</a></li>
                                    </ul>
                                </div>
                                <div class="col-12 col-sm-3 col-md-3 col-lg-3 col-custom">
                                    <ul class="widget-list">
                                        <li><a href="{{route(app()->getLocale() .'.ads_raised')}}">{{__('Ads')}}</a></li>
                                        <li><a href="{{route(app()->getLocale() .'.contact_us')}}">{{__('Contact Us')}}</a></li>
                                        <li><a href="#.">{{__('Privacy Policy')}}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-5 col-md-5 col-lg-5 col-custom">
                        <div class="single-footer-widget">
                            <h2 class="widget-title">{{__('See Information')}}</h2>
                            <div class="social-links mb-1">
                                <ul class="d-flex">
                                    <li>
                                        <a class="border rounded-circle" href="#." title="Twitter">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="border rounded-circle" href="#." title="Gmail">
                                            <i class="fas fa-envelope"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="border rounded-circle" href="#." title="Facebook">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="widget-body">
                                <address>{{__('Phone')}}: 01254 698 785, 36598 254 987<br>{{__('Email')}}: example@hotmail.com</address>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12 text-center mt-5">
                        <div class="copyright-content">
                            <p>{{__('All rights reserved to Safeer Mbtath website and subject to the terms and conditions of use agreement')}} © {{date('Y')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<script src="{{asset('node_modules/jquery/dist/jquery.js')}}"></script>
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script>
    Pusher.logToConsole = true;

    var pusher = new Pusher('4067d119f85cc9443460', {
        cluster: 'eu'
    });
</script>
<script src="{{asset('js/pusherNotifications.js')}}"></script>
@yield('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="{{asset('node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
{{--<script src="{{asset('js/app.js')}}"></script>--}}
<script src="{{asset('js/intlTelInput.js')}}"></script>
<script src="{{asset('js/utils.js')}}"></script>



<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script type="text/javascript" src="https://unpkg.com/vue@2.6.11/dist/vue.js"></script>




<script>
    var locale = '{{ config('app.locale') }}';
    if(locale == 'ar'){
        $('input[required],textarea[required],Select[required]').attr("oninvalid" , "this.setCustomValidity('يرجى ملء الحقل')");
        $('input[required],textarea[required],Select[required]').attr("oninput", "setCustomValidity('')");
          $('[type="email"]').attr("oninvalid" , "this.setCustomValidity('البريد الالكترونى خاطئ')");
    }
</script>


</body>
</html>
