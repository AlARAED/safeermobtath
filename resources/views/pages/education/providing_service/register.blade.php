@extends('layouts.app')
@section('title', __('Register a service'))
@section('content')
    <section class="std_reg">
    <div class="bg_std">
    </div>
    <form action="#">
        <section class="std_form">
            <div class="container">
                <div class="row form-group eduction_type service_type d-none">
                    <div class="col-5 col-md-8 d-flex">
                        <select name="" id="s_arabia" class="form-control service_type ml-auto">
                            <option value="">{{__('Choose')}}</option>
                            <option value="">{{__('Inside Saudi Arabia')}}</option>
                            <option value="">{{__('Outside Saudi Arabia')}}</option>
                        </select>
                        <select name="" id="eduction_type" class="form-control service_type ml-3">
                            <option value="">{{__('Choose Country')}}</option>
                            <option value="">{{__('Riyadh')}}</option>
                            <option value="">{{__('Mecca')}}</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-4 col-md-2">
                        <label for="register_as">{{__('Register as')}}</label>
                    </div>
                    <div class="col-8 col-md-4">
                        <select name="" id="register_as" class="form-control">
                            <option value="">{{__('Choose')}}</option>
                            <option value="1">{{__('Service provider')}}</option>
                            <option value="2">{{__('Service request')}}</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-4 col-md-2">
                        <label for="first_name">{{__('First Name')}}</label>
                    </div>
                    <div class="col-8 col-md-4">
                        <input type="text" id="first_name" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-4 col-md-2">
                        <label for="last_name">{{__('Last Name')}}</label>
                    </div>
                    <div class="col-8 col-md-4">
                        <input type="text" id="last_name" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-4 col-md-2">
                        <label for="region_city">{{__('Region / city')}}</label>
                    </div>
                    <div class="col-8 col-md-4">
                        <input type="text" id="region_city" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-4 col-md-2">
                        <label for="email">{{__('Email')}}</label>
                    </div>
                    <div class="col-8 col-md-4">
                        <input type="email" id="email" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-4 col-md-2">
                        <label for="mobile_number">{{__('Mobile Number')}}</label>
                    </div>
                    <div class="col-8 col-md-4">
                        <input type="text" id="mobile_number" class="form-control">
                    </div>
                    <span class="std_notes">{{__('A verification code will be sent to activate your account')}}</span>
                </div>
                <div class="row form-group">
                    <div class="col-4 col-md-2">
                        <label for="password">{{__('Password')}}</label>
                    </div>
                    <div class="col-8 col-md-4">
                        <input type="password" id="password" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-4 col-md-2">
                        <label for="password_confirm">{{__('Password Confirm')}}</label>
                    </div>
                    <div class="col-8 col-md-4">
                        <input type="password" id="password_confirm" class="form-control">
                    </div>
                </div>
                <div class="scholarship">
                <button data-toggle="modal" data-target="#verificationModal" class="form-control m-auto btn_complete">{{__('Next')}}<i class="fa @if(App::getLocale() == 'en') fa-arrow-right @else fa-arrow-left @endif"></i></button>
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
                                        <input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
                                        <input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
                                        <input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
                                        <input type="text" maxLength="1" size="1" min="0" max="9" pattern="[0-9]{1}" />
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
        $('#register_as').change(function(){
            if($(this).val() == '2'){
                $('.service_type').removeClass('d-none');
            }
            if($(this).val() == '1' || $(this).val() == ''){
                $('.service_type').addClass('d-none');

            }
        });
    </script>
@stop