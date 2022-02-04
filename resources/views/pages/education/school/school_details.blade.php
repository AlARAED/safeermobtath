@extends('layouts.app')
@section('title', __('School Details'))
@section('content')
<section class="education education_detls">
    <div class="container">
        <ul class="nav_tab">
            <li>
                <a href="">{{__('Home')}}</a>
                <i class="fas @if(App::getLocale() == 'en') fa-angle-right @else fa-angle-left @endif"></i>
            </li>
            <li>
                <a href="">{{__('Education')}}</a>
                <i class="fas @if(App::getLocale() == 'en') fa-angle-right @else fa-angle-left @endif"></i>
            </li>
            <li>
                <a href="">{{__('Schools')}}</a>
            </li>
        </ul>

        <div class="col-lg-7 m-auto text-center col-custom">
            <div class="section-content mt-3">
                <h2 class="title-1">
                    @if(App::getLocale() == 'en')
                        {{$School->name_en}}
                    @else
                        {{$School->name_ar}}
                    @endif
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12">
                @if(App::getLocale() == 'en')
                    {!! $School->descreption_en !!}
                @else
                    {!!  $School->descreption_ar !!}
                @endif
            </div>
            <div class="col-12 col-md-6">
                <p class="univ_info_ w-100">
                </p>
                <h4 class="univ_title">{{__('Address')}}</h4>
                <p class="univ_info_">
                    @if(App::getLocale() == 'en')
                        {!!  $School->address_en!!}
                    @else
                        {!! $School->address_ar !!}
                    @endif</p>
                <h4 class="univ_title">{{__('Majors')}}</h4>
                <p class="univ_info_">
                    @if(App::getLocale() == 'en')
                        {!! $School->fields_en !!}
                    @else
                        {!!$School->fields_ar  !!}
                    @endif
                </p>
            </div>
            <div class="col-12 col-md-6">
                <img src="{{asset('uploads/'.$School->image)}}" alt="" width="820px" height="550px">
            </div>
            <div class="col-12 col-md-9">
                <h4 class="univ_title">{{__('Additional Information')}}</h4>
                <p class="univ_info_ w-100">
                @if(App::getLocale() == 'en')
                    {!!$School->more_info_en!!}
                @else
                    {!! $School->more_info_ar !!}
                @endif
            </div>

            <div class="col-6 col-md-6">
                <a href="{{route(app()->getLocale() .'.contact_us')}}" class="form-control btn_newsletter">{{__('Contact Us')}}</a>

                {{--                <a href="#" target="_blank" class="form-control btn_newsletter">{{__('Visit the website')}}</a>--}}
            </div>
            {{--                <div class="col-6 col-md-6 ml-auto">--}}
            {{--                    <a href="{{route(app()->getLocale() .'.contact_us')}}" class="form-control btn_newsletter">{{__('Contact Us')}}</a>--}}
            {{--                </div>--}}


        </div>
        </div>
</section>
@endsection
