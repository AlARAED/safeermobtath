@extends('layouts.app')
@section('title', __('Profile Complete'))
@section('content')
    <section class="profile_complete">
        <div class="container">
            <div class="profile_bg prof_head">
                <div class="prof_img">
                    <img class="profile_img" src="{{asset('uploads/'.Auth::user()->image)}}" width="100" height="100" alt="">
                </div>
                <div class="profile_username d-flex">
                    <img src="{{asset('assets/images/icon/country.svg')}}" alt="">
                    <h5>{{$teach->first_name}}   {{$teach->last_name}}</h5>
                </div>
                <div class="row prof_content">
                    <div class="col-10 col-md-10 m-auto">
                        <div class="w_max_content m-auto">
                            <div class="d-flex mb-2">
                                <i class="far fa-clock"></i><h5>{{__('Timing')}}</h5><p><?php echo \Carbon\Carbon::now()->format('H:i:s A')?></p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="fas fa-shield-alt"></i><h5>{{__('Join Safeer Mbtath with date')}}</h5><p>{{Auth::user()->created_at->format('d/m/Y')}}</p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <form method="POST" id="form_r" action="{{route(app()->getLocale().'.savestudent',['id'=>$teach->id])}}"  enctype="multipart/form-data">
                @csrf
            <div class="profile_bg">
                <h5 class="prof_info">{{__("Please introduce yourself by sharing the information: Why are you interested in learning languages and what is your main motivation; You can write about yourself as a person, stating your main accomplishments and life goals; Any other interesting information about you that you would like to share would be appreciated. Note: You can write in different languages, so that different language speakers can read and understand the text")}}</h5>
                <textarea name="short_cv" id="" cols="30" rows="15" class="form-control safeer_textarea" required></textarea>
            </div>

{{--            <div class="col-12 col-md-10 m-auto">--}}
{{--            <div class="appoin_check text-left mt-5 ml-3">--}}
{{--                <div class="custom-control custom-checkbox mb-2">--}}
{{--                    <input type="checkbox" class="custom-control-input" id="customCheck1">--}}
{{--                    <label class="custom-control-label" for="customCheck1">{{__('I would like to receive a reminder 24 hours before the class time')}}</label>--}}
{{--                </div>--}}
{{--                <div class="custom-control custom-checkbox mb-2">--}}
{{--                    <input type="checkbox" class="custom-control-input" id="customCheck2">--}}
{{--                    <label class="custom-control-label" for="customCheck2">{{__('I would like to receive a reminder an hour before the class time')}}</label>--}}
{{--                </div>--}}
{{--                <div class="custom-control custom-checkbox mb-2">--}}
{{--                    <input type="checkbox" class="custom-control-input" id="customCheck3">--}}
{{--                    <label class="custom-control-label" for="customCheck3">{{__('I agree to the terms of the site')}}</label>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            </div>--}}
            <div class="scholarship">
                <button class="form-control m-auto btn_complete">{{__('Saving Data')}}</button>
            </div></form>
        </div>
    </section>

@endsection
