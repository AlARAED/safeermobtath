@extends('layouts.app')
@section('title', __('Distinguish your ad'))
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
                <a href="#">{{__('Distinguish your ad')}}</a>
            </li>
        </ul>
        <div class="col-lg-12 m-auto text-center col-custom">
            <div class="section-content mt-3">
                <h2 class="title-1">{{__('Distinguish your ad')}}</h2>
            </div>
            <div>
            </div>
        </div>

        <div class="row">
        <div class="col-md-12">
            <div class="ad_dtl_content mt-4 mb-5">
                <h5 class="mb-3">{{__('Why should you make your ad stand out?')}}</h5>
                <p class="mb-2">{{__("The distinguished advertisement has a special corner on the homepage of the site, so that all site visitors, members and non-members, can see it.")}}</p>
                <p class="mb-2">{{__("The featured advertisement will be published in the newsletter that is sent to the site members.")}}</p>
                <p class="mb-2">{{__("Premium ads have a distinctive design than regular ads.")}}</p>

            </div>
            <div class="ad_dtl_content d-flex mb-3">
                <h5 class="mr-2">{{__('Duration ad discrimination')}}</h5>
                <input type="text" class="form-control w_90 input_radius">
            </div>
            <p class="color_red mb-5">{{__('Advertising discrimination incurs an additional fee of $ 5 per day')}}</p>
            <h5 class="text-center mb-5">{{__('Ad price')}}<span class="color_red ml-3 ">75$</span></h5>


        </div>
        </div>

        <div class="scholarship">
            <button class="form-control m-auto btn_complete">{{__('Pay to have your ad featured')}}</button>
        </div>
        </div>


    </section>
@endsection
@section('js')
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
@stop