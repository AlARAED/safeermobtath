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
                    <div class="col-12 col-md-10 d-flex m-auto">
                        <div class="col-12 col-md-6 border__">
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
                        <div class="col-12 col-md-6">
                            <div class="ml-auto w_max_content">
                            <div class="d-flex mb-2">
                                <h5>{{__('Number of lessons completed')}}</h5><p>20</p>
                            </div>
                            <div class="d-flex mb-2">
                                <h5>{{__('Re-employment rate')}}</h5><p>10%</p>
                            </div>
                                </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="profile_bg">
                <div class="row">
                    <div class="col-12 col-md-6 m-auto">
                        <h5 class="mr-auto w_max_content">{{__('The service you will provide')}}</h5>
                    </div>
                    <div class="col-12 col-md-6 d-flex float-right service_prof">
                        <button type="submit" class="form-control btn_newsletter ml-auto mr-3">{{__('Writing research papers')}}</button>
                    </div>
                </div>

            </div>
            <div class="profile_bg">
                <h5 class="prof_info">{{__("Please introduce yourself by sharing the information: Why are you interested in learning languages and what is your main motivation; You can write about yourself as a person, stating your main accomplishments and life goals; Any other interesting information about you that you would like to share would be appreciated. Note: You can write in different languages, so that different language speakers can read and understand the text")}}</h5>
                <textarea name="" id="" cols="30" rows="15" class="form-control safeer_textarea"></textarea>
            </div>
            <div class="profile_bg">
                <div class="row">
                    <div class="col-6 col-md-6 m-auto">
                        <h5 class="mr-auto w_max_content">{{__('Definition Video')}}</h5>
                    </div>
                    <div class="col-6 col-md-6 d-flex float-right">
                        <button class="form-control btn_newsletter ml-auto mr-0" onclick="document.getElementById('getFile1').click()">{{__('Attach')}}</button>
                        <input id="getFile1" type="file" class="d-none">
                    </div>
                </div>

            </div>
            <div class="profile_bg">
                <div class="row">
                    <div class="col-6 col-md-6 m-auto">
                        <h5 class="mr-auto w_max_content">{{__('Experience')}}</h5>
                    </div>
                    <div class="col-6 col-md-6 d-flex float-right">
                        <button class="form-control btn_newsletter ml-auto mr-0" onclick="document.getElementById('getFile2').click()">{{__('Add experience')}}</button>
                        <input id="getFile2" type="file" class="d-none">
                    </div>
                </div>

            </div>
            <div class="profile_bg">
                <div class="row">
                    <div class="col-6 col-md-6 m-auto">
                        <h5 class="mr-auto w_max_content">{{__('Education')}}</h5>
                    </div>
                    <div class="col-6 col-md-6 d-flex float-right">
                        <button class="form-control btn_newsletter ml-auto mr-0" onclick="document.getElementById('getFile3').click()">{{__('Add')}}</button>
                        <input id="getFile3" type="file" class="d-none">
                    </div>
                </div>

            </div>
            <div class="profile_bg">
                <div class="row">
                    <div class="col-6 col-md-6 m-auto">
                        <h5 class="mr-auto w_max_content">{{__('Skills')}}</h5>
                    </div>
                    <div class="col-6 col-md-6 d-flex float-right">
                        <button class="form-control btn_newsletter ml-auto mr-0" onclick="document.getElementById('getFile4').click()">{{__('Add')}}</button>
                        <input id="getFile4" type="file" class="d-none">
                    </div>
                </div>

            </div>
            <div class="scholarship">
                <button class="form-control m-auto btn_complete">{{__('Next')}}</button>
            </div>
        </div>
    </section>

@endsection
