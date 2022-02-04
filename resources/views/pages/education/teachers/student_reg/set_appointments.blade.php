@extends('layouts.app')
@section('title', __('Set Appointments'))
@section('content')
    <section class="set_appointments text-center">
        <div class="container">
            <div class="profile_bg">
            <h3>{{__('Choose your study plan for this lesson')}}</h3>
            <h4>{{__('Choose your weekly program')}}</h4>
            <select name="" class="form-control">
                <option value="">{{__('Choose the minutes')}}</option>
                <option value="">60 {{__('minutes a day')}}</option>
                <option value="">45 {{__('minutes a day')}}</option>
                <option value="">30 {{__('minutes a day')}}</option>
            </select>
            <h4>{{__('Choose the level of commitment')}}</h4>
            <select name="" class="form-control">
                <option value="">{{__('Choose the days')}}</option>
                <option value="">5 {{__('days a week')}}</option>
                <option value="">3 {{__('days a week')}}</option>
                <option value="">2 {{__('days a week')}}</option>
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
            <div class="col-12 col-md-7 m-auto">
                <div class="plan_summary">
                    <h3>{{__('Your plan summary')}}</h3>
                    <h4>60 {{__('minutes a day')}} 5 {{__('days a week')}}</h4>
                    <h3>{{__('The monthly value')}}</h3>
                    <h4>100$</h4>
                    <h3 class="mb-0">{{__('You can cancel at any time')}}</h3>
                </div>
            </div>
            <div class="scholarship">
                <button class="form-control m-auto btn_complete">{{__('Confirm and pay')}}</button>
            </div>
            </div>
        </div>
    </section>

@endsection
