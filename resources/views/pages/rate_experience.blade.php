@extends('layouts.app')
@section('title', __('Rate your experience'))
@section('content')
        <div class="col-lg-5 m-auto text-center col-custom">
            <div class="section-content mb-5 mt-5">
                <h2 class="title-1">{{__('Rate your experience with Safeer Mbtath')}}</h2>
            </div>
        </div>
        <section class="rate_experience">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-9 m-auto text-center">
                    <img class="profile_img" src="{{asset('assets/images/avatar.PNG')}}" width="100" height="100" alt="">
                    <h5 class="mt-3 mb-3">{{__('Customer Name')}}</h5>
                    <textarea class="form-control" name="" rows="8" placeholder="{{__('We shared your experience with Safeer Mbtath')}}"></textarea>
                    <div class="scholarship">
                        <button class="form-control btn_complete m-auto">{{__('Send')}}</button>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection