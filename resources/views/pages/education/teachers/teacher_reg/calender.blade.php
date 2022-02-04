@extends('layouts.app')
@section('title', __('Calender'))
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/calender.css')}}">
    @stop
@section('content')
    <section class="set_appointments calender_ text-center">
        <div class="container">
            <h3>{{__('Choose your weekly program')}}</h3>
            <h4>{{__('Schedule your available appointments')}}</h4>
            <div id="app"></div>
            <div class="appoin_check text-left ml-3">
                <div class="custom-control custom-checkbox mb-2">
                    <input type="checkbox" class="custom-control-input" id="customCheck0">
                    <label class="custom-control-label" for="customCheck0">{{__('Skip and select later')}}</label>
                </div>
            <div class="custom-control custom-checkbox mb-2">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">{{__('I would like to receive a reminder 24 hours before the class time')}}</label>
            </div>
            <div class="custom-control custom-checkbox mb-2">
                <input type="checkbox" class="custom-control-input" id="customCheck2">
                <label class="custom-control-label" for="customCheck2">{{__('I would like to receive a reminder an hour before the class time')}}</label>
            </div>
            <div class="custom-control custom-checkbox mb-2">
                <input type="checkbox" class="custom-control-input" id="customCheck3">
                <label class="custom-control-label" for="customCheck3">{{__('I agree to the terms of the site')}}</label>
            </div>
            </div>
            <div class="scholarship">
                <button class="form-control m-auto btn_complete">{{__('Saving Data')}}</button>
            </div>
        </div>
    </section>

@endsection
@section('js')
    <script src="{{asset('assets/js/calender.js')}}"></script>
@stop