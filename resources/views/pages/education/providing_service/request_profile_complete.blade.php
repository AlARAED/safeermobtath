@extends('layouts.app')
@section('title', __('Profile Complete'))
@section('content')
    <section class="profile_complete">
        <div class="container">
            <div class="profile_bg prof_head">
                <div class="prof_img">
                    <img class="profile_img" src="{{asset('assets/images/avatar.PNG')}}" width="100" height="100" alt="">
                </div>
                <div class="profile_username d-flex">
                    <img src="{{asset('assets/images/icon/country.svg')}}" alt="">
                    <h5>{{__('Adam Ali')}}</h5>
                </div>
                <div class="profile-rating mb-3">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <div class="row prof_content">
                    <div class="col-10 col-md-10 m-auto">
                        <div class="w_max_content m-auto">
                            <div class="d-flex mb-2">
                                <i class="far fa-clock"></i><h5>{{__('Timing')}}</h5><p>10:10 {{__('pm')}}</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="fas fa-shield-alt"></i><h5>{{__('Join Safeer Mbtath with date')}}</h5><p>1/11/2020</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="far fa-heart"></i><h5>{{__('Likes')}}</h5><p>10</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="profile_bg">
                <h5 class="prof_info">{{__("Please introduce yourself by sharing the information: Why are you interested in learning languages and what is your main motivation; You can write about yourself as a person, stating your main accomplishments and life goals; Any other interesting information about you that you would like to share would be appreciated. Note: You can write in different languages, so that different language speakers can read and understand the text")}}</h5>
                <textarea name="" id="" cols="30" rows="15" class="form-control safeer_textarea"></textarea>
            </div>
            <div class="col-10 col-md-10 m-auto">
            <div class="appoin_check text-left mt-5 ml-3">
                <div class="custom-control custom-checkbox mb-2">
                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                    <label class="custom-control-label" for="customCheck3">{{__('I agree to the terms of the site')}}</label>
                </div>
            </div>
            </div>
            <div class="scholarship">
                <button class="form-control m-auto btn_complete">{{__('Saving Data')}}</button>
            </div>
        </div>
    </section>

@endsection
