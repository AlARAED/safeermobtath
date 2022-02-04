@extends('layouts.app')
@section('title', __('Student Registeration'))
@section('content')
    <section class="std_reg">
        <div class="bg_std">

        </div>

        <section class="profile_complete">
            <div class="container">



                <form method="POST" id="form_r" action="{{route(app()->getLocale().'.teacher_lang')}}"  enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="first_name" class="form-control" name="type_service" value="2">
                    <input type="hidden" id="first_name" class="form-control" name="type_application_submitted" value="1">



                    <div class="profile_bg">

                        <div class="row form-group">

                        <div class="col-4 col-md-2">
                                <h5 for="first_name">{{__('First Name')}}</h5>
                            </div>
                            <div class="col-8 col-md-4">
                                <input type="text" id="first_name" class="form-control" name="first_name" REQUIRED>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-4 col-md-2">
                                <h5 for="last_name">{{__('Last Name')}}</h5>
                            </div>
                            <div class="col-8 col-md-4">
                                <input type="text" id="last_name" class="form-control" name="last_name"  REQUIRED>
                            </div>
                        </div>

                        <div class="row ">
                            <div class="col-4 col-md-2">
                                <h5 for="email">{{__('Email')}}</h5>
                            </div>
                            <div class="col-8 col-md-4">
                                <input type="email" id="email" class="form-control" name="email"  value="{{Auth::user()->email}}" >
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col-4 col-md-2">
                                <h5 for="mobile_number">{{__('Mobile Number')}}</h5>
                            </div>
                            <div class="col-8 col-md-4">
                                <input type="text"  class="form-control" name="phone_no" placeholder="+966_XXX_XXX">
                            </div>
                            {{--                    <span   class="std_notes">{{__('A verification code will be sent to activate your account')}}</span>--}}
                        </div>

                        <div class="row form-group">
                            <div class="col-4 col-md-2">
                                <h5 for="mobile_number">{{__('Price Hour ')}}</h5>
                            </div>
                            <div class="col-8 col-md-4">
                                <input type="text"  class="form-control" name="price_per_hour" placeholder="0$">
                            </div>
                            {{--                    <span   class="std_notes">{{__('A verification code will be sent to activate your account')}}</span>--}}
                        </div>


                        <div class="row ">
                            <div class="col-4 col-md-2">
                                <h5 for="email">{{__('Field of teaching')}}</h5>
                            </div>
                            <div class="col-8 col-md-4">
                                <input type="text" id="email" class="form-control" name="lesson_type"  required >
                            </div>
                        </div>


                    </div>




                    <div class="profile_bg">
                        <h5 class="prof_info">{{__("Please introduce yourself by sharing the information: Why are you interested in learning languages and what is your main motivation; You can write about yourself as a person, stating your main accomplishments and life goals; Any other interesting information about you that you would like to share would be appreciated. Note: You can write in different languages, so that different language speakers can read and understand the text")}}</h5>
                        <textarea name="short_cv" id="" cols="30" rows="15" class="form-control safeer_textarea" required ></textarea>
                    </div>
                    <div class="profile_bg">
                        <div class="row">
                            <div class="col-6 col-md-6 m-auto">
                                <h5 class="mr-auto w_max_content">{{__('Definition Video')}}</h5>
                            </div>
                            <div class="col-6 col-md-6 d-flex float-right">
                                <span class="form-control btn_newsletter ml-auto mr-0" onclick="document.getElementById('getFile300').click()">{{__('Attach')}}</span>
                                <input id="getFile300" type="file" class="d-none" name="vedio_cv">

                            </div>
                        </div>

                    </div>


                    <div class="scholarship">
                        <button class="form-control m-auto btn_complete">{{__('Next')}}</button>
                    </div>

                </form>
                {{--            <div class="modal fade" id="verificationModal" tabindex="-1" role="dialog" aria-labelledby="verificationModalLabel" aria-hidden="true">--}}
                {{--                <div class="modal-dialog" role="document">--}}
                {{--                    <div class="modal-content">--}}
                {{--                        <div class="modal-header">--}}
                {{--                            <h5 class="modal-title" id="verificationModalLabel">{{__('Verification Code')}}</h5>--}}
                {{--                        </div>--}}
                {{--                        <div class="modal-body">--}}
                {{--                            <form>--}}
                {{--                                <div class="form-group">--}}
                {{--                                    <div id="verif_code">--}}
                {{--                                        <input type="text" maxLength="4" size="4" min="4" max="4" pattern="[0-9]{1}"  STYLE="    WIDTH: 259PX;--}}
                {{--"/>--}}

                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                            </form>--}}
                {{--                        </div>--}}
                {{--                        <div class="modal-footer">--}}
                {{--                            <button type="button" class="btn btn-primary">{{__('Confirm and complete the account creation as a teacher')}}</button>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--            </div>--}}


            </div>






        </section>


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
