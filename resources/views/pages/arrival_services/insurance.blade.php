@extends('layouts.app')
@section('title', __('Arrival Services'))
@section('content')
<section class="cost_living bg__safeer sign_up">
    <div class="container">
        <ul class="nav_tab mt-0">
            <li>
                <a href="/">{{__('Home')}}</a>
                <i class="fas @if(App::getLocale() == 'en') fa-angle-right @else fa-angle-left @endif"></i>
            </li>
            <li>
                <a href="#">{{__('Arrival Services')}}</a>
                <i class="fas @if(App::getLocale() == 'en') fa-angle-right @else fa-angle-left @endif"></i>
            </li>
            <li>
                <a href="#">{{__('Insurance')}}</a>
            </li>
        </ul>
        <div class="col-lg-7 m-auto text-center col-custom">
            <div class="section-content mt-3">
                <h2 class="title-1">{{__('Arrival Services')}}</h2>
            </div>
        </div>
        <div class="std_form">
            <div class="row form-group">
                <div class="col-4 col-md-2">
                    <label for="service_type">{{__('Service Type')}}</label>
                </div>
                <div class="col-8 col-md-3">
                    <select name="" id="service_type" class="form-control" disabled>
                        <option value="1" selected>{{__('Insurance')}}</option>
                        <option value="2">{{__('Residence')}}</option>
                        <option value="3">{{__('Visa')}}</option>
                        <option value="4">{{__('Reception at the airport')}}</option>
                        <option value="5">{{__('Steps to open a bank account')}}</option>
                    </select>
                </div>
              </div>
        <form method="POST" id="form_r" action="{{route(app()->getLocale().'.insurance')}}"  enctype="multipart/form-data">
            @csrf

                <input type="hidden" id="mobile_no" class="form-control" name="type" value="1">

                <div class="row form-group">
                <div class="col-4 col-md-2">
                    <label for="mobile_no">{{__('Mobile Number')}}</label>
                </div>
                <div class="col-8 col-md-3">
                    <input type="text" id="mobile_no" class="form-control" name="phone" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-4 col-md-2">
                    <label for="email">{{__('Email')}}</label>
                </div>
                <div class="col-8 col-md-3">
                    <input type="email" id="email" class="form-control" name="email" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-8 col-md-4">
                    <label for="number_individuals">{{__('Limit the number of individuals to obtain this service')}}</label>
                </div>
                <div class="col-3 col-md-1">
                    <input type="number" id="number_individuals" class="form-control"   name="no_family">
                </div>
            </div>

            <input type="hidden" id="number_individuals" class="form-control"   name="1" >


            <div class="scholarship m-auto w_max_content">

                <button class="form-control btn_newsletter">{{__('Send')}}</button>
            </div>
        </div>
        </div>
</section>
@endsection