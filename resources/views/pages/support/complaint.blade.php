@extends('layouts.app')
@section('title', __('Complaint'))
@section('content')
<section class="safeer">
    <div class="col-lg-5 m-auto text-center col-custom">
        <div class="section-content mb-5">
            <h2 class="title-1">{{__('Complaint')}}</h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 m-auto mt-4">
                <div class="row">
                 <div class="col-12 col-md-4">
                <div class="form-group mb-4">
                    <label for="address" class="complaint_label">{{__('Address')}}</label>
                    <input type="text" id="address" class="form-control complaint_text">
                </div>
                </div>
                </div>
                <h5>{{__('Text of the complaint')}}</h5>

                <textarea name="" id="" cols="30" rows="6" class="form-control safeer_textarea"></textarea>
                <div class="scholarship">
                    <button class="form-control btn_newsletter m-auto">{{__('Send')}}</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection