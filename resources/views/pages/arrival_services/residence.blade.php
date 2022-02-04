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
                <a href="#">{{__('Residence')}}</a>
            </li>
        </ul>
        <div class="col-lg-7 m-auto text-center col-custom">
            <div class="section-content mt-3">
                <h2 class="title-1">{{__('Arrival Services')}}</h2>
            </div>
        </div>
        <form method="POST" id="form_r" action="{{route(app()->getLocale().'.insurance')}}"  enctype="multipart/form-data">
            @csrf
        <div class="std_form">
            <div class="row form-group">
                <div class="col-4 col-md-2">
                    <label for="service_type">{{__('Service Type')}}</label>
                </div>
                <div class="col-8 col-md-3">
                    <select name="" id="service_type" class="form-control" disabled>
                        <option value="1">{{__('Insurance')}}</option>
                        <option value="2" selected>{{__('Residence')}}</option>
                        <option value="3">{{__('Visa')}}</option>
                        <option value="4">{{__('Reception at the airport')}}</option>
                        <option value="5">{{__('Steps to open a bank account')}}</option>
                    </select>
                </div>
            </div>


                <input type="hidden" id="mobile_no" class="form-control" name="type" value="2">

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
                <div class="col-4 col-md-2">
                    <label for="homeland">{{__('Homeland')}}</label>
                </div>
                <div class="col-8 col-md-3">
                    <input type="text" id="homeland" class="form-control" name="your_country" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-4 col-md-2">
                    <label for="destination_country">{{__('Destination Country')}}</label>
                </div>
                <div class="col-8 col-md-3">
                    <input type="text" id="destination_country" class="form-control" name="to_country" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-8 col-md-4">
                    <label for="number_individuals">{{__('Limit the number of individuals to obtain this service')}}</label>
                </div>
                <div class="col-3 col-md-1">
                    <input type="number" id="number_individuals" class="form-control"   name="no_family" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-3 col-md-2">
                    <label for="number_individuals">{{__('Do you need')}}</label>
                </div>
                <div class="col-9 col-md-4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="what_required" id="inlineRadio1" value="1"  checked >
                        <label class="form-check-label" for="inlineRadio1">{{__('Institute housing')}}</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="what_required" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">{{__('Family')}}</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="what_required" id="inlineRadio3" value="3">
                        <label class="form-check-label" for="inlineRadio3">{{__('Hotel')}}</label>
                    </div>
                </div>
            </div>
            <div class="scholarship m-auto w_max_content">
                <span class="form-control financial_g btn_newsletter mt-5" onclick="document.getElementById('getFile1').click()">{{__('Attach the ticket')}}</span>
                <input id="getFile1" type="file" class="d-none" name="tecket_image" required>

                <button class="form-control btn_newsletter">{{__('Send')}}</button>
            </div>


        </div>
            </form>

        </div>
</section>
@endsection