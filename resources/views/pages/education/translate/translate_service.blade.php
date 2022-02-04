@extends('layouts.app')
@section('title', __('Document translation service'))
@section('content')
<section class="safeer std_form translate_srv">
    <div class="col-lg-5 m-auto text-center col-custom">
        <div class="section-content mb-5">
            <h2 class="title-1">{{__('Professional document translation service')}}</h2>
        </div>
    </div>
    <div class="container">


        <form method="POST" id="form_r" action="{{route(app()->getLocale().'.translate_service')}}"  enctype="multipart/form-data">
            @csrf
        <div class="row">
            <div class="col-12 col-md-12 m-auto mt-4">

                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="mb-1">
                            <label for="file_type" class="">{{__('Email')}}</label>
                            <input name="email" type="email" class="form-control"
                                   value="@if(Auth::check())
                                    {{Auth::user()->email}}
                                    @endif

" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                 <div class="col-12 col-md-4">
                <div class="mb-1">
                    <label for="file_type" class="">{{__('File Type')}}</label>
                    <select name="type_file" id="file_type" class="form-control" required>
                        <option value="">{{__('Choose File Type')}}</option>
                        <option value="1">{{__('Legal')}}</option>
                        <option value="2">{{__('Geometric')}}</option>
                        <option value="3">{{__('Medical')}}</option>
                        <option value="4">{{__('Technical')}}</option>
                        <option value="5">{{__('Academic ')}}</option>
                        <option value="6">{{__('Public')}}</option>
                    </select>
                </div>
                </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="mb-1">
                            <label for="file_type" class="mb-2">{{__('File language')}}</label>
                            <select name="Original_language" id="file_type" class="form-control" required>
                                <option value="">{{__('Choose language')}}</option>
                                <option value="1">{{__('Arabic')}}</option>
                                <option value="2">{{__('English')}}</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="mb-1">
                            <label for="file_target" class="mb-2">{{__('Target language')}}</label>
                            <select name="Target_language" id="file_target" class="form-control" required>
                                <option value="">{{__('Choose language')}}</option>
                                <option value="1">{{__('Arabic')}}</option>
                                <option value="2">{{__('English')}}</option>
                            </select>
                        </div>
                    </div>
                </div>
                <hr>
                <label for="" class="mb-2">{{__('Service Type')}}</label>
                <div class="row">
                        <div class="col-12 col-md-12 recharge mb-2">
                            <label>
                                <input type="radio" name="type_service" value="translation" checked>
                                <div class="tranlate_type_radio">
                                    <p class="">{{__('Translation')}}</p>
                                </div>
                            </label>

                            <label>
                                <input type="radio" name="type_service" value="reformulate">
                                <div class="tranlate_type_radio">
                                    <p class="">{{__('Reformulate')}}</p>
                                </div>
                            </label>

                            <label>
                                <input type="radio" name="type_service" value="review">
                                <div class="tranlate_type_radio">
                                    <p class="">{{__('Review and audit')}}</p>
                                </div>
                            </label>
                        </div>
                </div>
                <hr>
                <div class="row">
                <div class="col-12 col-md-6">
                <label class="mb-2 mr-5">{{__('Add details')}}</label><span class="color_red ml-5">{{__('Optional')}}</span>
                <textarea name="deatils" id="" cols="30" rows="6" class="form-control safeer_textarea mt-0" required></textarea>
                </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 col-md-5 m-auto d-flex">
                        <button class="form-control btn_newsletter mr-2" onclick="document.getElementById('getFile1').click()">{{__('Download File')}}</button>
                        <input id="getFile1" type="file" class="d-none" name="file" required>
                            {{--<button class="form-control btn_newsletter ml-2">{{__('Writing text')}}</button>--}}
                    </div>
                </div>
                <div class="scholarship">
                    <button class="form-control btn_complete m-auto" type="submit">{{__('Next')}}</button>
                </div>
            </div>
        </div>
            </form>
    </div>
</section>
@endsection