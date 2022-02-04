@extends('layouts.app')
@section('title', __('Ads Featured'))
@section('content')
<section class="education cost_living">
    <div class="container">
        <ul class="nav_tab">
            <li>
                <a href="/">{{__('Home')}}</a>
                <i class="fas @if(App::getLocale() == 'en') fa-angle-right @else fa-angle-left @endif"></i>
            </li>
            <li>
                <a href="#">{{__('Ads Featured')}}</a>
            </li>
        </ul>
        <div class="col-lg-12 m-auto text-center col-custom">
            <div class="section-content mt-3">
                <h2 class="title-1">{{__('Ads Featured')}}</h2>
            </div>
            <div>
            <a href="" class="add_ads"><i class="fas fa-plus mr-2"></i>{{__('Add Your Ad')}}</a>
            </div>
        </div>
        <div class="d-flex mr-auto mb_30 d_block_mobile">
            <select name="" class="form-control mb_10_mobile ml_15_mobile  service_type input_radius w_200">
                <option value="">{{__('By department')}}</option>
                <option value="1">{{__('Furniture')}}</option>
                <option value="2">{{__('Car')}}</option>
                <option value="3">{{__('Housing')}}</option>
            </select>
            <div class="input-group ads_inp ml-3 mb_10_mobile w_200">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-map-marker-alt color_red"></i></span>
                </div>
                <input type="text" id="" class="form-control input_radius pl-0 pt-1" placeholder="{{__('Determine Location')}}">
            </div>
            <select name="" class="form-control mr-auto ml-4 mb_0 mb_10_mobile ml_15_mobile determine_city">
                <option value="">{{__('Determine the city')}}</option>
                <option value="">{{__('Riyadh')}}</option>
                <option value="">{{__('Mecca')}}</option>
            </select>
        </div>

        </div>
        <div class="featured_ads featured_ads_page mb-4">
            <div class="container">
                        <div class="">
                            <img class="d-block w-100" src="{{asset('assets/images/ads.png')}}" alt="{{__('ads')}}">
                        </div>
                <div class="row">
                    <div class="col-12 col-md-7 m-auto">
                        <h4 class="mt-3">{{__("Grow your business and Profits NOW")}}<br>{{__("Safeer Mubta'th offers digital advertisement services for various businesses achieving its goals of increasing profits, sales and customers.")}}<br>{{__("Order now!")}}</h4>
                    </div>
                </div>
            </div>
        </div>
    <div class="featured_ads featured_ads_page mb-4">
        <div class="container">
            <div class="">
                <img class="d-block w-100" src="{{asset('assets/images/ads.png')}}" alt="{{__('ads')}}">
            </div>
            <div class="row">
                <div class="col-12 col-md-7 m-auto">
                    <h4 class="mt-3">{{__("Grow your business and Profits NOW")}}<br>{{__("Safeer Mubta'th offers digital advertisement services for various businesses achieving its goals of increasing profits, sales and customers.")}}<br>{{__("Order now!")}}</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="featured_ads featured_ads_page mb-4">
        <div class="container">
            <div class="">
                <img class="d-block w-100" src="{{asset('assets/images/ads.png')}}" alt="{{__('ads')}}">
            </div>
            <div class="row">
                <div class="col-12 col-md-7 m-auto">
                    <h4 class="mt-3">{{__("Grow your business and Profits NOW")}}<br>{{__("Safeer Mubta'th offers digital advertisement services for various businesses achieving its goals of increasing profits, sales and customers.")}}<br>{{__("Order now!")}}</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="featured_ads featured_ads_page mb-4">
        <div class="container">
            <div class="">
                <img class="d-block w-100" src="{{asset('assets/images/ads.png')}}" alt="{{__('ads')}}">
            </div>
            <div class="row">
                <div class="col-12 col-md-7 m-auto">
                    <h4 class="mt-3">{{__("Grow your business and Profits NOW")}}<br>{{__("Safeer Mubta'th offers digital advertisement services for various businesses achieving its goals of increasing profits, sales and customers.")}}<br>{{__("Order now!")}}</h4>
                </div>
            </div>
        </div>
    </div>

    <nav class="mt-5">
        <ul class="pagination">
            <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                <span class="page-link" aria-hidden="true">‹</span>
            </li>
            <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item">
                <a class="page-link" href="#" rel="next" aria-label="Next »">›</a>
            </li>
        </ul>
    </nav>

    </section>
@endsection