@extends('layouts.app')
@section('title', __('Supervisor Profile'))
@section('content')
    <section class="profile_complete research_st_profile sup_profile">
        <div class="container">
            <div class="teac_shadow">
            <div class="profile_bg prof_head">
                <div class="row prof_content">
                    <div class="col-12 col-md-10 d-flex m-auto">
                        <div class="col-12 col-md-4">
                            <div class="d-flex mb-2">
                                <h5 class="f_w_600">{{__('Name')}}:</h5><p>{{__('Adam Ali')}}</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="far fa-clock"></i><h5>{{__('Timing')}}</h5><p>10:10 {{__('pm')}}</p>
                            </div>
                            <div class="d-flex mb-2">
                                <h5>{{__('City')}}</h5>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="ml-auto w_max_content">
                            <div class="d-flex mb-2">
                                <h5 class="f_w_600">{{__('Majors he is interested')}}:</h5><p>{{__('Business Administration')}}</p>
                            </div>
                                </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="ml-auto w_max_content">
                                <a href="#"><h5 class="edit_data">{{__('Edit Data')}}</h5></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="profile_bg">
                    <h5 class="mb-5 color_red">{{__('Names of students available according to your major and data')}}</h5>
                    <div class="row mb-4">
                        <div class="col-12 col-md-7 d-flex mr-auto mt-auto mb-auto">
                            <h5 class="mr-5 f_w_400">{{__('Name of the first student')}}</h5>
                            <h5 class="mr-5 f_w_400">{{__('City')}}</h5>
                            <h5 class="mr-5 f_w_400">{{__('Specialization')}}</h5>
                        </div>
                        <div class="col-12 col-md-5 d-flex scholarship">
                            <button type="submit" class="form-control btn_newsletter ml-auto">{{__('Selection')}}</button>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12 col-md-7 d-flex mr-auto mt-auto mb-auto">
                            <h5 class="mr-5 f_w_400">{{__('Name of the first student')}}</h5>
                            <h5 class="mr-5 f_w_400">{{__('City')}}</h5>
                            <h5 class="mr-5 f_w_400">{{__('Specialization')}}</h5>
                        </div>
                        <div class="col-12 col-md-5 d-flex scholarship">
                            <button type="submit" class="form-control btn_newsletter ml-auto">{{__('Selection')}}</button>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12 col-md-7 d-flex mr-auto mt-auto mb-auto">
                            <h5 class="mr-5 f_w_400">{{__('Name of the first student')}}</h5>
                            <h5 class="mr-5 f_w_400">{{__('City')}}</h5>
                            <h5 class="mr-5 f_w_400">{{__('Specialization')}}</h5>
                        </div>
                        <div class="col-12 col-md-5 d-flex scholarship">
                            <button type="submit" class="form-control btn_newsletter ml-auto">{{__('Selection')}}</button>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12 col-md-7 d-flex mr-auto mt-auto mb-auto">
                            <h5 class="mr-5 f_w_400">{{__('Name of the first student')}}</h5>
                            <h5 class="mr-5 f_w_400">{{__('City')}}</h5>
                            <h5 class="mr-5 f_w_400">{{__('Specialization')}}</h5>
                        </div>
                        <div class="col-12 col-md-5 d-flex scholarship">
                            <button type="submit" class="form-control btn_newsletter ml-auto">{{__('Selection')}}</button>
                        </div>
                    </div>
                        <div class="custom-control custom-checkbox mb-2 mt-5">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">{{__("I'm still available to supervise more students")}}</label>
                        </div>
                    <div class="scholarship mt-4">
                    <button type="submit" class="form-control m-auto btn_complete">{{__('Next')}}</button>
                        </div>
                </div>


                </div>
        </div>
    </section>

@endsection
