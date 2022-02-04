@extends('layouts.app')
@section('title', __('Correspondence Teacher'))
@section('content')
    <section class="profile_complete teacher_profile std_teacher_profile correspondence_teacher">
        <div class="container">
            <div class="teac_shadow">
            <div class="profile_bg prof_head">
                <div class="corresp_btn">
                    <nav class="navbar navbar-expand-lg">
                    <li class="nav-item dropdown d-inline-block m-auto">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-cog mr-2"></i>{{__('options')}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">{{__('options')}} 1</a>
                            <a class="dropdown-item" href="#">{{__('options')}} 2</a>
                        </div>
                    </li>
                        </nav>
                <button class="form-control btn_newsletter mt-0 mb-3">{{__('The project completed')}}</button>
                </div>
                    <div class="profile_username">
                    <h5>{{__('English / college / speaking and writing lessons')}}</h5>
                </div>
                <h5 class="mb-3 f_w_400"><i class="fa fa-user"></i>{{__('Adam Ali')}}</h5>
                <div class="create_response">
                <div class="bg_white">
                    <div class="">
                        <div class="row">
                            <div class="col-12 col-md-6 d-flex">
                                <div class="prof_img">
                                    <img class="profile_img" src="{{asset('assets/images/avatar.PNG')}}" width="100" height="100" alt="">
                                </div>
                                <h5 class="m_auto_20 color_red">{{__('Adam Ali')}}</h5>
                            </div>
                        </div>
                        <p class="text-left font_17 p_0_120">{{__("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus adipisci assumenda beatae consequuntur, dolores illum in labore magnam molestiae nemo nihil nobis numquam quae, quibusdam quos repellendus, soluta tenetur voluptatum?")}}</p>
                    </div>

                    </div>
                <div class="bg_white">
                    <div class="">
                        <div class="row">
                            <div class="col-12 col-md-6 d-flex">
                                <div class="prof_img">
                                    <img class="profile_img" src="{{asset('assets/images/avatar.PNG')}}" width="100" height="100" alt="">
                                </div>
                                <h5 class="m_auto_20 color_red">{{__('Adam Ali')}}</h5>
                            </div>
                        </div>
                        <p class="text-left font_17 p_0_120">{{__("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus adipisci assumenda beatae consequuntur, dolores illum in labore magnam molestiae nemo nihil nobis numquam quae, quibusdam quos repellendus, soluta tenetur voluptatum?")}}</p>
                    </div>
                    <h5 class="text-left mt-5 mb-3 p_0_120 color_blue">{{__('Add response to this message')}}</h5>
                    <div class="corres_response">
                    <textarea name="" id="" cols="30" rows="10" class="form-control mb-4"></textarea>
                    <div class="row d-flex">
                    <div class="col-12 col-md-4 attach_btn">
                        <button class="form-control" onclick="document.getElementById('getFile11').click()"><i class="fas fa-paperclip mr-2"></i>{{__('Attach files')}}</button>
                        <input id="getFile11" type="file" class="d-none">
                    </div>
                        <div class="col-12 col-md-4 attach_btn">
                            <button class="form-control" onclick="document.getElementById('getFile12').click()"><img src="{{asset('assets/images/icon/voice_line.svg')}}" width="18" class="mr-2">
                                {{__('Attach a voice message')}}</button>
                            <input id="getFile12" type="file" class="d-none">
                        </div>
                    </div>
                    </div>
                    <div class="scholarship">
                        <button class="form-control m-auto btn_complete">{{__('Send')}}</button>
                        <a href="#" class="form-control btn_newsletter">{{__('Evaluation')}}</a>
                    </div>
                </div>

                </div>
            </div>

            </div>


        </div>
    </section>

@endsection
@section('js')
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
@stop
