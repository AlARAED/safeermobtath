@extends('layouts.app')
@section('title', __('business gallery'))
@section('content')
    <section class="recharge">
        <div class="container">
            <div class="profile_bg">
                <select name="" class="form-control m-auto determine_city">
                    <option value="">{{__('Determine the city')}}</option>
                    <option value="">{{__('Riyadh')}}</option>
                    <option value="">{{__('Mecca')}}</option>
                </select>
                <h3>{{__('Your business gallery')}}</h3>
                <div class="row">
                <div class="col-12 col-md-12 d-flex mb-5 mt-5">
                <div class="col-6 col-md-6 attach_btn pr-0 attach_works">
                    <button class="form-control btn_img" onclick="document.getElementById('getFile11').click()">{{__('Attach picture')}}</button>
                    <input id="getFile11" type="file" class="d-none">
                </div>
                <div class="col-6 col-md-6 attach_btn pl-0 attach_works">
                    <button class="form-control btn_video" onclick="document.getElementById('getFile12').click()">{{__('Attach video')}}</button>
                    <input id="getFile12" type="file" class="d-none">
                </div>
                </div>
                </div>

                <div class="recharge_form">
                    <div class="col-12 col-md-12">
                    <div class="row form-group mb-4">
                        <div class="col-12 col-md-3">
                            <label for="project">{{__('Business / project name')}}</label>
                        </div>
                        <div class="col-12 col-md-4">
                            <input type="text" id="project" class="form-control">
                        </div>
                    </div>
                <div class="row form-group mb-4">
                    <div class="col-12 col-md-3">
                        <label for="business">{{__('About the business')}}</label>
                    </div>
                    <div class="col-12 col-md-4">
                        <input type="text" id="business" class="form-control">
                    </div>
                </div>
                </div>


            <div class="scholarship">
                <button class="form-control m-auto btn_complete">{{__('Saving Data')}}</button>
            </div>
            </div>
        </div>
    </section>

@endsection
