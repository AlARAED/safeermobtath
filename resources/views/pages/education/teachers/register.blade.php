@extends('layouts.app')
@section('title', __('Student Registeration'))
@section('content')
    <section class="std_reg">
    <div class="bg_std">
    </div>
        <form method="POST" id="form_r" action="{{route(app()->getLocale().'.teacher_profile')}}"  enctype="multipart/form-data">
            @csrf
            <section class="std_form">
            <div class="container">
                <div id="service_type" class="row form-group eduction_type service_type d-none">
                    <div class="col-12 col-md-8 d-flex ml-auto">
                        <select name="" class="form-control service_type w_200"  >
                            <option value="">{{__('Choose')}}</option>
                            <option value="">{{__('Inside Saudi Arabia')}}</option>
                            <option value="">{{__('Outside Saudi Arabia')}}</option>
                        </select>
                        <select name="" id="s_arabia" class="form-control service_type ml-3" >
                            <option value="">{{__('Choose Country')}}</option>
                            <option value="">{{__('Riyadh')}}</option>
                            <option value="">{{__('Mecca')}}</option>
                        </select>
                    </div>
                </div>
                {{--<div class="row form-group eduction_type d-none">--}}
                <div class="row form-group eduction_type">
                    <div class="col-5 col-md-7">
                        <select  id="eduction_type" class="form-control" name="type_service" REQUIRED>
                            <option value="">{{__('Choose')}}</option>
                            <option value="1">{{__('Teaching language')}}</option>
                            <option value="2">{{__('Teaching lessons')}}</option>
                            <option value="3">{{__('Help in writing a research plan For masters students')}}</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-4 col-md-2">
                        <label for="register_as">{{__('Register as')}}</label>
                    </div>
                    <div class="col-8 col-md-4">
                        <select id="register_as" class="form-control" name="type_application_submitted" REQUIRED>
                            <option value="">{{__('Choose')}}</option>
                            <option value="1">{{__('Teacher')}}</option>
                            <option value="2">{{__('Student')}}</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-4 col-md-2">
                        <label for="first_name">{{__('First Name')}}</label>
                    </div>
                    <div class="col-8 col-md-4">
                        <input type="text" id="first_name" class="form-control" name="first_name" REQUIRED>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-4 col-md-2">
                        <label for="last_name">{{__('Last Name')}}</label>
                    </div>
                    <div class="col-8 col-md-4">
                        <input type="text" id="last_name" class="form-control" name="last_name"  REQUIRED>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-4 col-md-2">
                        <label for="email">{{__('Email')}}</label>
                    </div>
                    <div class="col-8 col-md-4">
                        <input type="email" id="email" class="form-control" name="email"  value="{{Auth::user()->email}}" >
                    </div>
                </div>


                                <div class="row form-group">
                    <div class="col-4 col-md-2">
                        <label for="mobile_number">{{__('Mobile Number')}}</label>
                    </div>
                    <div class="col-8 col-md-4">
                        <input type="text" id="mobile_number" class="form-control" name="phone_no" style="    width: 354px;
">
                    </div>
{{--                    <span   class="std_notes">{{__('A verification code will be sent to activate your account')}}</span>--}}
                </div>

                <div class="row form-group d-none" id="research_field">
                    <div class="col-4 col-md-2">
                        <label for="specialization">{{__('Research field / specialization')}}</label>
                    </div>
                    <div class="col-8 col-md-4">
                        <input type="text" id="specialization" class="form-control">
                    </div>
                </div>
                <div class="row form-group d-none" id="search_title">
                    <div class="col-4 col-md-2">
                        <label for="srch_title">{{__('Search Title')}}</label>
                    </div>
                    <div class="col-8 col-md-4">
                        <input type="text" id="srch_title" class="form-control">
                    </div>
                </div>
                <div class="scholarship">
{{--                <button data-toggle="modal" data-target="#verificationModal" class="form-control m-auto btn_complete">{{__('Next')}}<i class="fa @if(App::getLocale() == 'en') fa-arrow-right @else fa-arrow-left @endif"></i></button>--}}
{{--                    <button class="form-control m-auto btn_complete" ><i class="fa @if(App::getLocale() == 'en') fa-arrow-right @else fa-arrow-left @endif"></i>{{__('A verification code will be sent to activate your account')}}</button>--}}

                    <button  type="submit" class="form-control m-auto btn_complete">{{__('Next')}}<i class="fa @if(App::getLocale() == 'en') fa-arrow-right @else fa-arrow-left @endif"></i></button>

                </div>
            </div>
        </section>

    </form>
    </section>

    <div class="modal fade" id="verificationModal" tabindex="-1" role="dialog" aria-labelledby="verificationModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="verificationModalLabel">{{__('Verification Code')}}</h5>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                                    <div id="verif_code">
                                        <input type="text" maxLength="4" size="4" min="4" max="4" pattern="[0-9]{1}"  STYLE="    WIDTH: 259PX;
"/>

                                    </div>
                            </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">{{__('Confirm and complete the account creation as a teacher')}}</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $('#eduction_type').change(function(){
            if($(this).val() == '3'){
                $('#service_type').removeClass('d-none');
            }
            if($(this).val() == '' || $(this).val() == '1' || $(this).val() == '2') {
                $('#service_type').addClass('d-none');
                $('#research_field').addClass('d-none');
                $('#search_title').addClass('d-none');
            }
            if($(this).val() == '3' && $('#register_as').val() == '1'){
                $('#research_field').removeClass('d-none');
                $('#search_title').addClass('d-none');
            }
            if($(this).val() == '3' && $('#register_as').val() == '2'){
                $('#research_field').removeClass('d-none');
                $('#search_title').removeClass('d-none');
            }
        });
        $('#register_as').change(function(){
            if($(this).val() == '1' && $('#eduction_type').val() == '3'){
                $('#research_field').removeClass('d-none');
                $('#search_title').addClass('d-none');
            }
            if($(this).val() == '2' && $('#eduction_type').val() == '3'){
                $('#search_title').removeClass('d-none');
                $('#research_field').removeClass('d-none');
            }
            if($(this).val() == '' && $('#eduction_type').val() == '3'){
                $('#search_title').addClass('d-none');
                $('#research_field').addClass('d-none');
            }
        });
//        $('#register_as').change(function(){
//            if($(this).val() == '1'){
//                $('.eduction_type').removeClass('d-none');
//            }
//            if($(this).val() == '2' || $(this).val() == ''){
//                $('.eduction_type').addClass('d-none');
//
//            }
//        });


            var input = document.querySelector("#mobile_number");
            window.intlTelInput(input, {

                    preferredCountries: ['ae', 'tr'],
            separateDialCode: true,
            utilsScript: "utils.js",
        });
    </script>

    <script>
        $('#form_r').on('submit',function (e){
            e.preventDefault();
            $('#conutry_code').remove();
            $('#form_r').append('<input type="hidden" id="conutry_code" name="conutry_code" value="'+$('.iti__selected-dial-code').text()+'"/>');

            $(this).unbind('submit').submit();
        });

    </script>



@stop
