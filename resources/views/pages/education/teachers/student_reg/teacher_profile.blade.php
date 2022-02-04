@extends('layouts.app')
@section('title', __('Teacher Profile'))
@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
@stop
@section('content')
    <section class="profile_complete teacher_profile std_teacher_profile">
        <div class="container">
            <div class="teac_shadow">
            <div class="profile_bg prof_head">
                <div class="prof_img">
                    <img class="profile_img" src="{{asset('assets/images/avatar.PNG')}}" width="100" height="100" alt="">
                </div>
                <div class="edit_delete">
                    <div class="s_emp_icon">
                        <i class="fas fa-heart m_0_50"></i>
                        <i class="fas fa-flag"></i>
                    </div>
                </div>
                <div class="profile_username d-flex">
                    <img src="{{asset('assets/images/icon/country.svg')}}" alt="">
                    <h5>{{__('Adam Ali')}}</h5>
                </div>
                <div class="profile-rating mb-2">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <h5>{{__('English teacher')}}</h5>
                <button  type="submit" class="form-control btn_newsletter ml-auto mr-0 btn_prof_head">{{__('Book a lesson')}}</button>

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
                            <div class="position-relative ml-auto w_max_content">
                            <div class="ev_time_table">
                                <a href="#"><h5>{{__('Schedule available appointments')}}</h5></a>
                            </div>
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
                    <div class="col-6 col-md-6">
                        <h5 class="mr-auto w_max_content">{{__('Definition Video')}}</h5>
                    </div>
                </div>
                <div class="feature-image position-relative mt-4">
                    <img src="{{asset('assets/images/video_img.PNG')}}" alt="">
                    <div class="popup-video position-absolute">
                        <a class="popup-vimeo" href="{{asset('assets/videos/faris.mp4')}}">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>

            </div>

            <div class="profile_bg">
                <div class="row">
                    <div class="col-6 col-md-6">
                        <h5 class="mr-auto w_max_content">{{__('Experience')}}</h5>
                    </div>
                </div>
                <p class="text-left mt-4 font_17">{{__("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus adipisci assumenda beatae consequuntur, dolores illum in labore magnam molestiae nemo nihil nobis numquam quae, quibusdam quos repellendus, soluta tenetur voluptatum?")}}<br>{{__("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus adipisci assumenda beatae consequuntur, dolores illum in labore magnam molestiae nemo nihil nobis numquam quae, quibusdam quos repellendus, soluta tenetur voluptatum?")}}</p>

            </div>

            <div class="profile_bg">
                <div class="row">
                    <div class="col-6 col-md-6">
                        <h5 class="mr-auto w_max_content">{{__('Education')}}</h5>
                    </div>
                </div>
                <p class="text-left mt-4 font_17">{{__("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus adipisci assumenda beatae consequuntur, dolores illum in labore magnam molestiae nemo nihil nobis numquam quae, quibusdam quos repellendus, soluta tenetur voluptatum?")}}<br>{{__("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus adipisci assumenda beatae consequuntur, dolores illum in labore magnam molestiae nemo nihil nobis numquam quae, quibusdam quos repellendus, soluta tenetur voluptatum?")}}</p>
            </div>
            <div class="profile_bg">
                <div class="row">
                    <div class="col-6 col-md-6">
                        <h5 class="mr-auto w_max_content">{{__('Skills')}}</h5>
                    </div>
                </div>
                <p class="text-left mt-4 font_17">{{__("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus adipisci assumenda beatae consequuntur, dolores illum in labore magnam molestiae nemo nihil nobis numquam quae, quibusdam quos repellendus, soluta tenetur voluptatum?")}}<br>{{__("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus adipisci assumenda beatae consequuntur, dolores illum in labore magnam molestiae nemo nihil nobis numquam quae, quibusdam quos repellendus, soluta tenetur voluptatum?")}}</p>
            </div>
            </div>


        </div>
    </section>

@endsection
@section('js')
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
@stop
