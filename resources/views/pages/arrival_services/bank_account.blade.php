@extends('layouts.app')
@section('title', __('Arrival Services'))
@section('content')
<section class="cost_living bg__safeer sign_up" xmlns="http://www.w3.org/1999/html">
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
                <a href="#">{{__('Open a bank account')}}</a>
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
                        <option value="2">{{__('Residence')}}</option>
                        <option value="3">{{__('Visa')}}</option>
                        <option value="4">{{__('Reception at the airport')}}</option>
                        <option value="5" selected>{{__('Steps to open a bank account')}}</option>
                    </select>
                </div>
            </div>
            <input type="hidden" id="mobile_no" class="form-control" name="type" value="4">

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
            {{--<div class="row">--}}
                {{--<div class="col-11 col-md-6 doc_required">--}}
                    {{--<p class="color_blue mb-2"><strong>{{__('Documents required to open a bank account')}}</strong></p>--}}
                    {{--<p class="color_blue mb-2"><strong>{{__('The documents required may vary, but the rules are fairly simple. All you need is to bring two documents - the originals, not copies. These documents can be like')}}</strong></p>--}}
                    {{--<li class="mb-2">{{__('Current passport')}}</li>--}}
                    {{--<li class="mb-2">{{__('Employee ID card with your photo on it which has been issued by a well known employer in your area')}}</li>--}}
                    {{--<li class="mb-2">{{__('A debit or bank card bearing your name and signature on it. Canadian credit card with your name and signature')}}</li>--}}
                    {{--<li class="mb-2">{{__('Customer card from the Canadian National Institute of the Blind with your photo and signature')}}</li>--}}
                    {{--<li class="mb-2">{{__('A document issued by someone in good standing with the financial institution or in the community confirming your identity')}}</li>--}}

                {{--</div>--}}
            {{--</div>--}}

            <div class="scholarship m-auto w_max_content">
                {{--<button class="form-control financial_g btn_newsletter mt-5" onclick="document.getElementById('getFile1').click()">{{__('Attach the required papers')}}</button>--}}
                {{--<input type="number" id="number_individuals" class="form-control"   name="no_family" required>--}}
                <button class="form-control btn_newsletter">{{__('Send')}}</button>
            </div>
        </div>
        </div>
    </form>
</section>
@endsection