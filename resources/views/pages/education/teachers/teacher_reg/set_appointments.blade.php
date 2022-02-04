@extends('layouts.app')
@section('title', __('Set Appointments'))
@section('content')
    <section class="set_appointments text-center">
        <div class="container">
            <h3>{{__('Choose your weekly program')}}</h3>
            <h4>{{__('Schedule your available appointments')}}</h4>
            <select name="" class="form-control">
                <option value="">{{__('Choose the minutes')}}</option>
                <option value="">60 {{__('minutes a day')}}</option>
                <option value="">45 {{__('minutes a day')}}</option>
                <option value="">30 {{__('minutes a day')}}</option>
            </select>
            <select name="" class="form-control">
                <option value="">{{__('Choose the days')}}</option>
                <option value="">5{{__('days a week')}}</option>
                <option value="">3{{__('days a week')}}</option>
                <option value="">2{{__('days a week')}}</option>
            </select>
            <div class="appoin_check text-left m-auto w_max_content">
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
                <button class="form-control m-auto btn_complete">{{__('Next')}}</button>
            </div>
        </div>
    </section>

@endsection
