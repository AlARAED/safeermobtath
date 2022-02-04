@extends('layouts.app')
@section('title', __('Ad Details'))
@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
@stop
@section('content')
<section class="education cost_living">
    <div class="container">
        <ul class="nav_tab">
            <li>
                <a href="/">{{__('Home')}}</a>
                <i class="fas @if(App::getLocale() == 'en') fa-angle-right @else fa-angle-left @endif"></i>
            </li>
            <li>
                <a href="#">{{__('Ad Details')}}</a>
            </li>
        </ul>
        <div class="col-lg-12 m-auto text-center col-custom">
            <div class="section-content mt-3">
                <h2 class="title-1">{{__('Ad')}}</h2>
            </div>
            <div>
            <a href="" class="add_ads"><i class="fas fa-plus mr-2"></i>{{__('Add Your Ad')}}</a>
            </div>
        </div>
        <select name="" class="form-control m-auto determine_city">
            <option value="">{{__('Determine the city')}}</option>
            <option value="">{{__('Riyadh')}}</option>
            <option value="">{{__('Mecca')}}</option>
        </select>
        <p class="color_red text-center mb-5">{{__('Please login or register to contact the advertiser')}}</p>
        <div class="row">
        <div class="col-md-10">
            <h4 class="text-left">{{__('Ad for the purchase of furniture')}}</h4>
            <div class="ad_dtl_content mt-4 mb-5">
                <h5 class="mb-3">{{__('Ad Details')}}</h5>
                <p class="mb-5">{{__("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur beatae commodi consectetur consequatur corporis dolores dolorum ducimus eum ex iste minima modi, nihil quasi, quo reprehenderit repudiandae similique ullam.")}}</p>
                <div class="col-md-11 ml-auto">
                <img class="" src="{{asset('assets/images/ads3.png')}}">
                    <div class="feature-image position-relative mt-4">
                        <img src="{{asset('assets/images/ads3.PNG')}}" alt="">
                        <div class="popup-video position-absolute">
                            <a class="popup-vimeo" href="{{asset('assets/videos/faris.mp4')}}">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ad_dtl_content mt-4">
                <h5 class="mb-3">{{__('Ad Number')}}</h5>
                <p class="mb-5">012345</p>
            </div>
            <div class="ad_dtl_content mt-4">
                <h5 class="mb-3">{{__('Other advantages')}}</h5>
                <p class="mb-5">{{__("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur beatae commodi consectetur consequatur corporis dolores dolorum ducimus eum ex iste minima modi, nihil quasi, quo reprehenderit repudiandae similique ullam.")}}</p>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-7">
                <div class="ad_dtl_content mt-4">
                    <h5 class="mb-3">{{__('Advertiser')}}</h5>
                    <div class="d-flex">
                        <div class="prof_img mr-2">
                            <img class="profile_img" src="{{asset('assets/images/avatar.PNG')}}" width="60" height="60" alt="">
                        </div>
                        <p class="mb-auto mt-auto">{{__('Adam Ali')}}</p>
                    </div>
                    <div class="d-flex mt-3">
                    <p class="w_170 font-weight-bold"><i class="fas fa-phone mr-2"></i>{{__('Telephone number')}}</p>
                    <p class="">0123123123</p>
                    </div>
                    <div class="d-flex mt-2">
                        <p class="w_170 font-weight-bold"><i class="fas fa-envelope mr-2"></i>{{__('Email')}}</p>
                        <p class="">ahmedahmed@gmail.com</p>
                    </div>
                    <div class="d-flex mt-2">
                        <p class="w_170 font-weight-bold"><i class="far fa-window-maximize mr-2"></i>{{__('Website')}}</p>
                        <p class="">{{__('Not Found')}}</p>
                    </div>
                    <div class="d-flex mt-2">
                        <p class="w_170 font-weight-bold"><i class="far fa-calendar-alt mr-2"></i>{{__('Ad publication date')}}</p>
                        <p class="">10/11/2020</p>
                    </div>
                    <div class="d-flex mt-2">
                        <p class="w_170 font-weight-bold"><i class="far fa-calendar-alt mr-2"></i>{{__('Ad expiration date')}}</p>
                        <p class="">20/11/2020</p>
                    </div>
                    <p class="w_170 mt-5 font-weight-bold"><i class="fas fa-flag mr-3 color_red"></i>{{__('Reporting content')}}</p>

                </div>
                </div>
            <div class="col-12 col-md-5">
                <div class="ad_dtl_content mt-4">
                    <h5 class="mb-3">{{__('Location')}}</h5>
                    <p>{{__('District name')}} / {{__('City name')}} / {{__('Country name')}} </p>
                    <p class="mt-3 mb-3 font-weight-bold">{{__('Location on google map')}}</p>
                    <img src="{{asset('assets/images/map.PNG')}}" alt="">

                </div>
            </div>
                </div>
        <div class="scholarship">
            <a href="" class="form-control m-auto btn_complete">{{__('Return to the main ads page')}}</a>
        </div>
        </div>


    </section>
@endsection
@section('js')
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
@stop